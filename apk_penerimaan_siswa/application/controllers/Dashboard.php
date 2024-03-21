<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct(){
		parent::__construct();
		if($this->session->userdata('status2') != "loggg"){
			redirect(base_url("login"));
		}
		$this->load->model('m_data');
		$this->load->model('m_siswa');
		$this->load->model('m_pengajuan_siswa_baru');
		
	}

	public function index()
	{

		$x['sidebar']="dashboard";
		$this->load->view('header',$x);
		$this->load->view('sidebar');
		if($this->session->userdata("level")=="Administrator"){
			$this->load->view('dashboard');
		}else{
			$this->load->view('dashboard2');
		}
	
		
		$this->load->view('footer');
	}

	public function update()
	{
					$id_siswa=$this->input->post('id_siswa');
				    $cek_=$this->db->query("SELECT * FROM siswa where id_siswa='$id_siswa'")->row_array();

				    
					
					$data_siswa['id_jurusan'] = $this->input->post('id_jurusan');
					$data_siswa['nisn'] = $this->input->post('nisn');
					$data_siswa['status_pendaftaran'] = $this->input->post('status_pendaftaran');
					$data_siswa['jalur_masuk'] = $this->input->post('jalur_masuk');
					$data_siswa['sekolah_asal'] = $this->input->post('sekolah_asal');
					$data_siswa['nama'] = $this->input->post('nama');
				    $data_siswa['tempat_lahir'] = $this->input->post('tempat_lahir');
				    $data_siswa['tanggal_lahir'] = $this->input->post('tanggal_lahir');
				    $data_siswa['jenis_kelamin'] = $this->input->post('jenis_kelamin');
				    $data_siswa['alamat'] = $this->input->post('alamat');
				    $data_siswa['agama'] = $this->input->post('agama');
				    $data_siswa['nama_ayah'] = $this->input->post('nama_ayah');
				    $data_siswa['nama_ibu'] = $this->input->post('nama_ibu');
				    $data_siswa['alamat_ortu'] = $this->input->post('alamat_ortu');
				    $data_siswa['pekerjaan_ayah'] = $this->input->post('pekerjaan_ayah');
				    $data_siswa['pekerjaan_ibu'] = $this->input->post('pekerjaan_ibu');
				    $data_siswa['no_telp'] = $this->input->post('no_telp');
				    $data_siswa['rata_rata_nilai'] = $this->input->post('rata_rata_nilai');

				    



					$config['upload_path'] = './assets/image/';
					$config['allowed_types'] = 'pdf|doc|docx|jpg|jpeg|png|rar|zip';
					$config['encrypt_name'] = TRUE;
					$config['max_size']    = 0;
					$this->upload->initialize($config);
					//$data = array();

					if(!empty($_FILES['berkas_pendukung']['name']))
					{
						if($this->upload->do_upload('berkas_pendukung')) {   
					        $dataInfo = $this->upload->data();
					        $data_siswa['berkas_pendukung'] = $dataInfo['file_name'];
					    }
					}

					

					if(!empty($_FILES['file_akta']['name']))
					{
						if($this->upload->do_upload('file_akta')) {   
					        $dataInfo = $this->upload->data();
					        $data_siswa['file_akta'] = $dataInfo['file_name'];
					    }
					}

					if(!empty($_FILES['file_ijazah']['name']))
					{
						if($this->upload->do_upload('file_ijazah')) {   
					        $dataInfo = $this->upload->data();
					        $data_siswa['file_ijazah'] = $dataInfo['file_name'];
					    }
					}

					if(!empty($_FILES['file_kartu_keluarga']['name']))
					{
						if($this->upload->do_upload('file_kartu_keluarga')) {   
					        $dataInfo = $this->upload->data();
					        $data_siswa['file_kartu_keluarga'] = $dataInfo['file_name'];
					    }
					}


				    $data_siswa['nomor_akta'] = $this->input->post('nomor_akta');
				    $data_siswa['nomor_ijazah'] = $this->input->post('nomor_ijazah');
				    $data_siswa['nomor_kartu_keluarga'] = $this->input->post('nomor_kartu_keluarga');

				  	 $result = $this->m_siswa->edit_siswa($data_siswa,$id_siswa);


				    $data2['id_siswa'] = $id_siswa;
				    $data2['tanggal_pengajuan'] = date('Y-m-d');
				    $data2['status_pengajuan'] = "MENUNGGU KONFIRMASI";
				    if (empty($cek_['nama'])) {
				    	$this->m_pengajuan_siswa_baru->add_pengajuan_siswa_baru($data2);
				    }
				    

				    $this->session->set_flashdata('berhasil_edit', 'Record is Added Successfully!');
					redirect(base_url('dashboard'));
	}

	
}
