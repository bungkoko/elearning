<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    function index() {
        $this->login();
    }

    function login() {
        if ($this->user_library->is_logged() == true):
            redirect('dashboard');
        endif;
        $data["error"] = "";

        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');

        if ($this->form_validation->run() == true):
            $username = $this->input->post('username');
            $password = md5($this->input->post('password'));
           // $level = $this->input->post('level');

            $this->db->join('user_role', 'user_role_user_role_kode=user_role_kode');
            $this->db->where('member_username', $username);
            $this->db->where('member_password', $password);
            //$this->db->where('user_role_type', $level);
            $member_data = $this->db->get('member');

            if ($member_data->num_rows == 1):
                $this->session->set_userdata('user_id', $member_data->row()->member_username);
                $this->session->set_userdata('user_display_name', $member_data->row()->member_nm);
                $this->session->set_userdata('user_role',$member_data->row()->user_role_type);
                $this->session->set_userdata('user_logged', true);
                redirect('dashboard');
            else:
                $data["error"] = "Username atau password tidak sesuai dengan database";
            endif;
        else:
            $data["error"] = validation_errors();
        endif;
        $data['nama_member'] = $this->session->userdata('user_display_name');
       // $data['warning'] = 'warning';
        $this->load->view('index', $data);
    }

    function logout() {
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('user_display_name');
        $this->session->unset_userdata('user_logged');
        redirect('home');
    }

}
