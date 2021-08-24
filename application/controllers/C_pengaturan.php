<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_pengaturan extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/pengaturan/index');
	}
    public function add()
	{
		$this->load->view('admin/kategori/add');
	}
}
