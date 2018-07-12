<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model {

	public function getData()
	{
		$this->db->select('*');
		$this->db->from("users");
		
		$query = $this->db->get();
		return $query->result_array();
	}
	
	public function getDataWhereId($id)
	{
		$this->db->select('*');
		$this->db->from("users");
		$this->db->where('id',$id);
		return $this->db->get()->result_array();
	}

	public function insertData()
	{
		$data = $this->input->post();
		$this->db->insert("users",$data);
	}

	public function updateData($id)	
	{
		$data = $this->input->post();
		$this->db->where('id',$id);
		if($this->db->update("users",$data)){
			return "Berhasil";
		}
	}

	public function hapusData($id)
	{
		$this->db->where('id',$id);
		if($this->db->delete("users")){
			return "Berhasil";
		}
	}
}
