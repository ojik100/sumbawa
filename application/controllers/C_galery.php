<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_galery extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('M_Galery');
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
	public function index()
	{
		$data['galery'] = $this->db->query("SELECT * FROM galery WHERE id ORDER BY id DESC")->result();
		$this->load->view('admin/galery/index', $data);
	}
	public function add()
	{
		$this->load->view('admin/galery/add');
	}
	public function edit($id)
	{
		$data['galery'] = $this->db->query("SELECT * FROM galery WHERE id='$id'")->result();
		$this->load->view('admin/galery/edit',$data);
	}
	public function hapus($id)
	{
		$_id = $this->db->get_where('galery', ['id' => $id])->row();
		$query = $this->db->delete('galery', ['id' => $id]);
		if ($query) {
			unlink("./upload/galery/" . $_id->gambar);
			
		}
		$this->session->set_flashdata('info', 'Delete Success!!!');
		redirect('C_galery');
	}

	public function store()
	{
		$judul = $_POST['judul'];
		$gambar 	    = $_FILES['gambar'];


		if ($gambar   = '') {
		} else {
			$config['upload_path']		= './upload/galery/';

			$config['allowed_types']		= 'jpg|png|gif|jpeg';
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('gambar')) {
				$this->session->set_flashdata('error', 'gagall!!');
				redirect('C_galery/add');
				die();
			} else {
				$gambar = $this->upload->data('file_name');
			}
		}
		$data = array(
			'judul' => $judul,
			'gambar' => $gambar,
		);

		$this->M_Galery->input_data($data, 'galery');
		$this->session->set_flashdata('success', 'Success!!!');
		redirect('C_galery');
		$this->load->view('admin/galery/index');
	}
	public function updat1e(){
		$id = $_POST['id'];
		$judul = $_POST['judul'];
		$gambar 	    = $_FILES['gambar'];
		$path = './upload/galery/';	
		$kondisi = array('id' => $id );

		$config['upload_path'] = './upload/glalery';
		$config['allowed_types'] = 'jpg|png|jpeg|gif';
		$config['max_size'] = '2048';  //2MB max
		$config['max_width'] = '4480'; // pixel
		$config['max_height'] = '4480'; // pixel
		$config['file_name'] = $_FILES['gambar']['name'];
  
		$this->load->library('upload', $config);
  
		  if (!empty($_FILES['gambar']['name'])) {
			  if ( $this->upload->do_upload('gambar') ) {
				  $foto = $this->upload->data();
				  $data = array(
								'judul'       => $judul,
							     'gambar'       => $foto['file_name'],
							
							  );
				// hapus foto pada direktori
				unlink('upload/galery/'.$gambar->foto);
				 $this->M_Galery->update($data,$kondisi);
				redirect('C_galery');
			  }else {
				die("gagal update");
			  }
		  }else {
			echo "tidak masuk";
		  }
	}
	
	public function update()
	{
		$id = $_POST['id'];
		$judul = $_POST['judul'];
		$gambar 	    = $_FILES['gambar'];


		
			$config['upload_path']		= './upload/galery/';
			$config['allowed_types']		= 'jpg|png|gif|jpeg';
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('gambar')) {
				$this->session->set_flashdata('error', 'gagall!!');
				redirect('C_galery/index');
			} else {
				$gambar = $this->upload->data('file_name');
				
			}
	
	
		$data = array(
			'id' => $id,
			'judul' => $judul,
			'gambar' => $gambar,
		);
		$where = array(
			'id' => $id
		);

		$this->M_Galery->update_data($where, $data, 'galery');
		$this->session->set_flashdata('success', 'Update Success!!!');
		redirect('C_galery');
		$this->load->view('admin/galery/index');
	}
}
