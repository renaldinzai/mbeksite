<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_allproduk extends CI_Model {

	function __construct() {
		parent:: __construct();
	}

public function lihatProduk() {
		$ambil = $this->db->get('allproduk');
			if($ambil->num_rows()>0){
				foreach ($ambil->result() as $data) {
					$hasil[] = $data;
				}
				return $hasil;
			}
	}

}