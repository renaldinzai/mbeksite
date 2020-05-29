<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_Model {

	function __construct() {
		parent:: __construct();
	}

	function cek_admin($username="", $password="") {
		$query = $this->db->get_where('admin',array('username' => $username, 'password' => $password));
		$query = $query->result_array();
		return $query;
	}


	function getID($username="") {
        $this->db->select('id_admin');
    	$this->db->from('admin');
    	$this->db->where('username',$username);
    	return $this->db->get()->row()->id_admin;
    }
}
