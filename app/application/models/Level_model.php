<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Level_model extends CI_Model {

  var $table = "level";
  var $primary_key = "id";
  
  public function get_data()
  {
    $this->db->from($this->table);
    $this->db->where('id >=',$this->session->userdata('logged_in')['fk_level']);
    return $this->db->get()->result();
  }
}
