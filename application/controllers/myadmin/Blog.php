<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	function __construct() {
		parent:: __construct();
		$this->load->model('admin/m_blog');
	}

	public function index()
	{
		$this->load->view('upload_form', array('error' => ' ' ));
	}

	public function tambahInfo() {
		$this->load->view('admin/tambahInfo');
	}

	public function addInfo() {
		if($this->input->post('publish')){
			$this->m_blog->addingInfo();
			echo '<script>alert("Informasi berhasil ditambahkan.");</script>';
			redirect('admin/showInfo', 'refresh'); 
		} else{
			redirect('','refresh');
		}
	}

	public function pilih(){ 
		$kd = $this->uri->segment(3);
		if($kd == null){
			redirect('admin/showInfo');
		}
		$dt = $this->m_blog->editInfo($kd);
		$data['judul'] = $dt->judul;
		$data['konten'] = $dt->konten;
		$data['gambar_prd'] = $dt->gambar_prd;
		$data['id_info'] = $kd;
		$this->load->view('admin/editInfo', $data);
	}

	public function update(){
		if($this->input->post('simpan')){
			$id_info = $this->input->post('id_info');
			$this->m_blog->update($id_info);
			redirect('myadmin/blog', 'refresh');
		} else{
			$id_info = $this->input->post('id_info');
			redirect('admin/showInfo/'.$id_info, 'refresh');
		}
	}

	public function hapus(){
		$u = $this->uri->segment(4);
		$this->m_blog->hapus($u);
		redirect('admin/showInfo','refresh');
	}
}