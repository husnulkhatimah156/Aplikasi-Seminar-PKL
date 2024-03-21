<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class berkas_siswa extends CI_Controller {

		function __construct(){
		parent::__construct();
		if($this->session->userdata('status2') != "loggg"){
			redirect(base_url("login"));
		}
		$this->load->model('m_berkas_siswa');
	}

	public function index()
	{
		$x['data_berkas_siswa']=$this->m_berkas_siswa->get_all_berkas_siswa();
		$x['sidebar']="berkas_siswa";
		$this->load->view('header',$x);
		$this->load->view('sidebar');
		$this->load->view('berkas_siswa/berkas_siswa');
		$this->load->view('footer');
	}

	public function cetak()
	{	
		$x['data_berkas_siswa']=$this->m_berkas_siswa->get_all_berkas_siswa();
		$this->load->view('berkas_siswa/cetak',$x);
	}
	public function lengkap()
	{	
		$x['data_berkas_siswa']=$this->db->query("SELECT * FROM berkas_siswa,siswa where berkas_siswa.id_siswa=siswa.id_siswa AND status_berkas='LENGKAP'");
		$this->load->view('berkas_siswa/cetak_lengkap',$x);
	}
	public function tidaklengkap()
	{	
		$x['data_berkas_siswa']=$this->db->query("SELECT * FROM berkas_siswa,siswa where berkas_siswa.id_siswa=siswa.id_siswa AND status_berkas='TIDAK LENGKAP'");
		$this->load->view('berkas_siswa/cetak_tidak_lengkap',$x);
	}

		public function simpan_berkas_siswa()
	{
					$config['upload_path'] = './assets/image/';
					$config['allowed_types'] = 'pdf|doc|docx|jpg|jpeg|png';
					$config['encrypt_name'] = TRUE;
					$config['max_size']    = 0;
					$this->upload->initialize($config);
					$data = array();

					if(!empty($_FILES['file_akta']['name']))
					{
						if($this->upload->do_upload('file_akta')) {   
					        $dataInfo = $this->upload->data();
					        $data['file_akta'] = $dataInfo['file_name'];
					    }
					}

					if(!empty($_FILES['file_ijazah_tk']['name']))
					{
						if($this->upload->do_upload('file_ijazah_tk')) {   
					        $dataInfo = $this->upload->data();
					        $data['file_ijazah_tk'] = $dataInfo['file_name'];
					    }
					}

					if(!empty($_FILES['file_kartu_keluarga']['name']))
					{
						if($this->upload->do_upload('file_kartu_keluarga')) {   
					        $dataInfo = $this->upload->data();
					        $data['file_kartu_keluarga'] = $dataInfo['file_name'];
					    }
					}


				    $data['id_siswa'] = $this->input->post('id_siswa');
				    $data['nomor_akta'] = $this->input->post('nomor_akta');
				    $data['nomor_ijazah_tk'] = $this->input->post('nomor_ijazah_tk');
				    $data['nomor_kartu_keluarga'] = $this->input->post('nomor_kartu_keluarga');
				    $data['status_berkas'] = $this->input->post('status_berkas');
				    $data['tanggal_melengkapi'] = $this->input->post('tanggal_melengkapi');
				
					$result = $this->m_berkas_siswa->add_berkas_siswa($data);
					if($result){
						$this->session->set_flashdata('berhasil_simpan', 'Record is Added Successfully!');
						redirect(base_url('berkas_siswa'));
					}
	}


	


		public function update_berkas_siswa()
	{
		$id = $this->input->post('id_berkas_siswa'); 
			

			$config['upload_path'] = './assets/image/';
					$config['allowed_types'] = 'pdf|doc|docx|jpg|jpeg|png';
					$config['encrypt_name'] = TRUE;
					$config['max_size']    = 0;
					$this->upload->initialize($config);
					$data = array();

					if(!empty($_FILES['file_akta']['name']))
					{
						if($this->upload->do_upload('file_akta')) {   
					        $dataInfo = $this->upload->data();
					        $data['file_akta'] = $dataInfo['file_name'];
					    }
					}

					if(!empty($_FILES['file_ijazah_tk']['name']))
					{
						if($this->upload->do_upload('file_ijazah_tk')) {   
					        $dataInfo = $this->upload->data();
					        $data['file_ijazah_tk'] = $dataInfo['file_name'];
					    }
					}

					if(!empty($_FILES['file_kartu_keluarga']['name']))
					{
						if($this->upload->do_upload('file_kartu_keluarga')) {   
					        $dataInfo = $this->upload->data();
					        $data['file_kartu_keluarga'] = $dataInfo['file_name'];
					    }
					}


				    $data['id_siswa'] = $this->input->post('id_siswa');
				    $data['nomor_akta'] = $this->input->post('nomor_akta');
				    $data['nomor_ijazah_tk'] = $this->input->post('nomor_ijazah_tk');
				    $data['nomor_kartu_keluarga'] = $this->input->post('nomor_kartu_keluarga');
				    $data['status_berkas'] = $this->input->post('status_berkas');
				    $data['tanggal_melengkapi'] = $this->input->post('tanggal_melengkapi');
					
				
					$result = $this->m_berkas_siswa->edit_berkas_siswa($data,$id);
					if($result){
						$this->session->set_flashdata('berhasil_edit', 'Record is Added Successfully!');
						redirect(base_url('berkas_siswa'));
					}
	}

	function hapus_berkas_siswa(){
		$kode=$this->input->post('kode');
		$this->m_berkas_siswa->hapus_berkas_siswa($kode);
		echo $this->session->set_flashdata('berhasil_hapus','berhasil_hapus');
		redirect('berkas_siswa');
	}
}