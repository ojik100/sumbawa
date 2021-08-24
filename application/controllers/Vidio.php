<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vidio extends CI_Controller {

	public function index()
	{
		$data['vidio']=$this->db->query("SELECT * FROM vidio WHERE id ORDER BY id DESC")->result();
		$data['testimoni']=$this->db->query("SELECT * FROM testimoni WHERE id ORDER BY id DESC")->result();
		
		$this->load->view('web/vidio',$data);
	}
}
