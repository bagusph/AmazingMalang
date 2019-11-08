<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Review extends CI_Controller {

  var $c_name = "Review";

  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->model("Review_model");
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
    $this->load->view('admin/review/review',$data);
    $this->load->view('admin/footer');
  }

  public function getdata()
  {
    $data['data'] = $this->Review_model->get_data();
    echo json_encode($data);
  }
  public function info($id)
  {
    $data = [
      'c_name' => $this->c_name,
      'data' => $this->Review_model->get_id($id),
    ];
    $this->load->view('admin/review/info',$data);
  }
  public function insert()
  {
    $data = [
      'c_name' => $this->c_name,
    ];
    $this->form_validation->set_rules('nama','Nama','required');
    $this->form_validation->set_rules('email','email','required');
    $this->form_validation->set_rules('telp','telp','required|numeric');
    $this->form_validation->set_rules('keterangan','keterangan','required');
    if ($this->form_validation->run() == false) {
      $this->load->view('admin/review/insert',$data);
    }else{
      $config['upload_path'] = './uploads/review/';
      $config['allowed_types'] = 'gif|jpg|png';
      $config['max_size']  = '2000';
      $config['max_width']  = '1024';
      $config['max_height']  = '768';
      
      $this->load->library('upload', $config);
      
      if ( ! $this->upload->do_upload('foto')){
        $data['error'] = $this->upload->display_errors();
        $this->load->view('admin/review/insert',$data);
      }
      else{
        $upload_data = $this->upload->data();
        $this->load->view('admin/review/insert',$data);
        $error = $this->Review_model->insert_data($upload_data['file_name']);
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
      'data' => $this->Review_model->get_id($id),
    ];
    $this->form_validation->set_rules('nama','Nama','required');
    $this->form_validation->set_rules('email','email','required');
    $this->form_validation->set_rules('telp','telp','required|numeric');
    $this->form_validation->set_rules('keterangan','keterangan','required');
    if ($this->form_validation->run() == false) {
      $this->load->view('admin/review/update',$data);
    }else{
      if ($_FILES['foto']['name'] != "") {
        $config['upload_path'] = './uploads/review/';
      $config['allowed_types'] = 'gif|jpg|png';
      $config['max_size']  = '2000';
      $config['max_width']  = '1024';
      $config['max_height']  = '768';
      
      $this->load->library('upload', $config);
      
      if ( ! $this->upload->do_upload('foto')){
        $data['error'] = $this->upload->display_errors();
        $this->load->view('admin/review/update',$data);
      }
      else{
        $upload_data = $this->upload->data();
        $this->load->view('admin/review/update',$data);
        $error = $this->Review_model->update_data($id,$upload_data['file_name']);
        if ($error['code'] == 0) {
          echo '<script>swal("Berhasil", "Data berhasil diubah", "success");</script>';
        }else{

          echo '<script>swal("Gagal", "'.$error['message'].'", "error");</script>';
        }
      }
      }else{
        $this->load->view('admin/review/update',$data);
        $error = $this->Review_model->update_data($id,null);
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
    $this->Review_model->delete_data($id);
  }
}
