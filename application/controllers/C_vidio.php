<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_vidio extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('M_Vidio');
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
	public function index()
	{
		$data['vidio'] =$this->db->query("SELECT * FROM vidio WHERE id ORDER BY id DESC")->result();
		$this->load->view('admin/vidio/index',$data);
	}
    public function add()
	{
		$this->load->view('admin/vidio/add');
	}
    public function store()
	{
        $judul = $_POST['judul'];
		$vidio 	    = $_FILES['vidio'];


		if ($vidio   = '') {
		} else {
			$config['upload_path']		= './upload/vidio/';

			$config['allowed_types']		= 'mp4';
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('vidio')) {
				$this->session->set_flashdata('error', 'gagall!!');
				redirect('C_vidio/add');
				die();
			} else {
				$vidio = $this->upload->data('file_name');
			}
		}
		$data = array(
			'judul' => $judul,
			'vidio' => $vidio,
		);

		$this->M_Vidio->input_data($data, 'vidio');
		$this->session->set_flashdata('success', 'Success!!!');
		redirect('C_vidio');
		$this->load->view('admin/vidio/index');
		
	}
	public function hapus($id)
	{
		$_id = $this->db->get_where('vidio', ['id' => $id])->row();
		$query = $this->db->delete('vidio', ['id' => $id]);
		if ($query) {
			unlink("./upload/vidio/" . $_id->vidio);
		
		}
		$this->session->set_flashdata('info', 'Delete Success!!!');
		redirect('C_vidio');
	}

}
