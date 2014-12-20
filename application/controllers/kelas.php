<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
*/ 

class kelas extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('kelas_model');
		
	}

	function index(){
		$data['content'] = 'management/_kelas/_kelas';
        $data['pagetitle'] = 'Manajemen Kelas';
        $data['getKelas'] = $this->kelas_model->getKelas();
        $this->load->view('index', $data);
	}

	function create(){
		 if ($this->input->post('submit')):
            $this->load->library('form_validation');
            $this->form_validation->set_rules('kelas_nm', 'kelas_nm', 'required');
            if ($this->form_validation->run() == true):
                $this->kelas_model->save();
            endif;
        endif;
        redirect('kelas');
	}

	function delete($kd){
		 $this->kelas_model->delKelas($kd);
        redirect('kelas');
	}
}


 ?>
