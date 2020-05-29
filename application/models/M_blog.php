<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_blog extends CI_Model {

	function __construct() {
		parent:: __construct();
	}

	public function showBlog() {
		$ambil = $this->db->get('informasi');
			if($ambil->num_rows()>0){
				foreach ($ambil->result() as $data) {
					$hasil[] = $data;
				}
				return $hasil;
			}
	}

}