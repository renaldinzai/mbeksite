<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InvKandang extends CI_Controller {

	function __construct() {
		parent:: __construct();
		$this->load->model('admin/m_invKandang');
	}

	public function index()
	{

	}

	public function pilih(){ 
		$kd = $this->uri->segment(4);
		if($kd == null){
			redirect('admin/showKandang');
		}
		$dt = $this->m_invKandang->editKandang($kd);
		$data['alamaternak'] = $dt->alamaternak;
		$data['jumlahternak'] = $dt->jumlahternak;
		$data['durasi'] = $dt->durasi;
		$data['status'] = $dt->status;
		$data['id_invKandang'] = $kd;
		$this->load->view('admin/editInvKandang', $data);
	}

	public function update(){ 
		if($this->input->post('simpan')){
			$id_invKandang = $this->input->post('id_invKandang');
			$this->m_invKandang->update($id_invKandang);
			redirect('admin/showKandang', 'refresh');
		} else{
			$id_invKandang = $this->input->post('id_invKandang');
			redirect('admin/showKambing/'.$id_invKandang, 'refresh'); 
		}
	}

	public function hapus(){
		$u = $this->uri->segment(4);
		$this->m_invKandang->hapus($u);
		redirect('admin/showKandang','refresh');
	}
}