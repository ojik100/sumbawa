<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tentang extends CI_Controller {

	public function index()
	{
		$data['wisata']=$this->db->query("SELECT * FROM wisata WHERE id ORDER BY id DESC")->result();
		$data['artikel']=$this->db->query("SELECT * FROM artikel WHERE id ORDER BY id DESC")->result();
		$this->load->view('web/tentang',$data);
	}
}
