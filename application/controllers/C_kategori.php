<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_kategori extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('M_Kategori');
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
	public function index()
	{


		$data['kat'] = $this->db->query("SELECT * FROM kategori WHERE id ORDER BY id DESC")->result();
		$this->load->view('admin/kategori/index', $data);
	}
	public function edit($id = 'id')
	{
		$data['kat'] = $this->db->query("SELECT * FROM kategori WHERE id='$id'")->result();
		$this->load->view('admin/kategori/edit', $data);
	}

	function update()
	{
		$this->form_validation->set_rules('kategori', 'Kategori', 'required');
		if ($this->form_validation->run() != false) {

			$id = $this->input->post('id');
			$kategori = $this->input->post('kategori');


			$data = array(
				'id' => $id,
				'kategori' => $kategori

			);
			$where = array(
				'id' => $id
			);
			$this->M_Kategori->update_data($where, $data, 'kategori');
			$this->session->set_flashdata('info', 'Upate Success!!');
			redirect('C_kategori/index');
		} else {
			$this->session->set_flashdata('error', 'Upate Gagal!!');
			$this->load->view('admin/kategori/add');
		}
	}

	public function add()
	{
		$this->load->view('admin/kategori/add');
	}
	public function store()
	{
		$this->form_validation->set_rules('kategori', 'Kategori', 'required');
		if ($this->form_validation->run() != false) {
			$kategori = $this->input->post('kategori');

			$data = array(
				'kategori' => $kategori,

			);
			$this->M_Kategori->input_data($data, 'kategori');
			$this->session->set_flashdata('success', 'Success!!');

			redirect('C_kategori/index');
		} else {
			$this->session->set_flashdata('error', ' Gagal!!');
			$this->load->view('admin/kategori/add');
		}
	}
	function hapus($id)
	{
		$where = array('id' => $id);
		$this->M_Kategori->hapus_data($where, 'kategori');
		$this->session->set_flashdata('error', 'Delete Success!!');

		redirect('C_kategori/index');
	}
}
