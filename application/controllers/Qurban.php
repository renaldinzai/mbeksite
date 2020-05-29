<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Qurban extends CI_Controller {

	function __construct() {
		parent:: __construct();
		$this->load->model('m_qurban');
	}

	public function index()
	{
		if ($this->session->userdata('isLogin') == TRUE) {
			$this->load->model('m_qurban');
			$this->data['mydata'] = $this->m_qurban->showQurban();
			$this->load->view('lihatQurban', $this->data);
		}
		else {
			echo '<script>alert("Silahkan login terlebih dahulu.");</script>';
			redirect('dashboard');
		}
	}

	public function tambahQurban() {
		if ($this->session->userdata('isLogin') == TRUE){
			if($this->input->post('kirim')){
				$this->m_qurban->addQurban();
				echo '<script>alert("Terimakasih telah berqurban!");</script>';
				redirect('user/userpage', 'refresh'); 
			} else{
				redirect('user/userpage','refresh');
			}
		} else {
			echo '<script>alert("Maaf, Anda tidak memiliki hak akses!");</script>';
			redirect('','refresh');
		}
	}
}