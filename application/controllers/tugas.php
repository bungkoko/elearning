<?php 
class tugas extends CI_Controller{
	public function __construct(){
		parent::__construct();
		//$this->load->model('mapel_model');
		//$this->load->model('kelas_model');
		$this->load->model('tugas_model');
		//$this->load->model('guru_model');
		if($this->session->userdata('user_logged')==false){
			redirect('auth/index');
		}
	}

	function index(){
		$data['pagetitle']='Daftar Tugas';
		$data['content']='management/_tugas/_listTugas';
		$data['dt_tugas']=$this->tugas_model->getTugas($this->session->userdata('user_kelas'));
		//$data['dt_tugas']=$this->materi_model->getMapelPerKelas($this->session->userdata('user_kelas'));
		$this->load->view('index',$data);
	}

	function DetailTugas($kelas,$mapel){
		$data['pagetitle']="Detail Tugas";
		$data['content']='management/_tugas/_tugas';
		$data['detail']=$this->tugas_model->getMapelperKelas($kelas,$mapel);
		$this->load->view('index',$data);
	}

	function processUpload(){
		if($this->input->post("submit")){
				//$this->form_validation->set_rules('materi_judul','Judul Materi','required');
				//$this->form_validation->set_rules('materi_upload','Upload Materi','required');
				//$this->form_validation->set_rules('kelas','Kelas', 'required');
				$this->form_validation->set_rules('mapel_kode','Mata Pelajaran','required');
				//$this->form_validation->set_rules('materi_jenis','Jenis Materi','required');

				if($this->form_validation->run()==true){
					$this->load->library('upload');
					//$this->load->library('image_lib');
						

					$config['upload_path'] = '.' . $this->config->item("upload_path_tugas");
		           	$config['allowed_types'] = $this->config->item("allowed_types_doc");
		           	$config['max_size'] = 5000;
		           	$config['max_width'] = 0;
		           	$config['max_height'] = 0;
		           	$config['encrypt_name'] = false;

					

					$this->upload->initialize($config);

					if(!$this->upload->do_upload('tugas_upload')){
						//echo print_r($config['upload_path_materi']);
						echo $this->upload->display_errors();
					}else{
						$data_tugas=$this->upload->data();
						$tugas_name=$data_tugas['raw_name'];
						$tugas_ext=$data_tugas['file_ext'];
						$tugas_path=$data_tugas['file_name'];
						$tufas_fullpath=$data_tugas['full_path'];

					
						$this->tugas_model->create($tugas_path);
						redirect('tugas');
						
					}
				}else{
					echo "tidak valid";
				}
			}
	}
}
?>