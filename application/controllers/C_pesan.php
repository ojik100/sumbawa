<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_pesan extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('M_Pesan');
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
	public function index()
	{
		$data['pesan'] =$this->db->query("SELECT * FROM pesan WHERE id ORDER BY id DESC")->result();
		$this->load->view('admin/pesan/index',$data);
	}
    public function add()
	{
		$this->load->view('admin/kategori/add');
	}
	function hapus($id)
	{
		$where = array('id' => $id);
		$this->M_Pesan->hapus_data($where, 'pesan');
		$this->session->set_flashdata('error', 'Delete Success!!');

		redirect('C_pesan/index');
	}
}
