<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengunjung extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (!(isLoggedin())) {
			p_error('403',"Access Tidak Tersedia");
		}
		$this->load->model('Pengunjung_model');
	}
	public function index()
	{
		$data = [
			'c_name' => "Pengunjung",
		];
		$this->load->view('admin/header');
		$this->load->view('admin/pengunjung',$data);
		$this->load->view('admin/footer');
	}
	public function insert($domisili,$umur,$jeniskelamin)
	{
		$isValid1 = false;
		$isValid2 = false;
		$isValid3 = false;
		switch ($domisili) {
			case '1':
			$domisili = "lokal";
			$isValid1 = true;
			break;

			case '2':
			$domisili = "regional";
			$isValid1 = true;
			break;

			case '3':
			$domisili = "internasional";
			$isValid1 = true;
			break;
			
			default:
			$isValid1 = false;
			break;
		}

		switch ($umur) {
			case '1':
			$umur = "anak";
			$isValid2 = true;
			break;

			case '2':
			$umur = "remaja";
			$isValid2 = true;
			break;

			case '3':
			$umur = "dewasa";
			$isValid2 = true;
			break;
			
			default:
			$isValid2 = false;
			break;
		}

		switch ($jeniskelamin) {
			case '1':
			$jeniskelamin = "L";
			$isValid3 = true;
			break;

			case '2':
			$jeniskelamin = "P";
			$isValid3 = true;
			break;
			
			default:
			$isValid3 = false;
			break;
		}

		if ($isValid1 && $isValid2 && $isValid3) {
			$this->Pengunjung_model->insert($domisili,$umur,$jeniskelamin);
		}
	}
}
