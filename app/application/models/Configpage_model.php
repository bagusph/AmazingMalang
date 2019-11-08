<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Configpage_model extends CI_Model {

  var $table = "config_page";
  var $primary_key = "id";
  
  public function get_data($id_desawisata)
  {
    $this->db->where('fk_desawisata',$id_desawisata);
    $query = $this->db->get('config_page');
    return $query->row(0);
  }

  public function update_data($id_desawisata,$logo_img,$banner_img)
  {
    $db_debug = $this->db->db_debug;
    $this->db->db_debug = FALSE;
    $set = [
      'subdomain' => $this->input->post('subdomain'),
      'short_about' => $this->input->post('short_about'),
      'template' => $this->input->post('template'),
      'telp' => $this->input->post('telp'),
      'telp_wa' => $this->input->post('telp_wa'),
      'email' => $this->input->post('email'),
      'sosial_facebook' => $this->input->post('sosial_facebook'),
      'sosial_instagram' => $this->input->post('sosial_instagram'),
      'sosial_twitter' => $this->input->post('sosial_twitter'),
    ];

    if ($logo_img != null) {
      $set['logo_img'] = $logo_img;
    }
    if ($banner_img != null) {
      $set['banner_img'] = $banner_img;
    }

    $this->db->where('fk_desawisata',$id_desawisata);
    $update = $this->db->update($this->table,$set);
    $error = $this->db->error();
    $this->db->db_debug = $db_debug;
    return $error;
  }

  
}
