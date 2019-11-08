<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model {

  var $table = "users";
  var $primary_key = "id";
  
  public function get_data()
  {
    $this->db->select('*,(select nama from desawisata where id=users.fk_desawisata) as nama_desawisata');
    $this->db->from($this->table);
    $this->db->order_by('id');
    $this->db->where('fk_level >=',$this->session->userdata('logged_in')['fk_level']);
    return $this->db->get()->result();
  }

  public function get_id($id)
  {
    $this->db->select('*,(select nama from desawisata where id=users.fk_desawisata) as nama_desawisata,(select nama from level where id=users.fk_level) as nama_level');
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
      'telp' => $this->input->post('telp'),
      'email' => $this->input->post('email'),
      'username' => $this->input->post('username'),
      'password' => md5($this->input->post('password')),
      'status' => $this->input->post('status'),

      'fk_level' => $this->input->post('fk_level'),
      'foto' => $foto,
    ];

    if ($this->input->post('fk_desawisata') == "") {
      $set['fk_desawisata'] = null;
    }else{
      $set['fk_desawisata'] = $this->input->post('fk_desawisata');
    }

    if ($this->input->post('fk_penginapan') != null) {
      $set['fk_penginapan'] = $this->input->post('fk_penginapan');
    }
    $insert = $this->db->insert($this->table,$set);
    $error = $this->db->error();
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
      'telp' => $this->input->post('telp'),
      'email' => $this->input->post('email'),
      'username' => $this->input->post('username'),
      'status' => $this->input->post('status'),

      'fk_level' => $this->input->post('fk_level'),
    ];


    if ($this->input->post('fk_desawisata') == "") {
      $set['fk_desawisata'] = null;
    }else{
      $set['fk_desawisata'] = $this->input->post('fk_desawisata');
    }

    if ($foto != null) {
      $set['foto'] = $foto;
    }

    if ($this->input->post('password') != "") {
      $set['password'] = md5($this->input->post('password'));
    }

    if ($this->input->post('password') != "") {
      $this->form_validation->set_rules('password','password','min_length[6]');
    }


    if ($this->input->post('fk_penginapan') != null) {
      $set['fk_penginapan'] = $this->input->post('fk_penginapan');
    }else{
      $set['fk_penginapan'] = null;
    }

    $this->db->where('id',$id);
    $update = $this->db->update($this->table,$set);
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
