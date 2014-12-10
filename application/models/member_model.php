<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class member_model extends CI_Model{
    public function __construct() {
        parent::__construct();
    }
    
    function Input(){
        $this->db->set('member_username',$this->input->post('member_username'));
        $this->db->set('member_password',md5($this->input->post('member_password')));
        $this->db->set('member_nm',$this->input->post('member_nm'));
        $this->db->set('member_email',$this->input->post('member_email'));
        $this->db->set('member_tgllahir',  $this->input->post('member_tgllahir'));
        $this->db->set('member_tmplahir',$this->input->post('member_tmplahir'));
        $this->db->set('member_jeniskelamin',$this->input->post('member_jeniskelamin'));
        $this->db->set('member_tanggaljoin', now());
        $this->db->set('member_agama',$this->input->post('member_agama'));
        $this->db->set('member_alamat',$this->input->post('member_alamat'));
    }
    function saveMember($photo_path){
        $this->Input();
        $this->db->set('member_photo', $this->config->item("upload_path_photo").$photo_path);
        $this->db->insert('member');
        
    }
    
    function getMember(){
        $this->db->join('user_role','user_role_user_role_kode=user_role_kode');
        return $this->db->get('member');
    }
}

