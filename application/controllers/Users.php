<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('Users_model');
		$this->load->helper('form');
		if ($this->session->userdata('logged_in') == null) {
				redirect('Login/logout');
			}	
	}

	public function index()
	{
		$data['getData'] = $this->Users_model->getData();
		$this->load->view('users/users.php',$data);
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
			$this->load->view('users/tambah.php'); 
		}
		else{
			$this->Users_model->insertData();
			redirect('Users');
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
		
		$data['getData'] = $this->Users_model->getDataWhereId($id)[0];

		if($this->form_validation->run()==FALSE){
			$this->load->view('users/ubah',$data);
		}
		else{
			$this->Users_model->updateData($id);
			redirect('Users');
		}
	}

	public function hapus($id)
	{
		$this->Users_model->hapusData($id);
		redirect('Users');
	}
}
