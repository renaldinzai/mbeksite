<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InvKambing extends CI_Controller {

	function __construct() {
		parent:: __construct();
		$this->load->model('admin/m_invKambing');
	}

	public function index()
	{

	}


	public function pilih(){ 
		$kd = $this->uri->segment(4);
		if($kd == null){
			redirect('admin/showKambing');
		}
		$dt = $this->m_invKambing->editKambing($kd);
		$data['jenis'] = $dt->jenis;
		$data['banyak'] = $dt->banyak;
		$data['status'] = $dt->status;
		$data['id_invKambing'] = $kd;
		$this->load->view('admin/editInvKambing', $data);
	}

	public function update(){
		if($this->input->post('simpan')){
			$id_invKambing = $this->input->post('id_invKambing');
			$this->m_invKambing->update($id_invKambing);
			redirect('admin/showKambing', 'refresh');
		} else{
			$id_invKambing = $this->input->post('id_invKambing');
			redirect('admin/showKambing/'.$id_invKambing, 'refresh');
		}
	}

	public function hapus(){
		$u = $this->uri->segment(4);
		$this->m_invKambing->hapus($u);
		redirect('admin/showKambing','refresh');
	}
}