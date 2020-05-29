<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct() {
		parent:: __construct();
	}

	public function index()
	{
		if ($this->session->userdata('isLogin') == TRUE) {
			redirect('');
		}
		else {
			$this->load->view('dashboard'); 
		}
	}

}
