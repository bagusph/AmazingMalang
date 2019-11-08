<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Desawisata_model extends CI_Model {

  var $table = "Desawisata";
  var $primary_key = "id";
  
  public function get_data()
  {
    $this->db->select('*');
    $this->db->from($this->table);
    $this->db->order_by('id');
    return $this->db->get()->result();
  }

  public function get_id($id)
  {
    $this->db->select('*');
    $this->db->from($this->table);
    $this->db->where('id',$id);
    return $this->db->get()->row(0);
  }

  public function insert_data($foto)
  {
    $db_debug = $this->db->db_debug;
    $this->db->db_debug = FALSE;
    $set = [
      'nama' => $this->input->post('nama'),
      'alamat' => $this->input->post('alamat'),
      'desa' => $this->input->post('desa'),
      'kecamatan' => $this->input->post('kecamatan'),
      'kabupaten' => $this->input->post('kabupaten'),
      'deskripsi' => $this->input->post('deskripsi'),
      '_lat' => $this->input->post('_lat'),
      '_long' => $this->input->post('_long'),
      'foto' => $foto,
    ];

    $insert = $this->db->insert($this->table,$set);
    $error = $this->db->error();
    if ($error['code'] == 0) {
      $recent_id = $this->db->insert_id();
      $set_config_page = [
        'fk_desawisata' => $recent_id,
        'template'=> "template1",
        'subdomain' => "Desa".$recent_id,
      ];
      $this->db->insert('config_page',$set_config_page);
    }
    $this->db->db_debug = $db_debug;
    return $error;
  }

  public function update_data($id,$foto = null)
  {
    $db_debug = $this->db->db_debug;
    $this->db->db_debug = FALSE;
    $set = [
      'nama' => $this->input->post('nama'),
      'alamat' => $this->input->post('alamat'),
      'desa' => $this->input->post('desa'),
      'kecamatan' => $this->input->post('kecamatan'),
      'kabupaten' => $this->input->post('kabupaten'),
      'deskripsi' => $this->input->post('deskripsi'),
      '_lat' => $this->input->post('_lat'),
      '_long' => $this->input->post('_long'),
      'foto' => $foto,
    ];

    if ($foto != null) {
      $set['foto'] = $foto;
    }
    $this->db->where('id',$id);
    $insert = $this->db->update($this->table,$set);
    $error = $this->db->error();
    $this->db->db_debug = $db_debug;
    return $error;
  }

  public function delete_data($id)
  {
    $db_debug = $this->db->db_debug;
    $this->db->db_debug = FALSE;
    $this->db->where('id',$id);
    $delete = $this->db->delete($this->table);
    $error = $this->db->error();
    $this->db->db_debug = $db_debug;
    return $error;
  }
}
