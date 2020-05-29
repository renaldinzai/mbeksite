<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Qurban extends CI_Controller {

	function __construct() {
		parent:: __construct();
		$this->load->model('admin/m_qurban');
	}

	public function index()
	{

	}


	public function pilih(){ 
		$kd = $this->uri->segment(4);
		if($kd == null){
			redirect('admin/showQurban');
		}
		$dt = $this->m_qurban->editQurban($kd);
		$data['jenis'] = $dt->jenis;
		$data['tujuan'] = $dt->tujuan;
		$data['pesan'] = $dt->pesan;
		$data['status'] = $dt->status;
		$data['id_qurban'] = $kd;
		$this->load->view('admin/editQurban', $data);
	}

	public function update(){
		if($this->input->post('simpan')){
			$id_qurban = $this->input->post('id_qurban');
			$this->m_qurban->update($id_qurban);
			redirect('admin/showQurban', 'refresh');
		} else{
			$id_qurban = $this->input->post('id_qurban');
			redirect('admin/showQurban/'.$id_qurban, 'refresh');
		}
	}

	public function hapus(){
		$u = $this->uri->segment(4);
		$this->m_qurban->hapus($u);
		redirect('admin/showQurban','refresh');
	}
}