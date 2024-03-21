<?php
class M_siswa extends CI_Model{

	function get_all_siswa(){
		$hsl=$this->db->query("SELECT * FROM siswa where nama!='' order by id_siswa desc");
		return $hsl;
	}


	function hapus_siswa($kode){
		$hsl=$this->db->query("DELETE FROM siswa where id_siswa='$kode'");
		return $hsl;
	}

	public function add_siswa($data){
			$this->db->insert('siswa', $data);
			return true;
		}

		public function get_siswa_by_id($id){
			$query = $this->db->get_where('siswa', array('id_siswa' => $id));
			return $result = $query->row_array();
		}

		public function edit_siswa($data, $id){
			$this->db->where('id_siswa', $id);
			$this->db->update('siswa', $data);
			return true;
		}

}	