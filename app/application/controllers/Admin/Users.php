<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

  var $c_name = "Users";

  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation', 'upload');
    $this->load->model("Users_model");
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
    $this->load->view('admin/users/users',$data);
    $this->load->view('admin/footer');
  }

  public function getdata()
  {
    $data['data'] = $this->Users_model->get_data();
    echo json_encode($data);
  }
  public function info($id)
  {
    $data = [
      'c_name' => $this->c_name,
      'data' => $this->Users_model->get_id($id),
    ];
    $this->load->view('admin/users/info',$data);
  }
  public function insert()
  {
    $this->load->model('Level_model');
    $this->load->model('Penginapan_model');
    $this->load->model('Desawisata_model');
    $data = [
      'c_name' => $this->c_name,
      'penginapan' => $this->Penginapan_model->get_data(),
      'desawisata' => $this->Desawisata_model->get_data(),
      'level' => $this->Level_model->get_data(),
    ];
    $this->form_validation->set_rules('nama','Nama','required');
    $this->form_validation->set_rules('alamat','alamat','required');
    $this->form_validation->set_rules('telp','telp','required|numeric');
    $this->form_validation->set_rules('email','email','required');
    $this->form_validation->set_rules('username','username','required|min_length[6]');
    $this->form_validation->set_rules('password','password','required|min_length[6]');
    if ($this->form_validation->run() == false) {
      $this->load->view('admin/users/insert',$data);
    }else{
      $config['upload_path'] = './uploads/users/';
      $config['allowed_types'] = 'gif|jpg|png';
      $config['max_size']  = '10000';
      $config['max_width']  = '10000';
      $config['max_height']  = '100000';
      
      $this->load->library('upload', $config);
      $this->upload->initialize($config,TRUE);
      
      if ( ! $this->upload->do_upload('foto')){
        $data['error'] = $this->upload->display_errors();
        $this->load->view('admin/users/insert',$data);
      }
      else{
        $upload_data = $this->upload->data();
        $this->load->view('admin/users/insert',$data);
        $error = $this->Users_model->insert_data($upload_data['file_name']);
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
    
    $this->load->model('Level_model');
    $this->load->model('Desawisata_model');
    $this->load->model('Penginapan_model');
    $data = [
      'c_name' => $this->c_name,
      'data' => $this->Users_model->get_id($id),
      'desawisata' => $this->Desawisata_model->get_data(),
      'penginapan' => $this->Penginapan_model->get_data(),
      'level' => $this->Level_model->get_data(),
    ];
    $this->form_validation->set_rules('nama','Nama','required');
    $this->form_validation->set_rules('alamat','alamat','required');
    $this->form_validation->set_rules('telp','telp','required|numeric');
    $this->form_validation->set_rules('email','email','required');
    $this->form_validation->set_rules('username','username','required|min_length[6]');
    if ($this->input->post('password') != "") {
      $this->form_validation->set_rules('password','password','min_length[6]');
    }
    if ($this->form_validation->run() == false) {
      $this->load->view('admin/users/update',$data);
    }else{
      if ($_FILES['foto']['name'] != "") {
        $config['upload_path'] = './uploads/users/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']  = '2000';
        $config['max_width']  = '1024';
        $config['max_height']  = '768';

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('foto')){
          $data['error'] = $this->upload->display_errors();
          $this->load->view('admin/users/update',$data);
        }
        else{
          $upload_data = $this->upload->data();
          $error = $this->Users_model->update_data($id,$upload_data['file_name']);
          $data['data'] = $this->Users_model->get_id($id);
          $this->load->view('admin/users/update',$data);
          if ($error['code'] == 0) {
            echo '<script>swal("Berhasil", "Data berhasil ditambahkan", "success");</script>';
          }else{

            echo '<script>swal("Gagal", "'.$error['message'].'", "error");</script>';
          }
        }
      }else{
        $this->load->view('admin/users/update',$data);
        $error = $this->Users_model->update_data($id,null);
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
    $error = $this->Users_model->delete_data($id);
    if ($error['code'] == 1451) {
      echo 'error1451';
    }
  }
}
