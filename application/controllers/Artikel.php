<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {
    function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('M_Artikel');
	}
	public function index()
	{
        $data['artikel']=$this->db->query("SELECT * FROM artikel WHERE id ORDER BY id DESC")->result();
      
		$this->load->view('web/artikel',$data);
	}
}
