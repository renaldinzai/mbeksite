<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Investasi extends CI_Controller {

	function __construct() {
		parent:: __construct();
		$this->load->model('m_investasi');
	} 

	public function index()
	{

	}

	//Kandang
	public function tambahKandang() {
		if ($this->session->userdata('isLogin') == TRUE){
		$this->load->view('investasiKandang');
	} else {
			echo '<script>alert("Maaf, Anda tidak memiliki hak akses!");</script>';
			redirect('','refresh');
		}
	}

	public function addKandang() {
		if($this->input->post('invest')){
			$this->m_investasi->addingKandang();
			echo '<script>alert("Terimakasih. Permintaan Anda akan segera diproses!");</script>';
			redirect('investasi/tambahKandang', 'refresh'); 
		} else{
			redirect('userpage','refresh');
		}
	}

	public function showKandang() {
		if ($this->session->userdata('isLogin') == TRUE) {
			$this->load->model('m_investasi');
			$this->data['mydata'] = $this->m_investasi->displayKandang();
			$this->load->view('lihatKandang', $this->data);
		}
		else {
			echo '<script>alert("Maaf, Anda tidak memiliki hak akses. Silahkan login terlebih dahulu.");</script>';
			redirect('dashboard');
		}
	}

	//Kambing
	public function tambahKambing() {
		if ($this->session->userdata('isLogin') == TRUE){
		$this->load->view('investasiKambing');
	} else {
			echo '<script>alert("Maaf, Anda tidak memiliki hak akses!");</script>';
			redirect('','refresh');
		}
	}

	public function addKambing() {
		if($this->input->post('invest')){
			$this->m_investasi->addingKambing();
			echo '<script>alert("Terimakasih. Permintaan Anda akan segera diproses!");</script>';
			redirect('investasi/tambahKambing', 'refresh'); 
		} else{
			redirect('userpage','refresh');
		}
	}

	public function showKambing() {
		if ($this->session->userdata('isLogin') == TRUE) {
			$this->load->model('m_investasi');
			$this->data['mydata'] = $this->m_investasi->displayKambing();
			$this->load->view('lihatKambing', $this->data);
		}
		else {
			echo '<script>alert("Maaf, Anda tidak memiliki hak akses. Silahkan login terlebih dahulu.");</script>';
			redirect('dashboard');
		}
	}


}