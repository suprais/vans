<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library("cart");
	}
	public function index()
	{
		$this->load->view('cart');
	}
	public function add_cart($id)
	{
		$sepatu = $this->db->where('id',$id)->get('sepatu')->result()[0];
		$data = array(
			'id'=> $id,
			'name'=> $sepatu->nama,
			'qty'=> 1,
			'price'=> $sepatu->harga,
			'image' => $sepatu->image
 		);
 		$this->cart->insert($data);
 		redirect('Transaksi','refresh');
	}
	public function delete_cart($rowid)
	{
		$this->cart->remove($rowid);
		redirect('Transaksi','refresh');
	}
	public function reset_cart()
	{
		$this->cart->destroy();
		redirect('Transaksi','refresh');
	}
}
