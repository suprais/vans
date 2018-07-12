<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username','Username','required|callback_cekDB');
		$this->form_validation->set_rules('password','Password','required');
		if ($this->form_validation->run() == false) {
			$this->load->view('login');		
		}else{
			redirect("");
		}
	}
	public function cekDB($username)
	{
		$password = $this->input->post('password');
		$query = $this->db->where('username',$username)->where('password',$password)->get('users');
		if ($query->num_rows() == 1) {
			$data = $query->result()[0];
			$sess = array(
				'id' => $data->id,
				'nama' => $data->nama,
				'alamat' => $data->alamat,
				'telepon' => $data->telepon,
				'email' => $data->email,
				'username' => $data->username,
				'level' => $data->level
			);
			$this->session->set_userdata('logged_in',$sess);
			return true;
		}else{
			$this->form_validation->set_message('cekDB',"Username and Password tidak valid");
			return false;
		}
	}
	public function logout()
	{
		$this->session->unset_userdata('logged_in');
		redirect('Login');
	}
}
