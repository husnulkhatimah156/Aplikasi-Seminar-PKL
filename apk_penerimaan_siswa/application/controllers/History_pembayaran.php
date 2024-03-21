<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class History_pembayaran extends CI_Controller {

		function __construct(){
		parent::__construct();
		if($this->session->userdata('status2') != "loggg"){
			redirect(base_url("login"));
		}
		$this->load->model('m_history_pembayaran');
	}

	public function index()
	{
		$x['data_history_pembayaran']=$this->m_history_pembayaran->get_all_history_pembayaran();
		$x['sidebar']="history_pembayaran";
		$this->load->view('header',$x);
		$this->load->view('sidebar');
		$this->load->view('history_pembayaran/history_pembayaran');
		$this->load->view('footer');
	}

	public function lihat()
	{
		$x['data_history_pembayaran']=$this->m_history_pembayaran->get_all_history_pembayaran();
		$x['sidebar']="history_pembayaran2";
		$this->load->view('header',$x);
		$this->load->view('sidebar');
		$this->load->view('history_pembayaran/lihat');
		$this->load->view('footer');
	}

		public function filter()
	{	
		$tgl1=$this->input->post('tgl1');
		$tgl2=$this->input->post('tgl2');
		$x['tgl1']=$this->input->post('tgl1');
		$x['tgl2']=$this->input->post('tgl2');
		$x['data_history_pembayaran']=$this->db->query("SELECT * FROM history_pembayaran,siswa where history_pembayaran.id_siswa=siswa.id_siswa AND date(tanggal_transfer) BETWEEN '$tgl1' AND '$tgl2'");
		$this->load->view('history_pembayaran/cetak_filter',$x);
	}

	public function cetak()
	{	
		$x['data_history_pembayaran']=$this->m_history_pembayaran->get_all_history_pembayaran();
		$this->load->view('history_pembayaran/cetak',$x);
	}

		public function simpan_history_pembayaran()
	{

		$nominal_transfer=str_replace(".", "", $this->input->post('nominal_transfer'));

					$config['upload_path'] = './assets/image/';
			        $config['allowed_types'] = 'jpg|png|jpeg';
			        $config['encrypt_name'] = TRUE;
			        $config['max_size']    = 0;
			        $this->upload->initialize($config);
			        if(!empty($_FILES['bukti_transfer']['name']))
			        {
			        if($this->upload->do_upload('bukti_transfer'))
			            {
								$gbr = $this->upload->data();
								$config['image_library']='gd2';
								$config['source_image']='./assets/image/'.$gbr['file_name'];
								$config['create_thumb']= FALSE;
								$config['maintain_ratio']= FALSE;
								$config['quality']='60%';
								$config['width']= 500;
			                	$config['height']= 400;
								$config['new_image']= './assets/image/'.$gbr['file_name'];
								$this->load->library('image_lib', $config);
								$this->image_lib->resize();
			                    $dok=$gbr['file_name'];
						


								$data = array(
								'id_siswa' => $this->input->post('id_siswa'),
								'tanggal_transfer' => $this->input->post('tanggal_transfer'),
								'nominal_transfer' => $nominal_transfer,
								'bukti_transfer' => $dok,
							);
			                    
			                    

			            }else{
			                $this->session->set_flashdata('gagal_up', 'Record is Added Successfully!');
			                redirect('pengguna');
			            }
			        }
			        else{

			      $data = array(
								'id_siswa' => $this->input->post('id_siswa'),
								'tanggal_transfer' => $this->input->post('tanggal_transfer'),
								'nominal_transfer' => $nominal_transfer,
							);
			            
			        }


				
				
					$result = $this->m_history_pembayaran->add_history_pembayaran($data);
					if($result){
						$this->session->set_flashdata('berhasil_simpan', 'Record is Added Successfully!');
						redirect(base_url('history_pembayaran'));
					}
	}


	


		public function update_history_pembayaran()
	{
		$id = $this->input->post('id_history_pembayaran'); 
			
		$nominal_transfer=str_replace(".", "", $this->input->post('nominal_transfer'));
		
			$config['upload_path'] = './assets/image/';
			        $config['allowed_types'] = 'jpg|png|jpeg';
			        $config['encrypt_name'] = TRUE;
			        $config['max_size']    = 0;
			        $this->upload->initialize($config);
			        if(!empty($_FILES['bukti_transfer']['name']))
			        {
			        if($this->upload->do_upload('bukti_transfer'))
			            {
								$gbr = $this->upload->data();
								$config['image_library']='gd2';
								$config['source_image']='./assets/image/'.$gbr['file_name'];
								$config['create_thumb']= FALSE;
								$config['maintain_ratio']= FALSE;
								$config['quality']='60%';
								$config['width']= 500;
			                	$config['height']= 400;
								$config['new_image']= './assets/image/'.$gbr['file_name'];
								$this->load->library('image_lib', $config);
								$this->image_lib->resize();
			                    $dok=$gbr['file_name'];
						


								$data = array(
								'id_siswa' => $this->input->post('id_siswa'),
								'tanggal_transfer' => $this->input->post('tanggal_transfer'),
								'nominal_transfer' => $nominal_transfer,
								'bukti_transfer' => $dok,
							);
			                    
			                    

			            }else{
			                $this->session->set_flashdata('gagal_up', 'Record is Added Successfully!');
			                redirect('pengguna');
			            }
			        }
			        else{

			      $data = array(
								'id_siswa' => $this->input->post('id_siswa'),
								'tanggal_transfer' => $this->input->post('tanggal_transfer'),
								'nominal_transfer' => $nominal_transfer,
							);
			            
			        }
					
				
					$result = $this->m_history_pembayaran->edit_history_pembayaran($data,$id);
					if($result){
						$this->session->set_flashdata('berhasil_edit', 'Record is Added Successfully!');
						redirect(base_url('history_pembayaran'));
					}
	}

	function hapus_history_pembayaran(){
		$kode=$this->input->post('kode');
		$this->m_history_pembayaran->hapus_history_pembayaran($kode);
		echo $this->session->set_flashdata('berhasil_hapus','berhasil_hapus');
		redirect('history_pembayaran');
	}
}