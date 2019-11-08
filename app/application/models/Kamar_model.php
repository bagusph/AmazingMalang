<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kamar_model extends CI_Model {

  var $table = "kamar";
  var $primary_key = "id";
  
  public function get_data()
  {
    $this->db->select('*');
    $this->db->from($this->table);
    $this->db->order_by('no');
    return $this->db->get()->result();
  }

  public function get_by_penginapan($id_penginapan)
  {
    $this->db->select('*');
    $this->db->from($this->table);
    $this->db->order_by('no');
    $this->db->where('fk_penginapan',$id_penginapan);
    return $this->db->get()->result();
  }

  public function get_id($id)
  {
    $this->db->select('*');
    $this->db->from($this->table);
   $this->db->where('id',$id);
    return $this->db->get()->row(0);
  }

  public function insert_data($id_kamar,$foto)
  {
    $db_debug = $this->db->db_debug;
    $this->db->db_debug = FALSE;
    $set = [
      'no' => $this->input->post('no'),
      'kategori' => $this->input->post('kategori'),
      'fasilitas' => $this->input->post('fasilitas'),
      'status' => $this->input->post('status'),
      'foto' => $foto,
      'fk_penginapan' => $id_kamar,
    ];

    $insert = $this->db->insert($this->table,$set);
    $error = $this->db->error();
    $this->db->db_debug = $db_debug;
    return $error;
  }

  public function update_data($id,$foto)
  {
    $db_debug = $this->db->db_debug;
    $this->db->db_debug = FALSE;
    $set = [
      'no' => $this->input->post('no'),
      'kategori' => $this->input->post('kategori'),
      'fasilitas' => $this->input->post('fasilitas'),
      'status' => $this->input->post('status'),
      'foto' => $foto,
    ];

    if ($foto != null) {
      $set['foto'] = $foto;
    }

    $this->db->where('id',$id);
    $update = $this->db->update($this->table,$set);
    $error = $this->db->error();
    $this->db->db_debug = $db_debug;
    return $error;
  }

  public function delete_data($id)
  {
    $this->db->where('id',$id);
    $this->db->delete($this->table);
  }
}
