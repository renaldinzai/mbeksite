<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_blog extends CI_Model {

	function __construct() {
		parent:: __construct();
	}

	public function addingInfo() {
		$config = array();
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = '10000';
		$config['max_width'] = '5000';
		$config['max_height'] = '5000';

		$this->load->library('upload',$config);
		$this->upload->initialize($config);

		if( ! $this->upload->do_upload('userfile')) {
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('upload_form', $error);
		}

		else {
			$judul = $this->input->post('judul');
			$konten = $this->input->post('konten');
			$img = $this->upload->data();
			$gambar_info = $img['file_name'];

			$field = array(
				'judul'=> $judul,
				'konten'=> $konten,
				'gambar_info'=> $gambar_info
			);

			$this->db->insert('informasi', $field);
		}
	}

	public function displayInfo() {
		$ambil = $this->db->get('informasi');
		if($ambil->num_rows()>0){
			foreach ($ambil->result() as $data) {
				$hasil[] = $data;
			}
			return $hasil;
		}
	}

	public function editInfo($a){
		$d = $this->db->get_where('informasi', array('id_info' => $a))->row();
		return $d;
	}

	public function update($id_info){
		$config = array();
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = '10000';
		$config['max_width'] = '5000';
		$config['max_height'] = '5000';

		$this->load->library('upload',$config);
		$this->upload->initialize($config);

		if( ! $this->upload->do_upload('userfile')) {
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('upload_form', $error);
		}

		else {
			$judul = $this->input->post('judul');
			$konten = $this->input->post('konten');
			$img = $this->upload->data();
			$gambar_info = $img['file_name'];

			$field = array(
				'judul'=> $judul,
				'konten'=> $konten,
				'gambar_info'=> $gambar_info
			);

			$this->db->where('id_info', $id_info);
			$this->db->update('informasi', $field);
		}
	}

	function hapus($a){
		$this->db->delete('informasi', array('id_info' => $a));
		return;
	}
}