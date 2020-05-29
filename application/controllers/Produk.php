<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

	function __construct() {
		parent:: __construct();
		$this->load->model('m_produk');
	}

	public function index()
	{
		$this->load->view('upload_form', array('error' => ' ' ));

	}

	public function do_tambah(){	
		if ($this->session->userdata('isLogin') == TRUE){
			$this->load->view('tambahProduk');
		} else {
			echo '<script>alert("Maaf, Anda tidak memiliki hak akses!");</script>';
			redirect('','refresh');
		}
	}

	public function tambahProduk() {
		if($this->input->post('jual')){
			$this->m_produk->tambahProduk();
			echo '<script>alert("Produk berhasil ditambahkan!");</script>';
			redirect('user/produk', 'refresh'); 
		} else{
			redirect('produk/do_tambah','refresh');
		}
	}

	public function pilih(){
		if ($this->session->userdata('isLogin') == TRUE){
		$kd = $this->uri->segment(3);
		if($kd == null){
			redirect('user/produk');
		}
		$dt = $this->m_produk->editProduk($kd);
		$data['nama_prd'] = $dt->nama_prd;
		$data['kategori_prd'] = $dt->kategori_prd;
		$data['harga'] = $dt->harga; 
		$data['stok'] = $dt->stok;
		$data['deskripsi'] = $dt->deskripsi;
		$data['gambar_prd'] = $dt->gambar_prd;
		$data['id_prd'] = $kd;
		$this->load->view('editProduk', $data);
	} else {
			echo '<script>alert("Maaf, Anda tidak memiliki hak akses!");</script>';
			redirect('','refresh');
		}
	}

	public function update(){
		if($this->input->post('simpan')){
			$id_prd = $this->input->post('id_prd');
			$this->m_produk->update($id_prd);
			redirect('user/produk', 'refresh');
		} else{
			$id_prd = $this->input->post('id_prd');
			redirect('produk/pilih/'.$id_prd, 'refresh');
		}
	}

	public function hapus(){
		if ($this->session->userdata('isLogin') == TRUE){
		$u = $this->uri->segment(3);
		$this->m_produk->hapus($u);
		redirect('user/produk','refresh');
	} else {
			echo '<script>alert("Maaf, Anda tidak memiliki hak akses!");</script>';
			redirect('','refresh');
		}
	}

}