<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_investasi extends CI_Model {

	function __construct() {
		parent:: __construct();
	}

	//Kandang
	public function addingKandang() {
		$userid = $_SESSION['id'];
		$alamaternak = $this->input->post('alamaternak');
		$jumlahternak = $this->input->post('jumlahternak');
		$durasi = $this->input->post('durasi'); 


		$field = array(
				'id' => $userid,
				'alamaternak' => $alamaternak,
				'jumlahternak' => $jumlahternak,
				'durasi'=> $durasi
				);

		$this->db->insert('investasikandang', $field);
	}

	public function displayKandang() {
		$userid = $_SESSION['id'];
		$ambil = $this->db->get_where('investasikandang', array('id' => $userid));
			if($ambil->num_rows()>0){
				foreach ($ambil->result() as $data) {
					$hasil[] = $data;
				}
				return $hasil;
			}
	}

	//Kambing
	public function addingKambing() {
		$userid = $_SESSION['id'];
		$jenis = $this->input->post('jenis');
		$banyak = $this->input->post('banyak');


		$field = array(
				'id' => $userid,
				'jenis' => $jenis,
				'banyak' => $banyak
				);

		$this->db->insert('investasikambing', $field);
	}

	public function displayKambing() {
		$userid = $_SESSION['id'];
		$ambil = $this->db->get_where('investasikambing', array('id' => $userid));
			if($ambil->num_rows()>0){
				foreach ($ambil->result() as $data) {
					$hasil[] = $data;
				}
				return $hasil;
			}
	}

}