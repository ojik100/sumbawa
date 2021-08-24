<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_artikel extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('M_Artikel');
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
	public function index()
	{
		$data['artikel']=$this->db->query("SELECT * FROM artikel WHERE id ORDER BY id DESC")->result();
		
		$this->load->view('admin/artikel/index',$data);
	}
    public function add()
	{
		$this->load->view('admin/artikel/add');
	}
	public function edit($id)
	{
		$data['artikel']=$this->db->query("SELECT * FROM artikel WHERE id='$id'")->result();
		
		$this->load->view('admin/artikel/edit',$data);
	}
	function hapus($id)
	{
		$where = array('id' => $id);
		$this->M_Artikel->hapus_data($where, 'artikel');
		$this->session->set_flashdata('info', 'Delete Success!!');

		redirect('C_artikel/index');
	}
	public function Store()
	{
		$judul = $_POST['judul'];
		$gambar 	    = $_FILES['gambar'];
		$deskripsi = $_POST['deskripsi'];

		if ($gambar   = '') {
		} else {
			$config['upload_path']		= './upload/artikel/';

			$config['allowed_types']		= 'jpg|png|gif|jpeg';
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('gambar')) {
				$this->session->set_flashdata('error', 'gagall!!');
				redirect('C_artikel/add');
				die();
			} else {
				$gambar = $this->upload->data('file_name');
			}
		}
		$data = array(
			'judul' => $judul,
			'gambar' => $gambar,
			'deskripsi' => $deskripsi,
		);

		$this->M_Artikel->input_data($data, 'artikel');
		$this->session->set_flashdata('success', 'Success!!!');
		redirect('C_Artikel');
		$this->load->view('admin/artikel/index');
		
	}
	public function update()
	{
		$id = $_POST['id'];
		$judul = $_POST['judul'];
		$gambar 	    = $_FILES['gambar'];
		$deskripsi = $_POST['deskripsi'];

		if ($gambar   = '') {
		} else {
			$config['upload_path']		= './upload/artikel/';

			$config['allowed_types']		= 'jpg|png|gif|jpeg';
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('gambar')) {
				$this->session->set_flashdata('error', 'gagall!!');
				redirect('C_artikel/add');
				die();
			} else {
				$gambar = $this->upload->data('file_name');
			}
		}
		$data = array(
			'id' => $id,
			'judul' => $judul,
			'gambar' => $gambar,
			'deskripsi' => $deskripsi,
		);
		$where = array(
			'id' => $id
		);
		$this->M_Artikel->update_data($where, $data, 'artikel');
		$this->session->set_flashdata('success', 'Success!!!');
		redirect('C_Artikel');
		$this->load->view('admin/artikel/index');
		
	}
}
