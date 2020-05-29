<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_userlogin extends CI_Model {

	function __construct() {
		parent:: __construct();
	}

	function cek_user($username="", $password="") {
		$query = $this->db->get_where('user',array('username' => $username, 'password' => $password));
		$query = $query->result_array();
		return $query;
	}

	function getID($username="") {
        $this->db->select('id');
    	$this->db->from('user');
    	$this->db->where('username',$username);
    	return $this->db->get()->row()->id;
    }
}  
