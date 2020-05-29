<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct() {
		parent:: __construct();
		$this->load->model('m_userlogin');
	}

	public function index()
	{

	}

	//Login, Logout, dan Registrasi
	function do_login() {
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$id = $this->m_userlogin->getID($username); 

		$cek_login = $this->m_userlogin->cek_user($username, $password);
			if(count($cek_login) == 1) {
				$this->session->set_userdata(array(
								'isLogin' => TRUE, 
								'username' => $username,
								'id' => $id));
				redirect('user/login');

			} else {
				$this->session->set_flashdata('gagallogin','Maaf, username atau password yang Anda masukkan salah.');
				redirect('dashboard');
			}
	}

	public function login()
	{
		if ($this->session->userdata('isLogin') == TRUE){
			redirect('','refresh');
		} else {
			echo '<script>alert("Maaf, Anda tidak memiliki hak akses!");</script>';
			redirect('','refresh');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('','refresh');
	} 

	function validasiRegistrasi() { 
		$this->form_validation->set_rules('username', 'Username', "trim|required");
		$this->form_validation->set_rules('password', 'Password', "trim|required");
		$this->form_validation->set_rules('confirm-password', 'Password Confirmation', "trim|required|matches[password]");
		$this->form_validation->set_rules('email', 'Email', "trim|required|valid_email");

		if($this->form_validation->run()) {
			$this->load->model('m_registrasi');
			$data = array(
				"username"	=> $this->input->POST("username"),
				"email"	=> $this->input->POST("email"),
				"password"	=> md5($this->input->POST("password")));

			$this->m_registrasi->register($data);
			echo '<script>alert("Registrasi berhasil. Silahkan login menggunakan username dan password Anda.");</script>';
			redirect('dashboard','refresh');
		}
		else {
			echo '<script>alert("Terjadi kesalahan. Silahkan coba lagi.");</script>';
			$this->load->view('dashboard');
		}

	}

	//Redirect Page

	public function blog()
	{
		$this->load->model('m_blog');
		$this->data['mydata'] = $this->m_blog->showBlog();
		$this->load->view('blog', $this->data);
	}

	public function produk()
	{
		if ($this->session->userdata('isLogin') == TRUE) {
			$this->load->model('m_produk');
			$this->data['mydata'] = $this->m_produk->lihatProduk();
			$this->load->view('produkku', $this->data);
		}
		else {
			echo '<script>alert("Maaf, Anda tidak memiliki hak akses. Silahkan login terlebih dahulu.");</script>';
			redirect('dashboard');
		}
	}

	public function investasi()
	{
		if ($this->session->userdata('isLogin') == TRUE) {
			$this->load->model('m_investasi');
			$this->data['mydata'] = $this->m_investasi->lihatInvestasi();
			$this->load->view('investasi', $this->data);
		}
		else {
			echo '<script>alert("Silahkan login terlebih dahulu.");</script>';
			redirect('dashboard');
		}
	}


	public function userpage()
	{
		if ($this->session->userdata('isLogin') == TRUE) {
			$this->load->view('userpage');
		}
		else {
			echo '<script>alert("Maaf, Anda tidak memiliki hak akses. Silahkan login terlebih dahulu.");</script>';
			redirect('dashboard');
		}
	}

}