<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengajuan_siswa_baru extends CI_Controller {

		function __construct(){
		parent::__construct();
		if($this->session->userdata('status2') != "loggg"){
			redirect(base_url("login"));
		}
		$this->load->model('m_pengajuan_siswa_baru');
	}

	public function index()
	{
		$x['data_pengajuan_siswa_baru']=$this->m_pengajuan_siswa_baru->get_all_pengajuan_siswa_baru();
		$x['sidebar']="pengajuan_siswa_baru";
		$this->load->view('header',$x);
		$this->load->view('sidebar');
		$this->load->view('pengajuan_siswa_baru/pengajuan_siswa_baru');
		$this->load->view('footer');
	}

	public function lihat()
	{
		$x['data_pengajuan_siswa_baru']=$this->m_pengajuan_siswa_baru->get_all_pengajuan_siswa_baru();
		$x['sidebar']="pengajuan_siswa_baru2";
		$this->load->view('header',$x);
		$this->load->view('sidebar');
		$this->load->view('pengajuan_siswa_baru/lihat');
		$this->load->view('footer');
	}

	public function lihat2()
	{
		$x['data_pengajuan_siswa_baru']=$this->m_pengajuan_siswa_baru->get_all_pengajuan_siswa_baru();
		$x['sidebar']="pengajuan_siswa_baru3";
		$this->load->view('header',$x);
		$this->load->view('sidebar');
		$this->load->view('pengajuan_siswa_baru/lihat2');
		$this->load->view('footer');
	}

	public function lihat3()
	{
		$x['data_pengajuan_siswa_baru']=$this->m_pengajuan_siswa_baru->get_all_pengajuan_siswa_baru();
		$x['sidebar']="pengajuan_siswa_baru4";
		$this->load->view('header',$x);
		$this->load->view('sidebar');
		$this->load->view('pengajuan_siswa_baru/lihat3');
		$this->load->view('footer');
	}

	public function cetak()
	{	
		$x['data_pengajuan_siswa_baru']=$this->m_pengajuan_siswa_baru->get_all_pengajuan_siswa_baru();
		$this->load->view('pengajuan_siswa_baru/cetak',$x);
	}

	public function diterima()
	{	
		$x['data_pengajuan_siswa_baru']=$this->db->query("SELECT * FROM pengajuan_siswa_baru,siswa where pengajuan_siswa_baru.id_siswa=siswa.id_siswa AND status_pengajuan='DITERIMA'");
		$this->load->view('pengajuan_siswa_baru/cetak_diterima',$x);
	}

		public function filter()
	{	
		$tgl1=$this->input->post('tgl1');
		$tgl2=$this->input->post('tgl2');
		$x['tgl1']=$this->input->post('tgl1');
		$x['tgl2']=$this->input->post('tgl2');
		$x['data_pengajuan_siswa_baru']=$this->db->query("SELECT * FROM pengajuan_siswa_baru,siswa where pengajuan_siswa_baru.id_siswa=siswa.id_siswa AND status_pengajuan='DITERIMA' AND date(tanggal_pengajuan) BETWEEN '$tgl1' AND '$tgl2'");
		$this->load->view('pengajuan_siswa_baru/cetak_filter',$x);
	}
	
	public function ditolak()
	{	
		$x['data_pengajuan_siswa_baru']=$this->db->query("SELECT * FROM pengajuan_siswa_baru,siswa where pengajuan_siswa_baru.id_siswa=siswa.id_siswa AND status_pengajuan='DITOLAK'");
		$this->load->view('pengajuan_siswa_baru/cetak_ditolak',$x);
	}
	
	

		public function filter2()
	{	
		$tgl1=$this->input->post('tgl1');
		$tgl2=$this->input->post('tgl2');
		$x['tgl1']=$this->input->post('tgl1');
		$x['tgl2']=$this->input->post('tgl2');
		$x['data_pengajuan_siswa_baru']=$this->db->query("SELECT * FROM pengajuan_siswa_baru,siswa where pengajuan_siswa_baru.id_siswa=siswa.id_siswa AND status_pengajuan='DITOLAK' AND date(tanggal_pengajuan) BETWEEN '$tgl1' AND '$tgl2'");
		$this->load->view('pengajuan_siswa_baru/cetak_filter2',$x);
	}

	public function ranking()
	{	
		$x['data_pengajuan_siswa_baru']=$this->db->query("SELECT * FROM pengajuan_siswa_baru,siswa where pengajuan_siswa_baru.id_siswa=siswa.id_siswa ORDER by rata_rata_nilai DESC ");
		$this->load->view('pengajuan_siswa_baru/cetak_rank',$x);
	}

		public function filter3()
	{	
		$tgl1=$this->input->post('tgl1');
		$tgl2=$this->input->post('tgl2');
		$x['tgl1']=$this->input->post('tgl1');
		$x['tgl2']=$this->input->post('tgl2');
		$x['data_pengajuan_siswa_baru']=$this->db->query("SELECT * FROM pengajuan_siswa_baru,siswa where pengajuan_siswa_baru.id_siswa=siswa.id_siswa AND date(tanggal_pengajuan) BETWEEN '$tgl1' AND '$tgl2' ORDER by rata_rata_nilai DESC ");
		
		$this->load->view('pengajuan_siswa_baru/cetak_filter3',$x);
	}

		public function simpan_pengajuan_siswa_baru()
	{
				$data = array(
								'id_siswa' => $this->input->post('id_siswa'),
								'tanggal_pengajuan' => $this->input->post('tanggal_pengajuan'),
								'status_pengajuan' => $this->input->post('status_pengajuan'),
								'keterangan_pengajuan' => $this->input->post('keterangan_pengajuan'),
							);
				
					$result = $this->m_pengajuan_siswa_baru->add_pengajuan_siswa_baru($data);
					if($result){
						$this->session->set_flashdata('berhasil_simpan', 'Record is Added Successfully!');
						redirect(base_url('pengajuan_siswa_baru'));
					}
	}


	


		public function update_pengajuan_siswa_baru()
	{
		$id = $this->input->post('id_pengajuan_siswa_baru'); 
		$id_siswa=$this->input->post('id_siswa');
		$status_pengajuan=$this->input->post('status_pengajuan');
		$keterangan_pengajuan=$this->input->post('keterangan_pengajuan');
		$data_siswa=$this->db->query("SELECT * FROM siswa where id_siswa='$id_siswa'")->row_array();
		
// 		$no_hp=$data_siswa['no_telp'];
// 		$nama=$data_siswa['nama'];
// 			$userkey = 'fbb13a7909ae';
// 			$passkey = '748411ab05590d3e375c4b66';
// 			$telepon = $no_hp;

// 			$message = "Yth. Bpk/Ibu Orang Tua dari $nama
// Pengajuan Untuk Penerimaan Siswa Baru Anda telah di $status_pengajuan,
// Catatan Admin : $keterangan_pengajuan";

// 			$url = 'https://console.zenziva.net/wareguler/api/sendWA/';
// 			$curlHandle = curl_init();
// 			curl_setopt($curlHandle, CURLOPT_URL, $url);
// 			curl_setopt($curlHandle, CURLOPT_HEADER, 0);
// 			curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, 1);
// 			curl_setopt($curlHandle, CURLOPT_SSL_VERIFYHOST, 2);
// 			curl_setopt($curlHandle, CURLOPT_SSL_VERIFYPEER, 0);
// 			curl_setopt($curlHandle, CURLOPT_TIMEOUT,30);
// 			curl_setopt($curlHandle, CURLOPT_POST, 1);
// 			curl_setopt($curlHandle, CURLOPT_POSTFIELDS, array(
// 			    'userkey' => $userkey,
// 			    'passkey' => $passkey,
// 			    'to' => $telepon,
// 			    'message' => $message
// 			));
// 			$results = json_decode(curl_exec($curlHandle), true);
// 			curl_close($curlHandle);

			$data = array(
								'id_siswa' => $this->input->post('id_siswa'),
								'tanggal_pengajuan' => $this->input->post('tanggal_pengajuan'),
								'status_pengajuan' => $this->input->post('status_pengajuan'),
								'keterangan_pengajuan' => $this->input->post('keterangan_pengajuan'),
							);
					
				
					$result = $this->m_pengajuan_siswa_baru->edit_pengajuan_siswa_baru($data,$id);
					if($result){
						$this->session->set_flashdata('berhasil_edit', 'Record is Added Successfully!');
						redirect(base_url('pengajuan_siswa_baru'));
					}
	}

	function hapus_pengajuan_siswa_baru(){
		$kode=$this->input->post('kode');
		$this->m_pengajuan_siswa_baru->hapus_pengajuan_siswa_baru($kode);
		echo $this->session->set_flashdata('berhasil_hapus','berhasil_hapus');
		redirect('pengajuan_siswa_baru');
	}
}