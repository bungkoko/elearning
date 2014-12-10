<?php

class User_library {

	function __construct() {
        $this->ci =& get_instance();
        $this->base_url = base_url();
    }

	public function is_logged() {
		$user_id = $this->ci->session->userdata('user_id');
		$user_display_name = $this->ci->session->userdata('user_display_name');
                $user_role=$this->ci->session->userdata('user_role');
		$user_logged = $this->ci->session->userdata('user_logged');
		
		if(!$user_id || !$user_display_name || !$user_logged||!$user_role):
			return false;
		else:
			$this->ci->db->join('user_role', 'user_role_user_role_kode = user_role_kode');
			$this->ci->db->where('member_username', $user_id);
			//$this->ci->db->where('user_approved', 'y');
			$result =  $this->ci->db->get('member')->num_rows();
			if ($result == 0):
				return false;
			else :
				return true;
			endif;
		endif;
	}
	
	public function user_type(){
		$user_id = $this->ci->session->userdata('user_id');
		$user_display_name = $this->ci->session->userdata('user_display_name');
		$user_logged = $this->ci->session->userdata('user_logged');
		
		if(!$user_id || !$user_display_name || !$user_logged):
			return false;
		else :
			$this->ci->db->join('user_role', 'user_role_user_role_kode = user_role_kode');
			$this->ci->db->where('member_username', $user_id);
                        //$this->ci->db->where('user_approved', 'y');
			return $this->ci->db->get('member')->row()->user_role_type;
		endif;
	}

	public function getUserdata() {
		$user_id = $this->ci->session->userdata('user_id');
		
		$this->ci->db->where('member_username', $userid);
		return $this->ci->db->get('user')->row();
	}

	
}
