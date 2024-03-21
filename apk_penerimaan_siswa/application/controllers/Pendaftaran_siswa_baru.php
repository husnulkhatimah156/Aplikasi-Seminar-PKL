<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran_siswa_baru extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_siswa');
		$this->load->model('m_pengajuan_siswa_baru');
	}


	public function index()
	{
		$this->load->view('form_pendaftaran');
	}



		public function simpan_pendaftaran()
	{	

		if ($this->input->post('password_ortu')!=$this->input->post('password_ortu2')) {
			$this->session->set_flashdata('pw_salah', 'Record is Added Successfully!');
			redirect('home');
		}
		$username_ortu=$this->input->post('username_ortu');
		$cek_u=$this->db->query("SELECT * FROM siswa where username_ortu='$username_ortu'")->num_rows();
		if($cek_u>0){
			$this->session->set_flashdata('username_ada', 'Record is Added Successfully!');
			redirect('home');
		}
					$data_siswa['username_ortu'] = $this->input->post('username_ortu');
					

					$data_siswa['password_ortu'] = password_hash($this->input->post('password_ortu'), PASSWORD_DEFAULT);

				    $this->m_siswa->add_siswa($data_siswa);

					
				
				
				$this->session->set_flashdata('berhasil_simpan', 'Record is Added Successfully!');
				redirect(base_url('home'));
					
	}

	
}
