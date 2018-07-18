<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library("cart");
		$this->load->model('Transaksi_model');
		if ($this->session->userdata('logged_in')['level'] != "admin") {
				redirect('Login/logout');
			}
	}
	public function index()
	{
		redirect('Welcome','refresh');
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
	public function update_cart()
	{
		$post = $this->input->post();
		foreach ($post as $key => $value) {
			$set = array(
				'rowid' => $value['rowid'],
				'qty' => $value['qty']
			);
			$this->cart->update($set);
		}
		redirect("Transaksi");
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
	public function checkout()
	{
		$set_transaksi = array(
			'tanggal' => date('Y-m-d'),
			'status_transaksi' => 1,
			'id_member' => $this->session->userdata('logged_in')['id']
		);
		$this->db->insert('transaksi',$set_transaksi);
		$id_tran = $this->db->insert_id();
		$cart = $this->cart->contents();
		foreach ($cart as $key => $value) {
			$set = array(
				'no_transaksi' => $id_tran,
				'id_sepatu_detail' => $value['id'],
				'jumlah' => $value['qty']
			);
			$this->db->insert('transaksi_detail',$set);
		}
		$this->cart->destroy();
		echo "<script>alert('Transaksi berhasil')</script>";
		redirect('');
	}
	public function laporan()
	{
		$data['transaksi'] = $this->Transaksi_model->select();
		$this->load->view('laporan_transaksi',$data);
	}
}
