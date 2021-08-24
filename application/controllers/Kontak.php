<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {
	function __construct()
	{
	parent::__construct();

	$this->load->model('M_Pesan');
		}
	
	public function index()
	{
		$this->load->view('web/kontak');
	}
	public function pesan()
	{
		   $nama = $this->input->post('nama');
		   $email = $this->input->post('email');
		   $subject = $this->input->post('subject');
			$pesan = $this->input->post('pesan');
			$status = $this->input->post('status');

			$data = array(
				'nama' => $nama,
				'email' => $email,
				'subject' => $subject,
				'pesan' => $pesan,
				'status' => $status,

			);
			$this->M_Pesan->input_data($data, 'pesan');
			$this->session->set_flashdata('success', 'Pesan Berhasil Di Kirim');

			redirect('Kontak/index');
	}
}
