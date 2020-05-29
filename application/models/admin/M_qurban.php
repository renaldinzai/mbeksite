<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_qurban extends CI_Model {

	function __construct() {
		parent:: __construct();
	}

	public function displayQurban() {
		$ambil = $this->db->get('qurban');
		if($ambil->num_rows()>0){
			foreach ($ambil->result() as $data) {
				$hasil[] = $data;
			}
			return $hasil;
		}
	}

	public function editQurban($a){
		$d = $this->db->get_where('qurban', array('id_qurban' => $a))->row();
		return $d;
	}

	public function update($id_qurban){
			$jenis = $this->input->post('jenis');
			$tujuan = $this->input->post('tujuan');
			$pesan = $this->input->post('pesan');
			$status = $this->input->post('status');

			$field = array(
				'jenis'=> $jenis,
				'tujuan'=> $tujuan,
				'pesan'=> $pesan,
				'status'=> $status
			);

			$this->db->where('id_qurban', $id_qurban);
			$this->db->update('qurban', $field);
	}

	function hapus($a){
		$this->db->delete('qurban', array('id_qurban' => $a));
		return;
	}
}