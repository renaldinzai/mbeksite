<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_qurban extends CI_Model {

	function __construct() {
		parent:: __construct();
	}

	public function addQurban() {
		$userid = $_SESSION['id'];
		$jenis = $this->input->post('jenis');
		$tujuan = $this->input->post('tujuan');
		$pesan = $this->input->post('pesan');

		$field = array(
			'id' => $userid,
			'jenis' => $jenis,
			'tujuan' => $tujuan,
			'pesan'=> $pesan
			);

			$this->db->insert('qurban', $field);

	}

	public function showQurban() {
		$userid = $_SESSION['id'];
		$ambil = $this->db->get_where('qurban', array('id' => $userid));
			if($ambil->num_rows()>0){
				foreach ($ambil->result() as $data) {
					$hasil[] = $data;
				}
				return $hasil;
			}
	}

}