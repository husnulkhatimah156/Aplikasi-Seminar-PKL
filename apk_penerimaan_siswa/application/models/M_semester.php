<?php
class M_semester extends CI_Model{

	function get_all_semester(){
		$hsl=$this->db->query("SELECT * FROM semester");
		return $hsl;
	}


	function hapus_semester($kode){
		$hsl=$this->db->query("DELETE FROM semester where id_semester='$kode'");
		return $hsl;
	}

	public function add_semester($data){
			$this->db->insert('semester', $data);
			return true;
		}

		public function get_semester_by_id($id){
			$query = $this->db->get_where('semester', array('id_semester' => $id));
			return $result = $query->row_array();
		}

		public function edit_semester($data, $id){
			$this->db->where('id_semester', $id);
			$this->db->update('semester', $data);
			return true;
		}

}	