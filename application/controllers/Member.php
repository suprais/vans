<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('Member_model');
		$this->load->helper('form');	
	}

	public function index()
	{
		$data['getData'] = $this->Member_model->getData();
		$this->load->view('member/member.php',$data);
	}

	public function tambah()
	{
		$this->load->library("form_validation");
	
		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('alamat','Alamat','required');
		$this->form_validation->set_rules('telepon','Telepon','required');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required');

		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

		if($this->form_validation->run()==FALSE){
			$this->load->view('member/tambah.php'); 
		}
		else{
			$this->Member_model->insertData();
			redirect('member');
		}
	}

	public function ubah($id)
	{
		$this->load->library("form_validation");
	
		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('alamat','Alamat','required');
		$this->form_validation->set_rules('telepon','Telepon','required');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required');

		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
		
		$data['getData'] = $this->Member_model->getDataWhereId($id)[0];

		if($this->form_validation->run()==FALSE){
			$this->load->view('member/ubah',$data);
		}
		else{
			$this->Member_model->updateData($id);
			redirect('member');
		}
	}

	public function hapus($id)
	{
		$this->Member_model->hapusData($id);
		redirect('member');
	}
}
