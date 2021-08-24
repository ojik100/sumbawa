<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wisata extends CI_Controller {

	public function index()
	{
		$data['wisata']=$this->db->query("SELECT * FROM wisata WHERE id ORDER BY id DESC")->result();
		$this->load->view('web/wisata',$data);
	}
}
