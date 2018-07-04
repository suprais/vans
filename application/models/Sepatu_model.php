<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sepatu_model extends CI_Model {

	public function getData()
	{
		//untuk select column
		$this->db->select('*');
		//untuk from table sepatu
		$this->db->from("sepatu");
		//$get eksekusi fungsi select
		//hasil eksesusi = "select * from sepatu"

		
		$query = $this->db->get();
		//untuk merubah table menjadi array
		return $query->result_array();
	}


	public function getDataWhereId($id)
	{
		$this->db->select('*');
		$this->db->from("sepatu");
		$this->db->where('id',$id);
		return $this->db->get()->result_array();
	}

	public function insertData($upload_name)
	{
		/* jika semua sama sperti di table
		gunakan versi simple seprti berikut */
		$data = $this->input->post();
		$data['image'] = $upload_name;
		/* eksekusi query insert into "sepatu" diisi dengan variable $data
		face2face ae lek bingung :| */
		$this->db->insert("sepatu",$data);
	}

	public function updateData($id)	
	{
		/* jika semua sama sperti di table
		gunakan versi simple seprti berikut */
		$data = $this->input->post();
		//mengeset where id=$id
		$this->db->where('id',$id);
		/*eksekusi update sepatu set $data from sepatu where id=$id
		jika berhasil return berhasil */
		if($this->db->update("sepatu",$data)){
			return "Berhasil";
		}
	}

	public function hapusData($id)
	{
		//mengeset where id=$id
		$this->db->where('id',$id);
		/* eksekusi delete from sepatu where id=$id 
		jika berhasil return berhasil*/
		if($this->db->delete("sepatu")){
			return "Berhasil";
		}
	}
}
