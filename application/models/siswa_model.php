<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class siswa_model extends CI_Model{
    public function __construct() {
        parent::__construct();
    }
    
    function Input(){
        $this->db->set('siswa_nis',$this->input->post('siswa_nis'));
        $this->db->set('siswa_username',$this->input->post('siswa_username'));
        $this->db->set('siswa_password',md5($this->input->post('siswa_password')));
        $this->db->set('siswa_nm',$this->input->post('siswa_nm'));
        $this->db->set('siswa_email',$this->input->post('siswa_email'));
        $this->db->set('siswa_tgllahir',  $this->input->post('tahun').'-'.$this->input->post('bulan').'-'.$this->input->post('tanggal'));
        $this->db->set('siswa_tmplahir',$this->input->post('siswa_tmplahir'));
        $this->db->set('siswa_jeniskelamin',$this->input->post('siswa_jeniskelamin'));
        $this->db->set('siswa_tanggaljoin', date('Y-m-d'));
        $this->db->set('siswa_agama',$this->input->post('siswa_agama'));
        $this->db->set('siswa_alamat',$this->input->post('siswa_alamat'));
        $this->db->set('siswa_about',$this->input->post('siswa_about'));
        $this->db->set('user_role_user_role_kode','3');
        $this->db->set('kelas_kelas_kode',$this->input->post('siswa_kelas'));
    }
    function savesiswa($photo_path){
        $this->Input();
        $this->db->set('siswa_photo', $this->config->item("upload_path_photo").$photo_path);
        return $this->db->insert('siswa');
        
    }

    
    function getsiswa(){
        $this->db->join('user_role','user_role_user_role_kode=user_role_kode');
        return $this->db->get('siswa');
    }

    function Deletesiswa($username){
        $this->db->where('member_username',$username);
    
         $this->db->delete('member');
    }

    function DeleteFile($file){
        $this->db->where('member_photo',$username);
        $query = $this->db->get('member');
        $row = $query->row();

        unlink('.'.$row->member_photo);

    }
    function getOnesiswa($username){
        $this->db->join('user_role','user_role_kode=user_role_user_role_kode');
        $this->db->where('siswa_username',$username);
        return $this->db->get('siswa')->row();
    }

    function getSiswaMapelperKelas($username,$kelas){
        $this->db->join('kelas','siswa.kelas_kelas_kode=kelas.kelas_kode');
        $this->db->where('siswa.kelas_kelas_kode',$kelas);
        $this->db->where('siswa.siswa_username',$username);
        return $this->db->get('siswa'); 
    }



    
}

