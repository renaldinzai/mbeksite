<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_invKambing extends CI_Model {

	function __construct() {
		parent:: __construct();
	}

	public function displayKambing() {
		$ambil = $this->db->get('investasikambing');
		if($ambil->num_rows()>0){
			foreach ($ambil->result() as $data) {
				$hasil[] = $data;
			}
			return $hasil;
		}
	}

	public function editKambing($a){
		$d = $this->db->get_where('investasikambing', array('id_invKambing' => $a))->row();
		return $d;
	}

	public function update($id_invKambing){
			$jenis = $this->input->post('jenis');
			$banyak = $this->input->post('banyak');
			$status = $this->input->post('status');

			$field = array(
				'jenis'=> $jenis,
				'banyak'=> $banyak,
				'status'=> $status
			);

			$this->db->where('id_invKambing', $id_invKambing);
			$this->db->update('investasikambing', $field);
	}

	function hapus($a){
		$this->db->delete('investasikambing', array('id_invKambing' => $a));
		return;
	}
}