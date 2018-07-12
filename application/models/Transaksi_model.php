<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi_model extends CI_Model {

  function select()
  {
    $this->db->select("transaksi.*,users.nama,users.alamat,users.telepon,group_concat(sepatu.nama,'-',ukuran,'-',transaksi_detail.jumlah,'-',sepatu.harga separator '<br>') as list_sepatu,sum(sepatu.harga*transaksi_detail.jumlah) as total");
    $this->db->join('users','transaksi.id_member = users.id');
    $this->db->join('transaksi_detail','transaksi.no_transaksi = transaksi_detail.no_transaksi');
    $this->db->join('sepatu','transaksi_detail.id_sepatu_detail = sepatu.id');
    $this->db->group_by('transaksi.no_transaksi');
    return $this->db->get('transaksi')->result_array();
  }
}
