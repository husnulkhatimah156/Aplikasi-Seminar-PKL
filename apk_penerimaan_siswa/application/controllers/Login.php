<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

		function __construct(){
		parent::__construct();
      
	}

	public function index()
	{
		$this->load->view('login');
	}

	function aksi_login(){

		$username = $this->input->post('username');
		$password = $this->input->post('password');

        $result = $this->db->get_where('pengguna', ['username' => $username])->row_array();
        $result2 = $this->db->get_where('siswa', ['username_ortu' => $username])->row_array();

        // jika usernya ada
        if ($result) {
                if (password_verify($password, $result['password'])) {
                    $data_session = array(
							'id_pengguna2' => $result['id_pengguna'],
							'username2' => $result['username'],
							'nama_lengkap' => $result['nama_lengkap'],
							'no_hp' => $result['no_hp'],
							'foto' => "",
							'level' => $result['level'],
							'email' => $result['email'],
						 	'status2' => "loggg"
						);
					$this->session->set_userdata($data_session);
					$this->session->set_flashdata('berhasil_login', ' ');
					redirect("dashboard");
                } else {
                    $this->session->set_flashdata('data_salah_login', 'Password Salah!');
					redirect("login");
                }
           
        }elseif ($result2) {
                if (password_verify($password, $result2['password_ortu'])) {
                    $data_session = array(
							'id_pengguna2' => $result2['id_siswa'],
							'username2' => $result2['username_ortu'],
							'nama_lengkap' => $result2['username_ortu'],
							'no_hp' => $result2['no_telp'],
							'no_wa_ortu' => $result2['no_wa_ortu'],
							'foto' => "",
							'level' => "Siswa",
							'email' => "",
						 	'status2' => "loggg"
						);
					$this->session->set_userdata($data_session);
					$this->session->set_flashdata('berhasil_login', ' ');
					redirect("dashboard");
                } else {
                    $this->session->set_flashdata('data_salah_login', 'Password Salah!');
					redirect("login");
                }
           
        }    else{
			$this->session->set_flashdata('gagal_login', 'Data Tidak Ditemukan!');
			redirect("login");
		}

	}
			public function logout(){
			$this->session->sess_destroy();
			redirect("home");
		}
}
