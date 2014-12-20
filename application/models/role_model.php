<?php 

class role_model extends CI_Model{

	function getRole(){
		return $this->db->get('user_role');
	}

}
?>