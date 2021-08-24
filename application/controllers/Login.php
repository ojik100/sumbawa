<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('M_Login');
 
	}
 
	public function index()
	{
		$this->load->view('admin/login');
	}
	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => $password
			);
		$cek = $this->M_Login->cek_login("admin",$where)->num_rows();
		if($cek > 0){
	
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);
	
			$this->session->set_userdata($data_session);
			$this->session->set_flashdata('success', 'Login Sukses');
			redirect(base_url("Dashboard"));
		}else{
			$this->session->set_flashdata('error', 'Login Sukses');
			redirect(base_url("Login"));
		}
	}
	function logout(){
		$this->session->sess_destroy();
		$this->session->set_flashdata('info', 'Berhail Keluar');
		redirect(base_url('Login'));
	}
}
