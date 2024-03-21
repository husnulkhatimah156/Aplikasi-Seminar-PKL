<?php
class M_pengajuan_siswa_baru extends CI_Model{

	function get_all_pengajuan_siswa_baru(){
		$hsl=$this->db->query("SELECT * FROM pengajuan_siswa_baru,siswa where pengajuan_siswa_baru.id_siswa=siswa.id_siswa");
		return $hsl;
	}


	function hapus_pengajuan_siswa_baru($kode){
		$hsl=$this->db->query("DELETE FROM pengajuan_siswa_baru where id_pengajuan_siswa_baru='$kode'");
		return $hsl;
	}

	public function add_pengajuan_siswa_baru($data){
			$this->db->insert('pengajuan_siswa_baru', $data);
			return true;
		}

		public function get_pengajuan_siswa_baru_by_id($id){
			$query = $this->db->get_where('pengajuan_siswa_baru', array('id_pengajuan_siswa_baru' => $id));
			return $result = $query->row_array();
		}

		public function edit_pengajuan_siswa_baru($data, $id){
			$this->db->where('id_pengajuan_siswa_baru', $id);
			$this->db->update('pengajuan_siswa_baru', $data);
			return true;
		}

}	