<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class jurusan extends CI_Controller {

		function __construct(){
		parent::__construct();
		if($this->session->userdata('status2') != "loggg"){
			redirect(base_url("login"));
		}
		$this->load->model('m_jurusan');
	}

	public function index()
	{
		$x['data_jurusan']=$this->m_jurusan->get_all_jurusan();
		$x['sidebar']="jurusan";
		$this->load->view('header',$x);
		$this->load->view('sidebar');
		$this->load->view('jurusan/jurusan');
		$this->load->view('footer');
	}

	public function cetak()
	{	
		$x['data_jurusan']=$this->m_jurusan->get_all_jurusan();
		$this->load->view('jurusan/cetak',$x);
	}

		public function simpan_jurusan()
	{
				$data = array(
								'nama_jurusan' => $this->input->post('nama_jurusan'),
							);
				
					$result = $this->m_jurusan->add_jurusan($data);
					if($result){
						$this->session->set_flashdata('berhasil_simpan', 'Record is Added Successfully!');
						redirect(base_url('jurusan'));
					}
	}


	


		public function update_jurusan()
	{
		$id = $this->input->post('id_jurusan'); 
			

			$data = array(
								'nama_jurusan' => $this->input->post('nama_jurusan'),
							);
					
				
					$result = $this->m_jurusan->edit_jurusan($data,$id);
					if($result){
						$this->session->set_flashdata('berhasil_edit', 'Record is Added Successfully!');
						redirect(base_url('jurusan'));
					}
	}

	function hapus_jurusan(){
		$kode=$this->input->post('kode');
		$this->m_jurusan->hapus_jurusan($kode);
		echo $this->session->set_flashdata('berhasil_hapus','berhasil_hapus');
		redirect('jurusan');
	}
}