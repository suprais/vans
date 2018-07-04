<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sepatu extends CI_Controller {

	//konstruktor (statement yang selalu dipanggil pada setiap function)
	function __construct() {
		parent::__construct();
		//load model Sepatu_model
		$this->load->model('Sepatu_model');
		//load helper form
		$this->load->helper('form');
		if ($this->session->userdata('logged_in') == null) {
				redirect('Login/logout');
			}	
	}

	/* index (fungsi yang akan berjalan jika tidak ada fungsi yang dipangggil)
	jika url = ".[]/sepatu" maka fungsi index yang dijalankan */
	public function index()
	{
		/* mengisi $data['getData'] berupa data yang 
		terlah direturn pada fungsi getData() pada Sepatu_model */
		$data['getData'] = $this->Sepatu_model->getData();
		// memanggil view 'sepatu/sepatu.php' dan diberi variable $data
		$this->load->view('sepatu/sepatu.php',$data);
	}

	public function input()
	{
		//load library form_validation
		$this->load->library("form_validation");
		/* aturan form validation 
		- parameter 1 ('id') = ditujukan pada input yang name="id"
		- parameter 2 ('ID') = untuk tampilan error
		- parameter 3 ('required') = rule nya (ada banyak rule buka di userguide)
		*/
		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('keterangan','Keterangan','required');
		$this->form_validation->set_rules('harga','Harga','required');

		// intinya membuat warna error menjadi merah :D
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');


		// if jika kita belum melakukan submit
		if($this->form_validation->run()==FALSE){
			//menampilkan view 'sepatu/input.php'
			$this->load->view('sepatu/input.php'); 
		}
		// jika kita sudah melalukan submit
		else{
			 	$config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 20000;
                $config['max_width']            = 10240;
                $config['max_height']           = 7680;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('image'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('sepatu/input.php',$error); 
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
			$this->Sepatu_model->insertData($data['upload_data']['file_name']);
			redirect('sepatu');
                }

			
		}
	}

	/*$id adalah parameter
	contoh penggunakan sepatu/update/1 
	*/ 
	public function update($id)
	{
		//load library form_validation
		$this->load->library("form_validation");
		/* aturan form validation 
		- parameter 1 ('id') = ditujukan pada input yang name="id"
		- parameter 2 ('ID') = untuk tampilan error
		- parameter 3 ('required') = rule nya (ada banyak rule buka di userguide)
		*/
		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('keterangan','Keterangan','required');
		$this->form_validation->set_rules('harga','Harga','required');

		// intinya membuat warna error menjadi merah :D
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

		

		//memberikan data berisi data yang sesuai dengan $id
		$data['getData'] = $this->Sepatu_model->getDataWhereId($id)[0];

		// if jika kita belum melakukan submit
		if($this->form_validation->run()==FALSE){
			//menampilkan view 'sepatu/update.php'
			$this->load->view('sepatu/update',$data);
		}
		// jika kita sudah melalukan submit
		else{
			//memanggil fungsi insertData pada model
			$this->Sepatu_model->updateData($id);
			//redirect / pergi ke halaman 'sepatu'
			redirect('sepatu');
		}
	}

	/*$id adalah parameter
	contoh penggunakan sepatu/hapus/1 
	*/ 
	public function hapus($id)
	{
		//memanggil fungsi hapusData pada model
		$this->Sepatu_model->hapusData($id);
		redirect('sepatu');
	}
}
