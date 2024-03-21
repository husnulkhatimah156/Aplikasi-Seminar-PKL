<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

		function __construct(){
		parent::__construct();
		if($this->session->userdata('status2') != "loggg"){
			redirect(base_url("login"));
		}
		$this->load->model('m_siswa');
	}

	public function index()
	{
		$x['data_siswa']=$this->m_siswa->get_all_siswa();
		$x['sidebar']="siswa";
		$this->load->view('header',$x);
		$this->load->view('sidebar');
		$this->load->view('siswa/siswa');
		$this->load->view('footer');
	}

	public function lihat()
	{
		$x['data_siswa']=$this->m_siswa->get_all_siswa();
		$x['sidebar']="siswa2";
		$this->load->view('header',$x);
		$this->load->view('sidebar');
		$this->load->view('siswa/lihat');
		$this->load->view('footer');
	}

	public function lihat2()
	{
		$x['data_siswa']=$this->m_siswa->get_all_siswa();
		$x['sidebar']="siswa3";
		$this->load->view('header',$x);
		$this->load->view('sidebar');
		$this->load->view('siswa/lihat2');
		$this->load->view('footer');
	}

	public function lihat3()
	{
		$x['data_siswa']=$this->m_siswa->get_all_siswa();
		$x['sidebar']="siswa4";
		$this->load->view('header',$x);
		$this->load->view('sidebar');
		$this->load->view('siswa/lihat3');
		$this->load->view('footer');
	}

	public function lihat4()
	{
		$x['data_siswa']=$this->m_siswa->get_all_siswa();
		$x['sidebar']="siswa5";
		$this->load->view('header',$x);
		$this->load->view('sidebar');
		$this->load->view('siswa/lihat4');
		$this->load->view('footer');
	}

	public function cetak()
	{	
		$x['data_siswa']=$this->m_siswa->get_all_siswa();
		$this->load->view('siswa/cetak',$x);
	}

	public function cetak2($id)
	{	
		$x['data_siswa']=$this->m_siswa->get_siswa_by_id($id);
		$this->load->view('siswa/cetak_satuan',$x);
	}

	public function filter()
	{	
		$tgl1=$this->input->post('tgl1');
		$tgl2=$this->input->post('tgl2');
		$id_jurusan=$this->input->post('id_jurusan');
		$x['tgl1']=$this->input->post('tgl1');
		$x['tgl2']=$this->input->post('tgl2');
		$x['id_jurusan']=$this->input->post('id_jurusan');
		if ($id_jurusan=="SEMUA") {
			$x['data_siswa']=$this->db->query("SELECT * FROM siswa where nama!='' AND date(tanggal_jam_mendaftar) BETWEEN '$tgl1' AND '$tgl2'");
		}else{
			$x['data_siswa']=$this->db->query("SELECT * FROM siswa where id_jurusan='$id_jurusan' AND nama!='' AND date(tanggal_jam_mendaftar) BETWEEN '$tgl1' AND '$tgl2'");	
		}
		
		$this->load->view('siswa/cetak_filter',$x);
	}

	public function filter2()
	{	
		$tgl1=$this->input->post('tgl1');
		$tgl2=$this->input->post('tgl2');
		$x['tgl1']=$this->input->post('tgl1');
		$x['tgl2']=$this->input->post('tgl2');
		$x['data_siswa']=$this->db->query("SELECT * FROM siswa where nama!='' AND status_pendaftaran='SISWA MASUK' AND date(tanggal_jam_mendaftar) BETWEEN '$tgl1' AND '$tgl2'");
		$this->load->view('siswa/cetak_filter2',$x);
	}

	public function filter3()
	{	
		$tgl1=$this->input->post('tgl1');
		$tgl2=$this->input->post('tgl2');
		$x['tgl1']=$this->input->post('tgl1');
		$x['tgl2']=$this->input->post('tgl2');
		$x['data_siswa']=$this->db->query("SELECT * FROM siswa where nama!='' AND status_pendaftaran='SISWA PINDAHAN' AND date(tanggal_jam_mendaftar) BETWEEN '$tgl1' AND '$tgl2'");
		$this->load->view('siswa/cetak_filter3',$x);
	}

	public function filter4()
	{	
		$x['tahun']=$this->input->post('tahun');
		$this->load->view('siswa/cetak_grafik',$x);
	}

	public function masuk()
	{	
		$x['data_siswa']=$this->db->query("SELECT * FROM siswa where nama!='' AND status_pendaftaran='SISWA MASUK'");
		$this->load->view('siswa/cetak2',$x);
	}
	public function pindahan()
	{	
		$x['data_siswa']=$this->db->query("SELECT * FROM siswa where nama!='' AND status_pendaftaran='SISWA PINDAHAN'");
		$this->load->view('siswa/cetak3',$x);
	}

		public function simpan_siswa()
	{
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
				    



					$config['upload_path'] = './assets/image/';
					$config['allowed_types'] = 'pdf|doc|docx|jpg|jpeg|png';
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


			
				
					$result = $this->m_siswa->add_siswa($data_siswa);
					if($result){
						$this->session->set_flashdata('berhasil_simpan', 'Record is Added Successfully!');
						redirect(base_url('siswa'));
					}
	}


	


		public function update_siswa()
	{
		$id = $this->input->post('id_siswa'); 
			

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

				    



					$config['upload_path'] = './assets/image/';
					$config['allowed_types'] = 'pdf|doc|docx|jpg|jpeg|png';
					$config['encrypt_name'] = TRUE;
					$config['max_size']    = 0;
					$this->upload->initialize($config);
					//$data = array();

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
					
				
					$result = $this->m_siswa->edit_siswa($data_siswa,$id);
					if($result){
						$this->session->set_flashdata('berhasil_edit', 'Record is Added Successfully!');
						redirect(base_url('siswa'));
					}
	}

	function hapus_siswa(){
		$kode=$this->input->post('kode');
		$this->m_siswa->hapus_siswa($kode);
		echo $this->session->set_flashdata('berhasil_hapus','berhasil_hapus');
		redirect('siswa');
	}
}