<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galery extends CI_Controller {

	public function index()
	{
		$data['galery']=$this->db->query("SELECT * FROM galery WHERE id ORDER BY id DESC")->result();
		$data['testimoni']=$this->db->query("SELECT * FROM testimoni WHERE id ORDER BY id DESC")->result();
		
		$this->load->view('web/galery',$data);
	}
}
