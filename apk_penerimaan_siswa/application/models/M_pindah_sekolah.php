<?php
class M_pindah_sekolah extends CI_Model{

	function get_all_pindah_sekolah(){
		$hsl=$this->db->query("SELECT * FROM pindah_sekolah,siswa where pindah_sekolah.id_siswa=siswa.id_siswa");
		return $hsl;
	}


	function hapus_pindah_sekolah($kode){
		$hsl=$this->db->query("DELETE FROM pindah_sekolah where id_pindah_sekolah='$kode'");
		return $hsl;
	}

	public function add_pindah_sekolah($data){
			$this->db->insert('pindah_sekolah', $data);
			return true;
		}

		public function get_pindah_sekolah_by_id($id){
			$query = $this->db->get_where('pindah_sekolah', array('id_pindah_sekolah' => $id));
			return $result = $query->row_array();
		}

		public function edit_pindah_sekolah($data, $id){
			$this->db->where('id_pindah_sekolah', $id);
			$this->db->update('pindah_sekolah', $data);
			return true;
		}

}	