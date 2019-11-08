<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		p_error("404","Halaman tidak ditemukan");
	}
	public function homee($subdomain)
	{
		$config_page = getConfigPage($subdomain);
		if ($config_page == null) {
			p_error("404","Halaman tidak ditemukan");
		}
		$id_desawisata = $config_page->fk_desawisata;
		$this->load->model([
			'Desawisata_model',
			'Kategori_model',
			'Wisata_model',
			'Agenda_model',
			'Galeri_model',
			'Berita_model',
			'Review_model',
			'Penginapan_model',
			'Toko_model',
		]);
		$data = [
			'c_name' => 'Home',
			'banner_title' => "",
			'config_page' => $config_page,
			'desawisata' => $this->Desawisata_model->get_id($id_desawisata),
			'kategori' => $this->Kategori_model->get_by_desawisata($id_desawisata),
			'objekwisata' => $this->Wisata_model->get_by_desawisata($id_desawisata),
			'agenda' => $this->Agenda_model->get_by_desawisata($id_desawisata),
			'galeri' => $this->Galeri_model->get_by_desawisata($id_desawisata),
			'berita' => $this->Berita_model->get_by_desawisata($id_desawisata),
			'review' => $this->Review_model->get_by_desawisata($id_desawisata),
			'penginapan' => $this->Penginapan_model->get_by_desawisata($id_desawisata),
			'toko' => $this->Toko_model->get_by_desawisata($id_desawisata),
		];
		$this->load->view('home/'.$config_page->template.'/p_home',$data);
	}
	public function about($subdomain)
	{
		$config_page = getConfigPage($subdomain);
		if ($config_page == null) {
			p_error("404","Halaman tidak ditemukan");
		}
		$id_desawisata = $config_page->fk_desawisata;
		$this->load->model([
			'Desawisata_model',
			'Kategori_model',
			'Wisata_model',
			'Agenda_model',
			'Galeri_model',
			'Berita_model',
			'Review_model',
			'Penginapan_model',
			'Toko_model',
		]);
		$data = [
			'c_name' => 'Home',
			'banner_title' => "About",
			'config_page' => $config_page,
			'desawisata' => $this->Desawisata_model->get_id($id_desawisata),
			'kategori' => $this->Kategori_model->get_by_desawisata($id_desawisata),
			'objekwisata' => $this->Wisata_model->get_by_desawisata($id_desawisata),
			'agenda' => $this->Agenda_model->get_by_desawisata($id_desawisata),
			'galeri' => $this->Galeri_model->get_by_desawisata($id_desawisata),
			'berita' => $this->Berita_model->get_by_desawisata($id_desawisata),
			'review' => $this->Review_model->get_by_desawisata($id_desawisata),
			'penginapan' => $this->Penginapan_model->get_by_desawisata($id_desawisata),
			'toko' => $this->Toko_model->get_by_desawisata($id_desawisata),
		];
		$this->load->view('home/'.$config_page->template.'/p_about',$data);
	}
	
	public function galeri($subdomain)
	{
		$config_page = getConfigPage($subdomain);
		if ($config_page == null) {
			p_error("404","Halaman tidak ditemukan");
		}
		$id_desawisata = $config_page->fk_desawisata;
		$this->load->model([
			'Desawisata_model',
			'Kategori_model',
			'Wisata_model',
			'Agenda_model',
			'Galeri_model',
			'Berita_model',
			'Review_model',
			'Penginapan_model',
			'Toko_model',
		]);
		$data = [
			'c_name' => 'Home',
			'banner_title' => "Galeri",
			'config_page' => $config_page,
			'desawisata' => $this->Desawisata_model->get_id($id_desawisata),
			'kategori' => $this->Kategori_model->get_by_desawisata($id_desawisata),
			'objekwisata' => $this->Wisata_model->get_by_desawisata($id_desawisata),
			'agenda' => $this->Agenda_model->get_by_desawisata($id_desawisata),
			'galeri' => $this->Galeri_model->get_by_desawisata($id_desawisata),
			'berita' => $this->Berita_model->get_by_desawisata($id_desawisata),
			'review' => $this->Review_model->get_by_desawisata($id_desawisata),
			'penginapan' => $this->Penginapan_model->get_by_desawisata($id_desawisata),
			'toko' => $this->Toko_model->get_by_desawisata($id_desawisata),
		];
		$this->load->view('home/'.$config_page->template.'/p_galeri',$data);
	}
	public function agenda($subdomain)
	{
		$config_page = getConfigPage($subdomain);
		if ($config_page == null) {
			p_error("404","Halaman tidak ditemukan");
		}
		$id_desawisata = $config_page->fk_desawisata;
		$this->load->model([
			'Desawisata_model',
			'Kategori_model',
			'Wisata_model',
			'Agenda_model',
			'Galeri_model',
			'Berita_model',
			'Review_model',
			'Penginapan_model',
			'Toko_model',
		]);
		$data = [
			'c_name' => 'Home',
			'banner_title' => "Agenda",
			'config_page' => $config_page,
			'desawisata' => $this->Desawisata_model->get_id($id_desawisata),
			'kategori' => $this->Kategori_model->get_by_desawisata($id_desawisata),
			'objekwisata' => $this->Wisata_model->get_by_desawisata($id_desawisata),
			'agenda' => $this->Agenda_model->get_by_desawisata($id_desawisata),
			'galeri' => $this->Galeri_model->get_by_desawisata($id_desawisata),
			'berita' => $this->Berita_model->get_by_desawisata($id_desawisata),
			'review' => $this->Review_model->get_by_desawisata($id_desawisata),
			'penginapan' => $this->Penginapan_model->get_by_desawisata($id_desawisata),
			'toko' => $this->Toko_model->get_by_desawisata($id_desawisata),
		];
		$this->load->view('home/'.$config_page->template.'/p_agenda',$data);
	}
	public function wisata($subdomain)
	{
		$config_page = getConfigPage($subdomain);
		if ($config_page == null) {
			p_error("404","Halaman tidak ditemukan");
		}
		$id_desawisata = $config_page->fk_desawisata;
		$this->load->model([
			'Desawisata_model',
			'Kategori_model',
			'Wisata_model',
			'Agenda_model',
			'Galeri_model',
			'Berita_model',
			'Review_model',
			'Penginapan_model',
			'Toko_model',
		]);
		$data = [
			'c_name' => 'Home',
			'banner_title' => "Wisata",
			'config_page' => $config_page,
			'desawisata' => $this->Desawisata_model->get_id($id_desawisata),
			'kategori' => $this->Kategori_model->get_by_desawisata($id_desawisata),
			'objekwisata' => $this->Wisata_model->get_by_desawisata($id_desawisata),
			'agenda' => $this->Agenda_model->get_by_desawisata($id_desawisata),
			'galeri' => $this->Galeri_model->get_by_desawisata($id_desawisata),
			'berita' => $this->Berita_model->get_by_desawisata($id_desawisata),
			'review' => $this->Review_model->get_by_desawisata($id_desawisata),
			'penginapan' => $this->Penginapan_model->get_by_desawisata($id_desawisata),
			'toko' => $this->Toko_model->get_by_desawisata($id_desawisata),
		];
		$this->load->view('home/'.$config_page->template.'/p_wisata',$data);
	}
	public function berita($subdomain)
	{
		$config_page = getConfigPage($subdomain);
		if ($config_page == null) {
			p_error("404","Halaman tidak ditemukan");
		}
		$id_desawisata = $config_page->fk_desawisata;
		$this->load->model([
			'Desawisata_model',
			'Kategori_model',
			'Wisata_model',
			'Agenda_model',
			'Galeri_model',
			'Berita_model',
			'Review_model',
			'Penginapan_model',
			'Toko_model',
		]);
		$data = [
			'c_name' => 'Home',
			'banner_title' => "Berita",
			'config_page' => $config_page,
			'desawisata' => $this->Desawisata_model->get_id($id_desawisata),
			'kategori' => $this->Kategori_model->get_by_desawisata($id_desawisata),
			'objekwisata' => $this->Wisata_model->get_by_desawisata($id_desawisata),
			'agenda' => $this->Agenda_model->get_by_desawisata($id_desawisata),
			'galeri' => $this->Galeri_model->get_by_desawisata($id_desawisata),
			'berita' => $this->Berita_model->get_by_desawisata($id_desawisata),
			'review' => $this->Review_model->get_by_desawisata($id_desawisata),
			'penginapan' => $this->Penginapan_model->get_by_desawisata($id_desawisata),
			'toko' => $this->Toko_model->get_by_desawisata($id_desawisata),
		];
		$this->load->view('home/'.$config_page->template.'/p_berita',$data);
	}
	public function beritadetail($subdomain,$id_berita)
	{
		$config_page = getConfigPage($subdomain);
		if ($config_page == null) {
			p_error("404","Halaman tidak ditemukan");
		}
		$id_desawisata = $config_page->fk_desawisata;
		$this->load->model([
			'Desawisata_model',
			'Kategori_model',
			'Wisata_model',
			'Agenda_model',
			'Galeri_model',
			'Berita_model',
			'Review_model',
			'Penginapan_model',
			'Toko_model',
		]);
		$data = [
			'c_name' => 'Home',
			'banner_title' => "Berita Detail",
			'config_page' => $config_page,
			'desawisata' => $this->Desawisata_model->get_id($id_desawisata),
			'id_berita' => $id_berita,
			'kategori' => $this->Kategori_model->get_by_desawisata($id_desawisata),
			'objekwisata' => $this->Wisata_model->get_by_desawisata($id_desawisata),
			'agenda' => $this->Agenda_model->get_by_desawisata($id_desawisata),
			'galeri' => $this->Galeri_model->get_by_desawisata($id_desawisata),
			'berita' => $this->Berita_model->get_by_desawisata($id_desawisata),
			'berita_on' => $this->Berita_model->get_id($id_berita),
			'review' => $this->Review_model->get_by_desawisata($id_desawisata),
			'penginapan' => $this->Penginapan_model->get_by_desawisata($id_desawisata),
			'toko' => $this->Toko_model->get_by_desawisata($id_desawisata),
		];
		$this->load->view('home/'.$config_page->template.'/p_berita_detail',$data);
	}
	public function kontak($subdomain)
	{
		$config_page = getConfigPage($subdomain);
		if ($config_page == null) {
			p_error("404","Halaman tidak ditemukan");
		}
		$id_desawisata = $config_page->fk_desawisata;
		$this->load->model([
			'Desawisata_model',
			'Kategori_model',
			'Wisata_model',
			'Agenda_model',
			'Galeri_model',
			'Berita_model',
			'Review_model',
			'Penginapan_model',
			'Toko_model',
		]);
		$data = [
			'c_name' => 'Home',
			'banner_title' => "Kontak",
			'config_page' => $config_page,
			'desawisata' => $this->Desawisata_model->get_id($id_desawisata),
			'kategori' => $this->Kategori_model->get_by_desawisata($id_desawisata),
			'objekwisata' => $this->Wisata_model->get_by_desawisata($id_desawisata),
			'agenda' => $this->Agenda_model->get_by_desawisata($id_desawisata),
			'galeri' => $this->Galeri_model->get_by_desawisata($id_desawisata),
			'berita' => $this->Berita_model->get_by_desawisata($id_desawisata),
			'review' => $this->Review_model->get_by_desawisata($id_desawisata),
			'penginapan' => $this->Penginapan_model->get_by_desawisata($id_desawisata),
			'toko' => $this->Toko_model->get_by_desawisata($id_desawisata),
		];
		$this->load->library('form_validation');
		$this->form_validation->set_rules('keterangan',"Keterangan","required");
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('home/'.$config_page->template.'/p_kontak',$data);
		}else{
			$set = [
				'nama' => $this->input->post('nama'),
				'email' => $this->input->post('email'),
				'telp' => $this->input->post('telp'),
				'rating' => $this->input->post('rating'),
				'keterangan' => $this->input->post('keterangan'),
				'fk_desawisata' => $id_desawisata,
			];
			$this->db->insert('review',$set);
			redirect('Home/Kontak/'.$subdomain,'refresh');
		}
	}
	public function agendadetail($subdomain,$id_agenda)
	{
		$config_page = getConfigPage($subdomain);
		if ($config_page == null) {
			p_error("404","Halaman tidak ditemukan");
		}
		$id_desawisata = $config_page->fk_desawisata;
		$this->load->model([
			'Desawisata_model',
			'Kategori_model',
			'Wisata_model',
			'Agenda_model',
			'Galeri_model',
			'Berita_model',
			'Review_model',
			'Penginapan_model',
			'Toko_model',
		]);
		$data = [
			'c_name' => 'Home',
			'banner_title' => "Agenda Detail",
			'config_page' => $config_page,
			'desawisata' => $this->Desawisata_model->get_id($id_desawisata),
			'kategori' => $this->Kategori_model->get_by_desawisata($id_desawisata),
			'objekwisata' => $this->Wisata_model->get_by_desawisata($id_desawisata),
			'agenda' => $this->Agenda_model->get_id($id_agenda),
			'galeri' => $this->Galeri_model->get_by_desawisata($id_desawisata),
			'berita' => $this->Berita_model->get_by_desawisata($id_desawisata),
			'review' => $this->Review_model->get_by_desawisata($id_desawisata),
			'penginapan' => $this->Penginapan_model->get_by_desawisata($id_desawisata),
			'toko' => $this->Toko_model->get_by_desawisata($id_desawisata),
		];
		$this->load->view('home/'.$config_page->template.'/p_agenda_detail',$data);
	}
	public function penginapandetail($subdomain,$id_penginapan)
	{
		$config_page = getConfigPage($subdomain);
		if ($config_page == null) {
			p_error("404","Halaman tidak ditemukan");
		}
		$id_desawisata = $config_page->fk_desawisata;
		$this->load->model([
			'Desawisata_model',
			'Kategori_model',
			'Wisata_model',
			'Agenda_model',
			'Galeri_model',
			'Berita_model',
			'Review_model',
			'Penginapan_model',
			'Toko_model',
			'Kamar_model'
		]);
		$data = [
			'c_name' => 'Home',
			'banner_title' => "Penginapan Detail",
			'config_page' => $config_page,
			'desawisata' => $this->Desawisata_model->get_id($id_desawisata),
			'kategori' => $this->Kategori_model->get_by_desawisata($id_desawisata),
			'objekwisata' => $this->Wisata_model->get_by_desawisata($id_desawisata),
			'agenda' => $this->Agenda_model->get_by_desawisata($id_desawisata),
			'galeri' => $this->Galeri_model->get_by_desawisata($id_desawisata),
			'berita' => $this->Berita_model->get_by_desawisata($id_desawisata),
			'review' => $this->Review_model->get_by_desawisata($id_desawisata),
			'penginapan' => $this->Penginapan_model->get_id($id_penginapan),
			'toko' => $this->Toko_model->get_by_desawisata($id_desawisata),
			'kamar' => $this->Kamar_model->get_by_penginapan($id_penginapan),
		];
		$this->load->view('home/'.$config_page->template.'/p_penginapan_detail',$data);
	}
	public function tokodetail($subdomain,$id_toko)
	{
		$config_page = getConfigPage($subdomain);
		if ($config_page == null) {
			p_error("404","Halaman tidak ditemukan");
		}
		$id_desawisata = $config_page->fk_desawisata;
		$this->load->model([
			'Desawisata_model',
			'Kategori_model',
			'Wisata_model',
			'Agenda_model',
			'Galeri_model',
			'Berita_model',
			'Review_model',
			'Penginapan_model',
			'Toko_model',
			'Kamar_model'
		]);
		$data = [
			'c_name' => 'Home',
			'banner_title' => "Toko Detail",
			'config_page' => $config_page,
			'desawisata' => $this->Desawisata_model->get_id($id_desawisata),
			'kategori' => $this->Kategori_model->get_by_desawisata($id_desawisata),
			'objekwisata' => $this->Wisata_model->get_by_desawisata($id_desawisata),
			'agenda' => $this->Agenda_model->get_by_desawisata($id_desawisata),
			'galeri' => $this->Galeri_model->get_by_desawisata($id_desawisata),
			'berita' => $this->Berita_model->get_by_desawisata($id_desawisata),
			'review' => $this->Review_model->get_by_desawisata($id_desawisata),
			'penginapan' => $this->Penginapan_model->get_by_desawisata($id_desawisata),
			'toko' => $this->Toko_model->get_id($id_toko),
		];
		$this->load->view('home/'.$config_page->template.'/p_toko_detail',$data);
	}
	public function wisatadetail($subdomain,$id_wisata)
	{
		$config_page = getConfigPage($subdomain);
		if ($config_page == null) {
			p_error("404","Halaman tidak ditemukan");
		}
		$id_desawisata = $config_page->fk_desawisata;
		$this->load->model([
			'Desawisata_model',
			'Kategori_model',
			'Wisata_model',
			'Agenda_model',
			'Galeri_model',
			'Berita_model',
			'Review_model',
			'Penginapan_model',
			'Toko_model',
		]);
		$data = [
			'c_name' => 'Home',
			'banner_title' => "Wisata Detail",
			'config_page' => $config_page,
			'id_wisata' => $id_wisata,
			'desawisata' => $this->Desawisata_model->get_id($id_desawisata),
			'kategori' => $this->Kategori_model->get_by_desawisata($id_desawisata),
			'objekwisata' => $this->Wisata_model->get_by_desawisata($id_desawisata),
			'agenda' => $this->Agenda_model->get_by_desawisata($id_desawisata),
			'galeri' => $this->Galeri_model->get_by_desawisata($id_desawisata),
			'berita' => $this->Berita_model->get_by_desawisata($id_desawisata),
			'review' => $this->Review_model->get_by_desawisata($id_desawisata),
			'penginapan' => $this->Penginapan_model->get_by_desawisata($id_desawisata),
			'toko' => $this->Toko_model->get_by_desawisata($id_desawisata),
			'wisata_on' => $this->Wisata_model->get_id($id_wisata),
			'wisata' => $this->Wisata_model->get_by_desawisata($id_desawisata),
		];
		$this->load->view('home/'.$config_page->template.'/p_wisata_detail',$data);
	}
}
