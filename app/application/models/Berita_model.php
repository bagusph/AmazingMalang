<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita_model extends CI_Model {

  var $table = "Berita";
  var $primary_key = "id";
  
  public function get_data()
  {
    $this->db->select('*');
    $this->db->from($this->table);
    $this->db->order_by('id');
    $this->db->where('fk_desawisata',$this->session->userdata('logged_in')['desawisata']['id']);
    return $this->db->get()->result();
  }

  public function get_by_desawisata($id_desawisata)
  {
    $this->db->select('*');
    $this->db->from($this->table);
    $this->db->order_by('id');
    $this->db->where('fk_desawisata',$id_desawisata);
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
      'judul' => $this->input->post('judul'),
      'konten' => $this->input->post('konten'),
      'author' => $this->input->post('author'),
      'tanggal' => $this->input->post('tanggal'),
      'foto' => $foto,
      'fk_desawisata' => $this->session->userdata('logged_in')['desawisata']['id'],
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
      'judul' => $this->input->post('judul'),
      'konten' => $this->input->post('konten'),
      'author' => $this->input->post('author'),
      'tanggal' => $this->input->post('tanggal'),
      'foto' => $foto,
      'fk_desawisata' => $this->session->userdata('logged_in')['desawisata']['id'],
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
