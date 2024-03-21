<?php
class M_berkas_siswa extends CI_Model{

	function get_all_berkas_siswa(){
		$hsl=$this->db->query("SELECT * FROM berkas_siswa,siswa where berkas_siswa.id_siswa=siswa.id_siswa");
		return $hsl;
	}


	function hapus_berkas_siswa($kode){
		$hsl=$this->db->query("DELETE FROM berkas_siswa where id_berkas_siswa='$kode'");
		return $hsl;
	}

	public function add_berkas_siswa($data){
			$this->db->insert('berkas_siswa', $data);
			return true;
		}

		public function get_berkas_siswa_by_id($id){
			$query = $this->db->get_where('berkas_siswa', array('id_berkas_siswa' => $id));
			return $result = $query->row_array();
		}

		public function edit_berkas_siswa($data, $id){
			$this->db->where('id_berkas_siswa', $id);
			$this->db->update('berkas_siswa', $data);
			return true;
		}

}	