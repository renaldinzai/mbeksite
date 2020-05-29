<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_registrasi extends CI_Model {

	function __construct() {
		parent:: __construct();
	}

	function register($data) {
		$this->db->insert("user", $data);
	}
}
