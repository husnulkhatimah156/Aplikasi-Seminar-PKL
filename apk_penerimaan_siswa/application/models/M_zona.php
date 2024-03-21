<?php
class M_zona extends CI_Model{

	function get_all_zona(){
		$hsl=$this->db->query("SELECT * FROM zona");
		return $hsl;
	}


	function hapus_zona($kode){
		$hsl=$this->db->query("DELETE FROM zona where id_zona='$kode'");
		return $hsl;
	}

	public function add_zona($data){
			$this->db->insert('zona', $data);
			return true;
		}

		public function get_zona_by_id($id){
			$query = $this->db->get_where('zona', array('id_zona' => $id));
			return $result = $query->row_array();
		}

		public function edit_zona($data, $id){
			$this->db->where('id_zona', $id);
			$this->db->update('zona', $data);
			return true;
		}

}	