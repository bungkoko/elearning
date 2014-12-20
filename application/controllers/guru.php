<?php 
class guru extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('mapel_model');
		$this->load->model('guru_model');
		$this->load->model('role_model');
	}

	function index(){
		//$data['dt_mapel']=$this->mapel_model->getAllMapel()->result();
		//$data['dt_user_type']$this->role_model->getRole()->result();
		$data['dt_guru']=$this->guru_model->getguru()->result();
		$data['content']='management/_guru/_guru_list';
		$this->load->view('index',$data);
	}

	function register(){
		$data['dt_mapel']=$this->mapel_model->getAllMapel()->result();
		$data['dt_user_type']=$this->role_model->getRole()->result();
		$data['content']='management/_guru/_guru_register';
		$this->load->view('index',$data);
	}
}
?>