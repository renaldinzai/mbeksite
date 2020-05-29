<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_cart extends CI_Model {

	function __construct() {
		parent:: __construct();
	}

	public function show() {
		$userid = $_SESSION['id'];
		$ambil = $this->db->get_where('belanja', array('userid' => $userid));
		if($ambil->num_rows()>0){
			foreach ($ambil->result() as $data) {
				$hasil[] = $data;
			}
			return $hasil;
		}
	}

	public function tambahBelanjaan() {
		$jumlah = $this->input->post('jumlah');
		$userid = $_SESSION['id'];

	    $this->db->select('id_prd, id, username, nama_prd, harga, gambar_prd');
	    $q = $this->db->get('allproduk')->result();
        foreach($q as $r) {
            $this->db->update('belanja', $r, array('id_prd' => $r->id_prd));
            
            $field = array(
				'jumlah' => $jumlah,
				'userid' => $userid
				);
            
            $this->db->insert('belanja', $field);
		}
	}
}