<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

	public function index()
	{
		$data['galery']=$this->db->query("SELECT * FROM galery LIMIT 6")->result();
		$data['wisata']=$this->db->query("SELECT * FROM wisata LIMIT 6 ")->result();
		
		$data['artikel']=$this->db->query("SELECT * FROM artikel LIMIT 6")->result();
		$data['testimoni']=$this->db->query("SELECT * FROM testimoni WHERE id ORDER BY id DESC")->result();
		
		$this->load->view('web/index',$data);
	}
	public function detail_wisata($id)
	{
		$data['wisata']=$this->db->query("SELECT * FROM wisata  WHERE id ORDER BY id  DESC ")->result();	
		$data['wisata_id']=$this->db->query("SELECT * FROM wisata  WHERE id='$id' ORDER BY id  DESC ")->result();	
		$this->load->view('web/Selengkapnya/detail_wisata',$data);
	}
	public function detail_berita($id)
	{
		$data['artikel']=$this->db->query("SELECT * FROM artikel  WHERE id ORDER BY id  DESC ")->result();	
		$data['artikel_id']=$this->db->query("SELECT * FROM artikel  WHERE id='$id' ORDER BY id  DESC ")->result();	
		$this->load->view('web/Selengkapnya/detail_berita',$data);
	}
}
