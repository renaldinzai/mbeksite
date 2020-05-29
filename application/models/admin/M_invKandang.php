<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_invKandang extends CI_Model {

	function __construct() {
		parent:: __construct();
	}

	public function displayKandang() {
		$ambil = $this->db->get('investasikandang');
		if($ambil->num_rows()>0){
			foreach ($ambil->result() as $data) {
				$hasil[] = $data;
			}
			return $hasil;
		}
	}

	public function editKandang($a){
		$d = $this->db->get_where('investasikandang', array('id_invKandang' => $a))->row();
		return $d;
	}

	public function update($id_invKandang){
			$status = $this->input->post('status');

			$field = array(
				'status'=> $status
			);

			$this->db->where('id_invKandang', $id_invKandang);
			$this->db->update('investasikandang', $field);
	}

	function hapus($a){
		$this->db->delete('investasikandang', array('id_invKandang' => $a));
		return;
	}
}