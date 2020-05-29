<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

	function __construct() {
		parent:: __construct();
		$this->load->model('m_cart');
	}

	public function index()
	{
		if ($this->session->userdata('isLogin') == TRUE){
			if ($this->session->userdata('isLogin') == TRUE) {
				$this->load->model('m_cart');
				$this->data['mydata'] = $this->m_cart->show();
				$this->load->view('cart', $this->data);
			}
		}
		else {
			echo '<script>alert("Maaf, Anda tidak memiliki hak akses. Silahkan login terlebih dahulu.");</script>';
			redirect('dashboard');
		}
	}

	public function add() {
		if ($this->session->userdata('isLogin') == TRUE){
			if($this->input->post('beli')){
				$this->m_cart->tambahBelanjaan();
				echo '<script>alert("Produk berhasil ditambahkan ke keranjang!");</script>';
				redirect('all_produk', 'refresh'); 
			} else{
				echo '<script>alert("Terjadi kesalahan. Silahkan coba lagi!");</script>';
				redirect('all_produk','refresh');
			}
		} else {
			echo '<script>alert("Silahkan login atau register terlebih dahulu!");</script>';
			redirect('dashboard','refresh');
		}
	}
}