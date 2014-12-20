<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class guru_model extends CI_Model{
    public function __construct() {
        parent::__construct();
    }
    
    function Input(){
        $this->db->set('guru_nip',$this->input->post('guru_nip'));
        $this->db->set('guru_username',$this->input->post('guru_username'));
        $this->db->set('guru_password',md5($this->input->post('guru_password')));
        $this->db->set('guru_nm',$this->input->post('guru_nm'));
        $this->db->set('guru_email',$this->input->post('guru_email'));
        $this->db->set('guru_tgllahir',  $this->input->post('guru_tgllahir'));
        $this->db->set('guru_tmplahir',$this->input->post('guru_tmplahir'));
        $this->db->set('mapel_mapel_kode',$this->input->post('guru_mapel'));
        //$this->db->set('guru_jeniskelamin',$this->input->post('guru_jeniskelamin'));
        $this->db->set('guru_tanggaljoin', date('Y-m-d'));
        $this->db->set('guru_agama',$this->input->post('guru_agama'));
        $this->db->set('guru_alamat',$this->input->post('guru_alamat'));
        $this->db->set('guru_jabatan',$this->input->post('guru_jabatan'));
        $this->db->set('user_role_user_role_kode',$this->input->post('guru_status_akses'));
    }
    function saveguru($photo_path){
        $this->Input();
        $this->db->set('guru_photo', $this->config->item("upload_path_photo").$photo_path);
        return $this->db->insert('guru');
        
    }

    
    function getguru(){
        $this->db->join('user_role','user_role_user_role_kode=user_role_kode');
        $this->db->join('mapel','mapel_mapel_kode=mapel_kode');
        return $this->db->get('guru');
    }

    function Deleteguru($username){
        $this->db->where('guru_username',$username);
    
         $this->db->delete('guru');
    }

    function DeleteFile($file){
        $this->db->where('guru_photo',$username);
        $query = $this->db->get('guru');
        $row = $query->row();

        unlink('.'.$row->guru_photo);

    }
    function getOneguru($username){
        $this->db->join('user_role','user_role_kode=user_role_user_role_kode');
        $this->db->where('guru_username',$username);
        return $this->db->get('guru')->row();
    }



    
}

