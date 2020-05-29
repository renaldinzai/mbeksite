<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_produk extends CI_Model {
 
	function __construct() {
		parent:: __construct();
	}

	public function tambahProduk(){
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
			$userid = $_SESSION['id'];
			$username = $_SESSION['username'];
			$nama_prd = $this->input->post('nama_prd');
			$kategori_prd = $this->input->post('kategori_prd');
			$harga = $this->input->post('harga');
			$stok = $this->input->post('stok');
			$deskripsi = $this->input->post('deskripsi');
			$img = $this->upload->data();
			$gambar_prd = $img['file_name'];

			$field = array(
				'id' => $userid,
				'username' => $username,
				'nama_prd' => $nama_prd,
				'kategori_prd'=> $kategori_prd,
				'harga'=> $harga,
				'stok'=> $stok,
				'deskripsi'=> $deskripsi,
				'gambar_prd'=> $gambar_prd
				);

			$this->db->insert('produk', $field);

     		$this->db->select('id_prd')->from('produk')->where('nama_prd',$nama_prd);
     		$query = $this->db->get();
     		if ($query->num_rows() > 0) {
         		$result = $query->row()->id_prd;
     		}
     		
			$this->db->query("INSERT INTO allproduk 
				(id_prd, id, username, nama_prd, kategori_prd, harga, stok, deskripsi, gambar_prd) 
				VALUES 
				('$result', '$userid', '$username', '$nama_prd', '$kategori_prd', '$harga', '$stok', '$deskripsi', '$gambar_prd')");
		}
	}

	public function lihatProduk() {
		$userid = $_SESSION['id'];
		$ambil = $this->db->get_where('produk', array('id' => $userid));
			if($ambil->num_rows()>0){
				foreach ($ambil->result() as $data) {
					$hasil[] = $data;
				}
				return $hasil;
			}
	}

	public function editProduk($a){
		$d = $this->db->get_where('produk', array('id_prd' => $a))->row();
		return $d;
	}

	public function update($id_prd){
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
			$userid = $_SESSION['id'];
			$username = $_SESSION['username'];
			$nama_prd = $this->input->post('nama_prd');
			$kategori_prd = $this->input->post('kategori_prd');
			$harga = $this->input->post('harga');
			$stok = $this->input->post('stok');
			$deskripsi = $this->input->post('deskripsi');
			$img = $this->upload->data();
			$gambar_prd = $img['file_name'];

			$field = array(
					'id' => $userid,
					'username' => $username,
					'nama_prd' => $nama_prd,
					'kategori_prd'=> $kategori_prd,
					'harga'=> $harga,
					'stok'=> $stok,
					'deskripsi'=> $deskripsi,
					'gambar_prd'=> $gambar_prd
					);

		$this->db->where('id_prd', $id_prd);
		$this->db->update('produk', $field);
		$this->db->update('allproduk', $field);
		}
	}

	function hapus($a){
		$this->db->delete('produk', array('id_prd' => $a));
		return;
	}
}