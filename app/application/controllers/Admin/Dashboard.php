<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (!(isLoggedin())) {
			p_error('403',"Access Tidak Tersedia");
		}
	}
	public function index($id_desawisata = null)
	{
		$this->load->model('Dashboard_model');
		$data = null;
		if ($id_desawisata == null) {
			if (onlyLevel('1') || onlyLevel('2') || onlyLevel('3')) {
				$data = $this->Dashboard_model->pusat_data();
			}else{
				$id_desawisata = $this->session->userdata('logged_in')['desawisata']['id'];
				$data = $this->Dashboard_model->desawisata_data($id_desawisata);
			}
		}else{
			if (onlyLevel('1') || onlyLevel('2') || onlyLevel('3')) {
				$data = $this->Dashboard_model->desawisata_data($id_desawisata);
			}else{				
				p_error('403',"Access Tidak Tersedia");
			}
		}
		$data['c_name'] = "Dashboard";
		$data['isDashboard'] = true;
		$this->load->view('admin/header');
		$this->load->view('admin/dashboard',$data);
		$this->load->view('admin/footer',$data);
	}
	public function changedesawisata($id = null)
	{
		if (!(onlyLevel('1') || onlyLevel('2'))) {
			p_error('403',"Access Tidak Tersedia");
		}
		$old_session = $this->session->userdata('logged_in');
		if ($id != null) {
			$res_desawisata = $this->db->where('id',$id)->get('desawisata')->row(0);

			$desawisata_data = array(
				'id' => $res_desawisata->id,
				'nama' => $res_desawisata->nama,
				'alamat' => $res_desawisata->alamat,
				'deskripsi' => $res_desawisata->deskripsi,
				'foto' => $res_desawisata->foto,
			);
			$old_session['desawisata'] = $desawisata_data;

		}else{
			$old_session['desawisata'] = null;
		}
		$this->session->set_userdata('logged_in',$old_session);
		redirect('Admin/Dashboard','refresh');
	}
	public function profile()
	{
		$id = $this->session->userdata('logged_in')['id'];
		$this->load->library('form_validation');
		$this->load->model('Users_model');
		$this->load->model('Level_model');
		$this->load->model('Desawisata_model');
		$this->load->model('Penginapan_model');
		$data = [
			'c_name' => "Profile",
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
			$this->load->view('admin/header');
			$this->load->view('admin/profile',$data);
			$this->load->view('admin/footer');
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
					$this->load->view('admin/header');
					$this->load->view('admin/profile',$data);
					$this->load->view('admin/footer');
				}
				else{
					$upload_data = $this->upload->data();
					$error = $this->Users_model->update_data($id,$upload_data['file_name']);
					$data['data'] = $this->Users_model->get_id($id);
					$this->load->view('admin/users/update',$data);
					if ($error['code'] == 0) {
						$this->session->set_flashdata('msg_js','<script>swal("Berhasil", "Data berhasil diubah", "success");</script>');
					}else{
						$this->session->set_flashdata('msg_js','<script>swal("Gagal", "'.$error['message'].'", "error");</script>');
					}
					redirect('Admin/Dashboard/profile','refresh');
				}
			}else{
				$this->load->view('admin/users/update',$data);
				$error = $this->Users_model->update_data($id,null);
				if ($error['code'] == 0) {
					$this->session->set_flashdata('msg_js','<script>swal("Berhasil", "Data berhasil diubah", "success");</script>');
				}else{
					$this->session->set_flashdata('msg_js','<script>swal("Gagal", "'.$error['message'].'", "error");</script>');
				}
				redirect('Admin/Dashboard/profile','refresh');
			}
		}
	}
}
