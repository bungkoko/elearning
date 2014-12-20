<?php

class mapel_model extends CI_Model{
	function Input(){
		$this->db->set('mapel_kode',$this->input->post('mapel_kode'));
		$this->db->set('mapel_nm',$this->input->post('mapel_nm'));
	}

	function saveMapel(){
		$this->Input();
		return $this->db->insert('mapel');
	}

	function getOneMapel($kode){
		$this->db->where('mapel_kode',$kode);
		return $this->db->get('mapel');
	}

	function getAllMapel(){
		return $this->db->get('mapel');
	}
}
?>