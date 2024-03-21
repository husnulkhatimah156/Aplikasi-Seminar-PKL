<?php
class M_history_pembayaran extends CI_Model{

	function get_all_history_pembayaran(){
		if($this->session->userdata("level")=="Orang Tua / Wali Siswa"){
			$id_pengguna2=$this->session->userdata('id_pengguna2');
			$hsl=$this->db->query("SELECT * FROM history_pembayaran,siswa where history_pembayaran.id_siswa=siswa.id_siswa AND history_pembayaran.id_siswa='$id_pengguna2'");
		}else{
			$hsl=$this->db->query("SELECT * FROM history_pembayaran,siswa where history_pembayaran.id_siswa=siswa.id_siswa");
		}
		return $hsl;
	}


	function hapus_history_pembayaran($kode){
		$hsl=$this->db->query("DELETE FROM history_pembayaran where id_history_pembayaran='$kode'");
		return $hsl;
	}

	public function add_history_pembayaran($data){
			$this->db->insert('history_pembayaran', $data);
			return true;
		}

		public function get_history_pembayaran_by_id($id){
			$query = $this->db->get_where('history_pembayaran', array('id_history_pembayaran' => $id));
			return $result = $query->row_array();
		}

		public function edit_history_pembayaran($data, $id){
			$this->db->where('id_history_pembayaran', $id);
			$this->db->update('history_pembayaran', $data);
			return true;
		}

}	