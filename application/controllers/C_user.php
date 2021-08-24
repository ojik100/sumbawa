<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_user extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('M_User');
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
	public function index()
	{
		$data['admin'] = $this->db->query("SELECT * FROM admin WHERE id ORDER BY id DESC")->result();
		$this->load->view('admin/user/index',$data);
	}
    public function add()
	{
		$this->load->view('admin/user/add');
	}
    public function edit($id)
	{
		
		$data['admin'] = $this->db->query("SELECT * FROM admin WHERE id='$id' ")->result();
		$this->load->view('admin/user/edit',$data);
	}
    public function store()
	{
		
        $username = $this->input->post('username');
        $password = $this->input->post('password');

			$data = array(
				'username' => $username,
				'password' => $password,

			);
			$this->M_User->input_data($data, 'admin');
			$this->session->set_flashdata('success', 'Success!!');

			redirect('C_user/index');
		
	}
	public function update()
	{
		
			$id = $this->input->post('id');
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$data = array(
				'id' => $id,
				'username' => $username,
				'password' => $password,

			);
			$where = array(
				'id' => $id
			);
			$this->M_User->update_data($where, $data, 'admin');
			$this->session->set_flashdata('success', 'Update Success!!');

			redirect('C_user/index');
		
	}
	function hapus($id)
	{
		$where = array('id' => $id);
		$this->M_User->hapus_data($where, 'admin');
		$this->session->set_flashdata('error', 'Delete Success!!');

		redirect('C_user/index');
	}

	
}
