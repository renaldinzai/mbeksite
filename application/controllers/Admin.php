<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct() {
		parent:: __construct();
		$this->load->model('admin/model_login');
	}

	public function index()
	{

		if ($this->session->userdata('isLogAdmin') == TRUE) {
			redirect('myadmin/dashboard');
		}
		else {
			$this->load->view('admin/login'); 
		}

	}

	function do_login() {
		$usernameadmin = $this->input->post('usernameadmin');
		$password = $this->input->post('password');
		$id_admin = $this->model_login->getID($username);

		$cek = $this->model_login->cek_admin($usernameadmin, $password);
			if(count($cek) == 1) {
				$this->session->set_userdata(array(
								'isLogAdmin' => TRUE, 
								'usernameadmin' => $usernameadmin,
								'id_admin' => $id_admin));
				redirect('myadmin/dashboard');
			} else {
				$this->session->set_flashdata('gagallogin','Maaf, username atau password yang Anda masukkan salah.');
				$this->load->view('admin/login');
			}
	}

	function logout() {
		$this->session->sess_destroy();
		redirect('admin','refresh');
	}

	public function showInfo() {
		$this->load->model('admin/m_blog');
		if ($this->session->userdata('isLogAdmin') == TRUE) {
			$this->data['mydata'] = $this->m_blog->displayInfo();
			$this->load->view('admin/lihatInfo', $this->data);
		}
		else {
			echo '<script>alert("Maaf, Anda tidak memiliki hak akses. Silahkan login terlebih dahulu.");</script>';
			redirect('dashboard');
		}
	}

	public function showKandang() {
		$this->load->model('admin/m_invKandang');
		if ($this->session->userdata('isLogAdmin') == TRUE) {
			$this->data['mydata'] = $this->m_invKandang->displayKandang();
			$this->load->view('admin/lihatInvKandang', $this->data);
		}
		else {
			echo '<script>alert("Maaf, Anda tidak memiliki hak akses. Silahkan login terlebih dahulu.");</script>';
			redirect('dashboard');
		}
	}

	public function showKambing() {
		$this->load->model('admin/m_invKambing');
		if ($this->session->userdata('isLogAdmin') == TRUE) {
			$this->data['mydata'] = $this->m_invKambing->displayKambing();
			$this->load->view('admin/lihatInvKambing', $this->data);
		}
		else {
			echo '<script>alert("Maaf, Anda tidak memiliki hak akses. Silahkan login terlebih dahulu.");</script>';
			redirect('dashboard');
		}
	}

	public function showQurban() {
		$this->load->model('admin/m_qurban');
		if ($this->session->userdata('isLogAdmin') == TRUE) {
			$this->data['mydata'] = $this->m_qurban->displayQurban();
			$this->load->view('admin/lihatQurban', $this->data);
		}
		else {
			echo '<script>alert("Maaf, Anda tidak memiliki hak akses. Silahkan login terlebih dahulu.");</script>';
			redirect('dashboard');
		}
	}
}
