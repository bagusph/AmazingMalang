<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Errorpage extends CI_Controller {

	public function error403()
	{
		$this->load->view('admin/error/error403');
	}

	public function error404()
	{
		$this->load->view('admin/error/error404');
	}

	public function error500()
	{
		$this->load->view('admin/error/error500');
	}
}
