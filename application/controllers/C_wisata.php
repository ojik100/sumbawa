<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_wisata extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('M_Wisata');
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
	public function index()
	{
		$data['wisata'] = $this->db->query("SELECT * FROM wisata WHERE id ORDER BY id DESC")->result();
		$this->load->view('admin/wisata/index', $data);
	}
	public function update()
	{
		$id = $_POST['id'];
		$id_kategori = $_POST['id_kategori'];
		$nama_wisata = $_POST['nama_wisata'];
		$alamat = $_POST['alamat'];
		$no_wa = $_POST['no_wa'];
		$gambar 	    = $_FILES['gambar'];
		$gambar1	    = $_FILES['gambar1'];
		$gambar2	    = $_FILES['gambar2'];
		$deskripsi = $_POST['deskripsi'];


		if ($gambar   = '') {
		} else {
			$config['upload_path']		= './upload/wisata';

			$config['allowed_types']		= 'jpg|png|gif|jpeg';
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('gambar')) {
				$text = '<div class="alert alert-danger" role="alert">Upload Gambar Gagal!</div>';
				echo $this->session->set_flashdata('msg', $text);

				redirect('C_Wisata/add');
				die();
			} else {
				$gambar = $this->upload->data('file_name');
			}
			if ($gambar1   = '') {
			} else {
				$config['upload_path']		= './upload/wisata';

				$config['allowed_types']		= 'jpg|png|gif|jpeg';
				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('gambar1')) {
					$text = '<div class="alert alert-danger" role="alert">Upload Gambar Gagal!</div>';
					echo $this->session->set_flashdata('msg', $text);

					redirect('C_Wisata/add');
					die();
				} else {
					$gambar1 = $this->upload->data('file_name');
				}
				if ($gambar2   = '') {
				} else {
					$config['upload_path']		= './upload/wisata';

					$config['allowed_types']		= 'jpg|png|gif|jpeg';
					$this->load->library('upload', $config);
					if (!$this->upload->do_upload('gambar2')) {
						$text = '<div class="alert alert-danger" role="alert">Upload Gambar Gagal!</div>';
						echo $this->session->set_flashdata('msg', $text);

						redirect('C_Wisata/add');
						die();
					} else {
						$gambar2 = $this->upload->data('file_name');
					}
				}
				$data = array(
					'id' => $id,
					'id_kategori' => $id_kategori,
					'nama_wisata' => $nama_wisata,
					'no_wa' => $no_wa,
					'alamat' => $alamat,
					'gambar' => $gambar,
					'gambar1' => $gambar1,
					'gambar2' => $gambar2,
					'deskripsi' => $deskripsi,


				);

				$where = array(
					'id' => $id
				);
		
				$this->M_Wisata->update_data($where, $data, 'wisata');
				$this->session->set_flashdata('success', 'Update Success!!!');
				redirect('C_wisata/index');
				$this->load->view('Admin/wisata/index');
			}
		}
	}
	public function add()
	{

		$data['kat'] = $this->db->query("SELECT * FROM kategori WHERE id ORDER BY id DESC")->result();
		$this->load->view('admin/wisata/add', $data);
	}
	public function edit($id)
	{

		$data['wisata'] = $this->db->query("SELECT * FROM wisata WHERE id='$id'")->result();
		$this->load->view('admin/wisata/edit', $data);
	}
	public function hapus($id)
	{
		$_id = $this->db->get_where('wisata', ['id' => $id])->row();
		$query = $this->db->delete('wisata', ['id' => $id]);
		if ($query) {
			unlink("./upload/wisata/" . $_id->gambar);
			unlink("./upload/wisata/" . $_id->gambar1);
			unlink("./upload/wisata/" . $_id->gambar2);
		}
		$this->session->set_flashdata('info', 'Delete Success!!!');
		redirect('C_wisata');
	}

	public function store()
	{
		$id_kategori = $_POST['id_kategori'];
		$nama_wisata = $_POST['nama_wisata'];
		$alamat = $_POST['alamat'];
		$no_wa = $_POST['no_wa'];
		$gambar 	    = $_FILES['gambar'];
		$gambar1	    = $_FILES['gambar1'];
		$gambar2	    = $_FILES['gambar2'];
		$deskripsi = $_POST['deskripsi'];

		if ($gambar   = '') {
		} else {
			$config['upload_path']		= './upload/wisata';

			$config['allowed_types']		= 'jpg|png|gif|jpeg';
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('gambar')) {
				$this->session->set_flashdata('error', 'gagall!!');
				redirect('C_wisata/add');
				die();
			} else {
				$gambar = $this->upload->data('file_name');
			}

			if ($gambar1   = '') {
			} else {
				$config['upload_path']		= './upload/wisata';

				$config['allowed_types']		= 'jpg|png|gif';
				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('gambar1')) {
					$this->session->set_flashdata('error', 'gagall!!');
					redirect('C_wisata/add');
					die();
				} else {
					$gambar1 = $this->upload->data('file_name');
				}

				if ($gambar2   = '') {
				} else {
					$config['upload_path']		= './upload/wisata';

					$config['allowed_types']		= 'jpg|png|gif';
					$this->load->library('upload', $config);
					if (!$this->upload->do_upload('gambar2')) {
						$this->session->set_flashdata('error', 'gagall!!');
						redirect('C_wisata/add');
						die();
					} else {
						$gambar2 = $this->upload->data('file_name');
					}
				}

				$data = array(
					'id_kategori' => $id_kategori,
					'nama_wisata' => $nama_wisata,
					'no_wa' => $no_wa,
					'alamat' => $alamat,
					'gambar' => $gambar,
					'gambar1' => $gambar1,
					'gambar2' => $gambar2,
					'deskripsi' => $deskripsi,


				);

				$this->M_Wisata->input_data($data, 'wisata');
				$this->session->set_flashdata('success', 'Success!!!');
				redirect('C_wisata/index');
				$this->load->view('Admin/wisata/index');
			}
		}
		

	}
	
	}
	
