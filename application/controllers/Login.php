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
	public function register()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama','nama','required');
		$this->form_validation->set_rules('alamat','alamat','required');
		$this->form_validation->set_rules('telepon','telepon','required');
		$this->form_validation->set_rules('email','email','required');
		$this->form_validation->set_rules('username','Username','required|is_unique[users.username]');
		$this->form_validation->set_rules('password','Password','required');
		if ($this->form_validation->run() == false) {
			$this->load->view('register');		
		}else{
			$post = $this->input->post();
			$post['level'] = "user";
			$this->db->insert('users',$post);
			$new_id = $this->db->insert_id();
			$query = $this->db->where('id',$new_id)->get("users");
			$res_query = $query->result()[0];
			$sess = array(
				'id' => $res_query->id,
				'nama' => $res_query->nama,
				'alamat' => $res_query->alamat,
				'telepon' => $res_query->telepon,
				'email' => $res_query->email,
				'username' => $res_query->username,
				'level' => $res_query->level
			);
			$this->session->set_userdata('logged_in',$sess);
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
