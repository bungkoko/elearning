<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class kelas_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    function save() {
        $this->db->set('kelas_nm', $this->input->post('kelas_nm'));
        return $this->db->insert('kelas');
    }
    
    function getKelas(){
        return $this->db->get('kelas');
    }
    
    function delKelas($kd){
        $this->db->where('kelas_kode',$kd);
        return $this->db->delete('kelas');
    }

}
