<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_model extends CI_Model {

  public function pusat_data()
  {
    #
    $data['pengunjung_total'] = $this->db->select('count(id) as jml')->get('pengunjung')->row(0)->jml;
    $data['pengunjung_tahun'] = $this->db->select('count(id) as jml')->where('year(tanggal)',date('Y'))->get('pengunjung')->row(0)->jml;
    $data['pengunjung_bulan'] = $this->db->select('count(id) as jml')->where('year(tanggal)',date('Y'))->where('month(tanggal)',date('m'))->get('pengunjung')->row(0)->jml;

    $data['domisili']['lokal'] = $this->db->select('count(id) as jml')->where('domisili','lokal')->get('pengunjung')->row(0)->jml;
    $data['domisili']['regional'] = $this->db->select('count(id) as jml')->where('domisili','regional')->get('pengunjung')->row(0)->jml;
    $data['domisili']['internasional'] = $this->db->select('count(id) as jml')->where('domisili','internasional')->get('pengunjung')->row(0)->jml;

    $data['umur']['anak'] = $this->db->select('count(id) as jml')->where('umur','anak')->get('pengunjung')->row(0)->jml;
    $data['umur']['remaja'] = $this->db->select('count(id) as jml')->where('umur','remaja')->get('pengunjung')->row(0)->jml;
    $data['umur']['dewasa'] = $this->db->select('count(id) as jml')->where('umur','dewasa')->get('pengunjung')->row(0)->jml;

    $data['jeniskelamin']['l'] = $this->db->select('count(id) as jml')->where('jeniskelamin','L')->get('pengunjung')->row(0)->jml;
    $data['jeniskelamin']['p'] = $this->db->select('count(id) as jml')->where('jeniskelamin','P')->get('pengunjung')->row(0)->jml;

    $this->db->select('
      desawisata.*,
      (select count(id) from pengunjung where fk_desawisata=desawisata.id AND DATE(tanggal) = CURDATE()) as in_day,
      (select count(id) from pengunjung where fk_desawisata=desawisata.id AND MONTH(tanggal) = MONTH(CURDATE())) as in_month,
      (select count(id) from pengunjung where fk_desawisata=desawisata.id AND year(tanggal) = year(CURDATE())) as in_year,
      (select count(id) from pengunjung where fk_desawisata=desawisata.id) as total
      ');
    $query = $this->db->get('desawisata');
    $data['desawisata_tabel'] = $query->result();
    #
    return $data;
  }

  public function desawisata_data($id_desawisata)
  {
    #
    $data['pengunjung_total'] = $this->db->select('count(id) as jml')->where('fk_desawisata',$id_desawisata)->get('pengunjung')->row(0)->jml;
    $data['pengunjung_tahun'] = $this->db->select('count(id) as jml')->where('fk_desawisata',$id_desawisata)->where('year(tanggal)',date('Y'))->get('pengunjung')->row(0)->jml;
    $data['pengunjung_bulan'] = $this->db->select('count(id) as jml')->where('fk_desawisata',$id_desawisata)->where('year(tanggal)',date('Y'))->where('month(tanggal)',date('m'))->get('pengunjung')->row(0)->jml;

    $data['domisili']['lokal'] = $this->db->select('count(id) as jml')->where('fk_desawisata',$id_desawisata)->where('domisili','lokal')->get('pengunjung')->row(0)->jml;
    $data['domisili']['regional'] = $this->db->select('count(id) as jml')->where('fk_desawisata',$id_desawisata)->where('domisili','regional')->get('pengunjung')->row(0)->jml;
    $data['domisili']['internasional'] = $this->db->select('count(id) as jml')->where('fk_desawisata',$id_desawisata)->where('domisili','internasional')->get('pengunjung')->row(0)->jml;

    $data['umur']['anak'] = $this->db->select('count(id) as jml')->where('fk_desawisata',$id_desawisata)->where('umur','anak')->get('pengunjung')->row(0)->jml;
    $data['umur']['remaja'] = $this->db->select('count(id) as jml')->where('fk_desawisata',$id_desawisata)->where('umur','remaja')->get('pengunjung')->row(0)->jml;
    $data['umur']['dewasa'] = $this->db->select('count(id) as jml')->where('fk_desawisata',$id_desawisata)->where('umur','dewasa')->get('pengunjung')->row(0)->jml;

    $data['jeniskelamin']['l'] = $this->db->select('count(id) as jml')->where('fk_desawisata',$id_desawisata)->where('jeniskelamin','L')->get('pengunjung')->row(0)->jml;
    $data['jeniskelamin']['p'] = $this->db->select('count(id) as jml')->where('fk_desawisata',$id_desawisata)->where('jeniskelamin','P')->get('pengunjung')->row(0)->jml;

    $this->db->select('
      desawisata.*,
      (select count(id) from pengunjung where fk_desawisata=desawisata.id AND DATE(tanggal) = CURDATE()) as in_day,
      (select count(id) from pengunjung where fk_desawisata=desawisata.id AND MONTH(tanggal) = MONTH(CURDATE())) as in_month,
      (select count(id) from pengunjung where fk_desawisata=desawisata.id AND year(tanggal) = year(CURDATE())) as in_year,
      (select count(id) from pengunjung where fk_desawisata=desawisata.id) as total
      ');
    $query = $this->db->get('desawisata');
    $data['desawisata_tabel'] = $query->result();
    #
    return $data;
  }

}
