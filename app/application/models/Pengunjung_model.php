<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengunjung_model extends CI_Model {

  var $table = "pengunjung";
  var $primary_key = "id";
  
  public function get_data()
  {
    return $this->db->get()->result();
  }

  public function insert($domisili,$umur,$jeniskelamin)
  {
    $set = [
      'domisili' => $domisili,
      'umur' => $umur,
      'jeniskelamin' => $jeniskelamin,
      'fk_desawisata' => $this->session->userdata('logged_in')['desawisata']['id'],
    ];
    $this->db->insert('pengunjung',$set);
  }
  
}
