<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Semester extends CI_Controller {

		function __construct(){
		parent::__construct();
		if($this->session->userdata('status2') != "loggg"){
			redirect(base_url("login"));
		}
		$this->load->model('m_semester');
	}

	public function index()
	{
		$x['data_semester']=$this->m_semester->get_all_semester();
		$x['sidebar']="semester";
		$this->load->view('header',$x);
		$this->load->view('sidebar');
		$this->load->view('semester/semester');
		$this->load->view('footer');
	}

	public function cetak()
	{	
		$x['data_semester']=$this->m_semester->get_all_semester();
		$this->load->view('semester/cetak',$x);
	}

		public function simpan_semester()
	{
				$data = array(
								'nama_semeser' => $this->input->post('nama_semeser'),
								'tahun_ajaran' => $this->input->post('tahun_ajaran'),
								'status_semester' => $this->input->post('status_semester'),
							);
				
					$result = $this->m_semester->add_semester($data);
					if($result){
						$this->session->set_flashdata('berhasil_simpan', 'Record is Added Successfully!');
						redirect(base_url('semester'));
					}
	}


	


		public function update_semester()
	{
		$id = $this->input->post('id_semester'); 
			

			$data = array(
								'nama_semeser' => $this->input->post('nama_semeser'),
								'tahun_ajaran' => $this->input->post('tahun_ajaran'),
								'status_semester' => $this->input->post('status_semester'),
							);
					
				
					$result = $this->m_semester->edit_semester($data,$id);
					if($result){
						$this->session->set_flashdata('berhasil_edit', 'Record is Added Successfully!');
						redirect(base_url('semester'));
					}
	}

	function hapus_semester(){
		$kode=$this->input->post('kode');
		$this->m_semester->hapus_semester($kode);
		echo $this->session->set_flashdata('berhasil_hapus','berhasil_hapus');
		redirect('semester');
	}
}