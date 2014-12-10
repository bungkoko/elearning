<?php if(! defined('BASEPATH')) exit('No direct script access allowed');

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class auth_model extends CI_Model{
    public function cekdb(){
        $user=$this->input->post('username');
        $password=  $this->input->post('password');
        $level=$this->input->post('level');
        
        $this->db->where('member_username',$user);
        $this->db->where('member_password',$password);
        $this->db->where('user_role_user_role_kode',$level);
        $query=$this->db->get('member');
        return $query->result();
    }
    
    public function getdropdownuser() {
        $dbrole=$this->db->get('user_role');
        $select=array();
        foreach ($dbrole->result_array() as $rows){
            $select[0]='--Choose Mode--';
            $select[$row['user_role']]=$row['user_role'];
        }
        return $select;
    }
    
   /* public function getsupply($id){
        $data=array();
        $options=array('member_kode'=>$id);
    }*/
    
    
}
