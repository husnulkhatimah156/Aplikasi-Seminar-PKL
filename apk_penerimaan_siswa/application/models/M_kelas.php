<?php
class M_kelas extends CI_Model{

	function get_all_kelas(){
		$hsl=$this->db->query("SELECT * FROM kelas,semester where kelas.id_semester=semester.id_semester");
		return $hsl;
	}


	function hapus_kelas($kode){
		$hsl=$this->db->query("DELETE FROM kelas where id_kelas='$kode'");
		return $hsl;
	}

	public function add_kelas($data){
			$this->db->insert('kelas', $data);
			return true;
		}

		public function get_kelas_by_id($id){
			$query = $this->db->get_where('kelas', array('id_kelas' => $id));
			return $result = $query->row_array();
		}

		public function edit_kelas($data, $id){
			$this->db->where('id_kelas', $id);
			$this->db->update('kelas', $data);
			return true;
		}

}	