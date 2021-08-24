<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_testimoni extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('M_Testimoni');
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
	public function index()
	{
		$data['testimoni'] = $this->db->query("SELECT * FROM testimoni WHERE id ORDER BY id DESC")->result();
		$this->load->view('admin/testimoni/index',$data);
	}
    public function add()
	{
		$this->load->view('admin/testimoni/add');
	}
	public function edit($id)
	{
		
		$data['testimoni'] = $this->db->query("SELECT * FROM testimoni WHERE id='$id' ")->result();
		$this->load->view('admin/testimoni/edit',$data);
	}
	public function store()
	{
		
			$nama = $this->input->post('nama');
			$deskripsi = $this->input->post('deskripsi');

			$data = array(
				'nama' => $nama,
				'deskripsi' => $deskripsi,

			);
			$this->M_Testimoni->input_data($data, 'testimoni');
			$this->session->set_flashdata('success', 'Success!!');

			redirect('C_testimoni/index');
		
	}
	public function update()
	{
		
			$id = $this->input->post('id');
			$nama = $this->input->post('nama');
			$deskripsi = $this->input->post('deskripsi');

			$data = array(
				'id' => $id,
				'nama' => $nama,
				'deskripsi' => $deskripsi,

			);
			$where = array(
				'id' => $id
			);
			$this->M_Testimoni->update_data($where, $data, 'testimoni');
			$this->session->set_flashdata('success', 'Update Success!!');

			redirect('C_testimoni/index');
		
	}
	function hapus($id)
	{
		$where = array('id' => $id);
		$this->M_Testimoni->hapus_data($where, 'testimoni');
		$this->session->set_flashdata('error', 'Delete Success!!');

		redirect('C_testimoni/index');
	}
	
}
