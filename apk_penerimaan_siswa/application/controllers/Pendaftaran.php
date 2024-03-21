<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_siswa');
		$this->load->model('m_pengajuan_siswa_baru');
	}


	public function index()
	{
		$this->load->view('head');
		$this->load->view('pendaftaran');
	}




	
}
