<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Toko extends CI_Controller {

  var $c_name = "Toko";

  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->model("Toko_model");
     if (!(onlyLevel('1') || onlyLevel('2') || onlyLevel('4'))) {
      p_error('403',"Access Tidak Tersedia");
    }
  }
  public function index()
  {
    $data = [
      'c_name' => $this->c_name,
    ];
    $this->load->view('admin/header');
    $this->load->view('admin/toko/toko',$data);
    $this->load->view('admin/footer');
  }

  public function getdata()
  {
    $data['data'] = $this->Toko_model->get_data();
    echo json_encode($data);
  }
  public function info($id)
  {
    $data = [
      'c_name' => $this->c_name,
      'data' => $this->Toko_model->get_id($id),
    ];
    $this->load->view('admin/toko/info',$data);
  }
  public function insert()
  {
    $data = [
      'c_name' => $this->c_name,
    ];
    $this->form_validation->set_rules('nama','Nama','required');
      $this->form_validation->set_rules('alamat','alamat','required');
        $this->form_validation->set_rules('keterangan','keterangan','required');
    if ($this->form_validation->run() == false) {
      $this->load->view('admin/toko/insert',$data);
    }else{
      $config['upload_path'] = './uploads/toko/';
      $config['allowed_types'] = 'gif|jpg|png';
      $config['max_size']  = '2000';
      $config['max_width']  = '1024';
      $config['max_height']  = '768';
      
      $this->load->library('upload', $config);
      
      if ( ! $this->upload->do_upload('foto')){
        $data['error'] = $this->upload->display_errors();
        $this->load->view('admin/toko/insert',$data);
      }
      else{
        $upload_data = $this->upload->data();
        $this->load->view('admin/toko/insert',$data);
        $error = $this->Toko_model->insert_data($upload_data['file_name']);
        if ($error['code'] == 0) {
          echo '<script>swal("Berhasil", "Data berhasil ditambahkan", "success");</script>';
        }else{

          echo '<script>swal("Gagal", "'.$error['message'].'", "error");</script>';
        }
      }
    }
  }

  public function update($id)
  {
    $data = [
      'c_name' => $this->c_name,
      'data' => $this->Toko_model->get_id($id),
    ];
    $this->form_validation->set_rules('nama','Nama','required');
      $this->form_validation->set_rules('alamat','alamat','required');
        $this->form_validation->set_rules('keterangan','keterangan','required');
    if ($this->form_validation->run() == false) {
      $this->load->view('admin/toko/update',$data);
    }else{
      if ($_FILES['foto']['name'] != "") {
        $config['upload_path'] = './uploads/toko/';
      $config['allowed_types'] = 'gif|jpg|png';
      $config['max_size']  = '2000';
      $config['max_width']  = '1024';
      $config['max_height']  = '768';
      
      $this->load->library('upload', $config);
      
      if ( ! $this->upload->do_upload('foto')){
        $data['error'] = $this->upload->display_errors();
        $this->load->view('admin/toko/update',$data);
      }
      else{
        $upload_data = $this->upload->data();
        $this->load->view('admin/toko/update',$data);
        $error = $this->Toko_model->update_data($id,$upload_data['file_name']);
        if ($error['code'] == 0) {
          echo '<script>swal("Berhasil", "Data berhasil diubah", "success");</script>';
        }else{

          echo '<script>swal("Gagal", "'.$error['message'].'", "error");</script>';
        }
      }
      }else{
        $this->load->view('admin/toko/update',$data);
        $error = $this->Toko_model->update_data($id,null);
        if ($error['code'] == 0) {
          echo '<script>swal("Berhasil", "Data berhasil diubah", "success");</script>';
        }else{

          echo '<script>swal("Gagal", "'.$error['message'].'", "error");</script>';
        }
      }
    }
  }
  public function delete($id)
  {
    $this->Toko_model->delete_data($id);
  }
}
