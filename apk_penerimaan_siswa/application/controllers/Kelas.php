<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas extends CI_Controller {

		function __construct(){
		parent::__construct();
		if($this->session->userdata('status2') != "loggg"){
			redirect(base_url("login"));
		}
		$this->load->model('m_kelas');
	}

	public function index()
	{
		$x['data_kelas']=$this->m_kelas->get_all_kelas();
		$x['sidebar']="kelas";
		$this->load->view('header',$x);
		$this->load->view('sidebar');
		$this->load->view('kelas/kelas');
		$this->load->view('footer');
	}

	public function cetak()
	{	
		$x['data_kelas']=$this->m_kelas->get_all_kelas();
		$this->load->view('kelas/cetak',$x);
	}

		public function simpan_kelas()
	{
				$data = array(
								'id_semester' => $this->input->post('id_semester'),
								'nama_kelas' => $this->input->post('nama_kelas'),
							);
				
					$result = $this->m_kelas->add_kelas($data);
					if($result){
						$this->session->set_flashdata('berhasil_simpan', 'Record is Added Successfully!');
						redirect(base_url('kelas'));
					}
	}


	


		public function update_kelas()
	{
		$id = $this->input->post('id_kelas'); 
			

			$data = array(
								'id_semester' => $this->input->post('id_semester'),
								'nama_kelas' => $this->input->post('nama_kelas'),
							);
					
				
					$result = $this->m_kelas->edit_kelas($data,$id);
					if($result){
						$this->session->set_flashdata('berhasil_edit', 'Record is Added Successfully!');
						redirect(base_url('kelas'));
					}
	}

	function hapus_kelas(){
		$kode=$this->input->post('kode');
		$this->m_kelas->hapus_kelas($kode);
		echo $this->session->set_flashdata('berhasil_hapus','berhasil_hapus');
		redirect('kelas');
	}
}