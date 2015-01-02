<?php
	class mapel extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model('mapel_model');
			//$this->load->model('kelas_model');
			
		}

		function index(){
			$data['content']="management/_mapel/_mapel";
			$data['pagetitle']='Management Mata Pelajaran';
			$data['getMapel']=$this->mapel_model->getAllMapel();
			$this->load->view('index',$data);
		}

		function create(){
			if($this->input->post('submit')==true){
				$this->form_validation->set_rules('mapel_nm','Mata Pelajaran','required');
				if ($this->form_validation->run() == true){
				    $this->mapel_model->saveMapel();
				}				          
			}
			redirect('mapel');
		}


	}
?>