<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class All_produk extends CI_Controller {

	function __construct() {
		parent:: __construct();
	}

	public function index()
	{
		$this->load->model('m_allproduk');
		$this->data['belanja'] = $this->m_allproduk->lihatProduk();
		$this->load->view('belanja', $this->data);
	}

}