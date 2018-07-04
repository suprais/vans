<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {

  public function get_all_artikel( $limit = FALSE, $offset = FALSE )
   {
       // Jika variable $limit ada pada parameter maka kita limit query-nya
       if ( $limit ) {
           $this->db->limit($limit, $offset);
       }
      
       $query = $this->db->get('sepatu');

       // Return dalam bentuk object
       return $query->result_array();
   }
   public function get_total()
   {
       // Dapatkan jumlah total artikel
       return $this->db->count_all("sepatu");
   }
}
