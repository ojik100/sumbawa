<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
	public function index()
	{
		$data['wisata'] =$this->db->query("SELECT * FROM wisata")->num_rows();
		$data['kategori'] =$this->db->query("SELECT * FROM kategori")->num_rows();
		$data['galery'] =$this->db->query("SELECT * FROM galery")->num_rows();
		$data['artikel'] =$this->db->query("SELECT * FROM artikel")->num_rows();
		$this->load->view('admin/index',$data);
	}
}
