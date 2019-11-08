<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kamar extends CI_Controller {

  var $c_name = "Kamar";

  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->model("Kamar_model");
    if (!(onlyLevel('1') || onlyLevel('2') || onlyLevel('4') || onlyLevel('5'))) {
      p_error('403',"Access Tidak Tersedia");
    }
    if (onlyLevel(5)) {
      $id = $this->uri->segment(4);
      if ($id != $this->session->userdata('logged_in')['penginapan']['id']) {
        p_error('403',"Access Tidak Tersedia");
        
      }
    }
  }
  public function index($id)
  {
    $data = [
      'c_name' => $this->c_name,
      'id_penginapan' => $id,
    ];
    $this->load->view('admin/header');
    $this->load->view('admin/kamar/kamar',$data);
    $this->load->view('admin/footer');
  }

  public function getdata($id)
  {
    $data['data'] = $this->Kamar_model->get_by_penginapan($id);
    echo json_encode($data);
  }
  public function info($id)
  {
    $data = [
      'c_name' => $this->c_name,
      'data' => $this->Kamar_model->get_id($id),
    ];
    $this->load->view('admin/kamar/info',$data);
  }
  
  public function insert($id)
  {
    $data = [
      'c_name' => $this->c_name,
      'id_penginapan' => $id,
    ];
    $this->form_validation->set_rules('no','no','required');
    $this->form_validation->set_rules('kategori','kategori','required');
    $this->form_validation->set_rules('fasilitas','fasilitas','required');
    $this->form_validation->set_rules('status','status','required');
    if ($this->form_validation->run() == false) {
      $this->load->view('admin/kamar/insert',$data);
    }else{
      $config['upload_path'] = './uploads/kamar/';
      $config['allowed_types'] = 'gif|jpg|png';
      $config['max_size']  = '2000';
      $config['max_width']  = '1024';
      $config['max_height']  = '768';
      
      $this->load->library('upload', $config);
      
      if ( ! $this->upload->do_upload('foto')){
        $data['error'] = $this->upload->display_errors();
        $this->load->view('admin/kamar/insert',$data);
      }
      else{
        $upload_data = $this->upload->data();
        $this->load->view('admin/kamar/insert',$data);
        $error = $this->Kamar_model->insert_data($id,$upload_data['file_name']);
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
    'data' => $this->Kamar_model->get_id($id),
  ];
  $this->form_validation->set_rules('no','no','required');
  $this->form_validation->set_rules('kategori','kategori','required');
  $this->form_validation->set_rules('fasilitas','fasilitas','required');
  $this->form_validation->set_rules('status','status','required');
  if ($this->form_validation->run() == false) {
    $this->load->view('admin/kamar/update',$data);
  }else{
    if ($_FILES['foto']['name'] != "") {
      $config['upload_path'] = './uploads/kamar/';
      $config['allowed_types'] = 'gif|jpg|png';
      $config['max_size']  = '2000';
      $config['max_width']  = '1024';
      $config['max_height']  = '768';
      
      $this->load->library('upload', $config);
      
      if ( ! $this->upload->do_upload('foto')){
        $data['error'] = $this->upload->display_errors();
        $this->load->view('admin/kamar/update',$data);
      }
      else{
        $upload_data = $this->upload->data();
        $this->load->view('admin/kamar/update',$data);
        $error = $this->Kamar_model->update_data($id,$upload_data['file_name']);
        if ($error['code'] == 0) {
          echo '<script>swal("Berhasil", "Data berhasil diubah", "success");</script>';
        }else{

          echo '<script>swal("Gagal", "'.$error['message'].'", "error");</script>';
        }
      }
    }else{
      $this->load->view('admin/kamar/update',$data);
      $error = $this->Kamar_model->update_data($id,null);
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
  $this->Kamar_model->delete_data($id);
}
}
