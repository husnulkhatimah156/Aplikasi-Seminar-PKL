<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pindah_sekolah extends CI_Controller {

		function __construct(){
		parent::__construct();
		if($this->session->userdata('status2') != "loggg"){
			redirect(base_url("login"));
		}
		$this->load->model('m_pindah_sekolah');
	}

	public function index()
	{
		$x['data_pindah_sekolah']=$this->m_pindah_sekolah->get_all_pindah_sekolah();
		$x['sidebar']="pindah_sekolah";
		$this->load->view('header',$x);
		$this->load->view('sidebar');
		$this->load->view('pindah_sekolah/pindah_sekolah');
		$this->load->view('footer');
	}

	public function cetak()
	{	
		$x['data_pindah_sekolah']=$this->m_pindah_sekolah->get_all_pindah_sekolah();
		$this->load->view('pindah_sekolah/cetak',$x);
	}

	public function cetak2($id)
	{	
		$x['data_pindah_sekolah']=$this->db->query("SELECT * FROM pindah_sekolah,siswa where pindah_sekolah.id_siswa=siswa.id_siswa AND pindah_sekolah.id_pindah_sekolah='$id'")->row_array();
		$this->load->view('pindah_sekolah/cetak2',$x);
	}

	public function lihat()
	{
		$x['data_pindah_sekolah']=$this->m_pindah_sekolah->get_all_pindah_sekolah();
		$x['sidebar']="pindah_sekolah2";
		$this->load->view('header',$x);
		$this->load->view('sidebar');
		$this->load->view('pindah_sekolah/lihat');
		$this->load->view('footer');
	}

		public function filter()
	{	
		$tgl1=$this->input->post('tgl1');
		$tgl2=$this->input->post('tgl2');
		$x['tgl1']=$this->input->post('tgl1');
		$x['tgl2']=$this->input->post('tgl2');
		$x['data_pindah_sekolah']=$this->db->query("SELECT * FROM pindah_sekolah,siswa where pindah_sekolah.id_siswa=siswa.id_siswa AND date(tanggal_pindah) BETWEEN '$tgl1' AND '$tgl2'");
		$this->load->view('pindah_sekolah/cetak_filter',$x);
	}

		public function simpan_pindah_sekolah()
	{
				$data = array(
								'id_siswa' => $this->input->post('id_siswa'),
								'tanggal_pindah' => $this->input->post('tanggal_pindah'),
								'tujuan_pindah' => $this->input->post('tujuan_pindah'),
								'alasan_pindah' => $this->input->post('alasan_pindah'),
							);
				
					$result = $this->m_pindah_sekolah->add_pindah_sekolah($data);
					if($result){
						$this->session->set_flashdata('berhasil_simpan', 'Record is Added Successfully!');
						redirect(base_url('pindah_sekolah'));
					}
	}


	


		public function update_pindah_sekolah()
	{
		$id = $this->input->post('id_pindah_sekolah'); 
			

			$data = array(
								'id_siswa' => $this->input->post('id_siswa'),
								'tanggal_pindah' => $this->input->post('tanggal_pindah'),
								'tujuan_pindah' => $this->input->post('tujuan_pindah'),
								'alasan_pindah' => $this->input->post('alasan_pindah'),
							);
					
				
					$result = $this->m_pindah_sekolah->edit_pindah_sekolah($data,$id);
					if($result){
						$this->session->set_flashdata('berhasil_edit', 'Record is Added Successfully!');
						redirect(base_url('pindah_sekolah'));
					}
	}

	function hapus_pindah_sekolah(){
		$kode=$this->input->post('kode');
		$this->m_pindah_sekolah->hapus_pindah_sekolah($kode);
		echo $this->session->set_flashdata('berhasil_hapus','berhasil_hapus');
		redirect('pindah_sekolah');
	}
}