<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('kelas_model');
        $this->load->model('member_model');
    }

    function index() {
        $data['content'] = 'dashboard';
        $data['pagetitle'] = "Dashboard";
        // $data['user_role']=$this->session->userdata('user_role');
        $this->load->view('index', $data);
    }

    function kelas() {
        $data['content'] = 'management/_kelas/_kelas';
        $data['pagetitle'] = 'Manajemen Kelas';
        $data['getKelas'] = $this->kelas_model->getKelas();
        $this->load->view('index', $data);
    }

    function tambahKelas() {
        if ($this->input->post('submit')):
            $this->load->library('form_validation');
            $this->form_validation->set_rules('kelas_nm', 'kelas_nm', 'required');
            if ($this->form_validation->run() == true):
                $this->kelas_model->save();
            endif;
        endif;
        redirect('dashboard/kelas');
    }

    function DeleteKelas($kd) {
        // if ($kd == '')

        $this->kelas_model->delKelas($kd);
        redirect('dashboard/kelas');
    }

    function Member() {
        $data['content'] = 'management/_member/_member_list';
        $data['pagetitle'] = 'Manajemen Kelas';
        $data['dt_member'] = $this->member_model->getMember()->result();
        $this->load->view('index', $data);
    }

    function tambahMember() {
        if ($this->input->post('submit')):
            $this->load->library('form_validation');
            $this->form_validation->set_rules('member_username', 'Username', 'required');
            $this->form_validation->set_rules('member_password', 'Password', 'required');
            $this->form_validation->set_rules('member_nm', 'Nama', 'required');
            $this->form_validation->set_rules('member_email', 'email', 'required|valid_email');
            $this->form_validation->set_rules('member_tgllahir', 'Tanggal Lahir', 'required');
            $this->form_validation->set_rules('member_tmplahir', 'Tempat Lahir', 'required');
            $this->form_validation->set_rules('member_jeniskelamin', 'Jenis Kelamin', 'required');
            $this->form_validation->set_rules('member_tanggaljoin', 'Tanggal Join', 'required');
            $this->form_validation->set_rules('member_agama', 'Agama', 'required');
            $this->form_validation->set_rules('member_alamat', 'Alamat', 'required');
            if ($this->form_validation->run() == true):
                $this->load->library('upload');
                $this->load->library('image_lib');
                //config untuk upload

                $config['upload_path_photo'] = '.' . $this->config->item("upload_path_photo");
                $config['allowed_types'] = $this->config->item("allowed_types");
                $config['max_size'] = $this->config->item("max_size");
                $config['max_width'] = 0;
                $config['max_height'] = 0;
                $config['encrypt_name'] = true;
                $this->upload->initialize($config);

                if (!$this->upload->do_upload('member_photo')):
                    $this->session->set_flashdata('error', $this->upload->display_errors());
                    redirect('dashboard/member');
                else:
                    $data_photo = $this->upload->data();
                    $photo_name = $data_photo['raw_name'];
                    $photo_ext = $data_photo['file_ext'];
                    $photo_path = $data_photo['file_name'];
                    $photo_fullpath = $data_photo['full_path'];

                    $config['image_library'] = $this->config->item('image_library');
                    $config['maintain_ration'] = $this->config->item('maintain_ratio');
                    $config['width'] = 163;
                    $config['height'] = 143;
                    $config['source_image'] = $photo_fullpath;

                    $this->image_lib->initialize($config);
                    $this->image_lib->resize();
                    $this->image_lib->clear();

                    $this->member_model->saveMember($photo_path);
                endif;
                $this->session->set_flashdata('message', 'Member Berhasil ditambahkan');
                redirect('dashboard/member');
            else:
                $data['error'] = validation_errors();
            endif;
        endif;
        $data['content'] = "management/_member/_member_add";
        $this->load->view('index', $data);
    }

}
