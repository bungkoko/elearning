<?php 
class tugas extends CI_Controller{
	public function __construct(){
		parent::__construct();
		//$this->load->model('mapel_model');
		//$this->load->model('kelas_model');
		$this->load->model('materi_model');
		//$this->load->model('guru_model');
		if($this->session->userdata('user_logged')==false){
			redirect('auth/index');
		}
	}

	function index(){
		$data['content']='management/_tugas/_tugas';
		$data['dt_tugas']=$this->materi_model->getMapelPerKelas($this->session->userdata('user_kelas'));
		$this->load->view('index',$data);
	}
}
?>