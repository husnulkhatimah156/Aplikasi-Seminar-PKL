<?php
class M_jurusan extends CI_Model{

	function get_all_jurusan(){
		$hsl=$this->db->query("SELECT * FROM jurusan");
		return $hsl;
	}


	function hapus_jurusan($kode){
		$hsl=$this->db->query("DELETE FROM jurusan where id_jurusan='$kode'");
		return $hsl;
	}

	public function add_jurusan($data){
			$this->db->insert('jurusan', $data);
			return true;
		}

		public function get_jurusan_by_id($id){
			$query = $this->db->get_where('jurusan', array('id_jurusan' => $id));
			return $result = $query->row_array();
		}

		public function edit_jurusan($data, $id){
			$this->db->where('id_jurusan', $id);
			$this->db->update('jurusan', $data);
			return true;
		}

}	