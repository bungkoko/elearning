<?php 
	class materi extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->model('mapel_model');
			$this->load->model('kelas_model');

		}

		function index(){
			$data['pagetitle']='Management Materi';
			$data['dt_mapel']=$this->mapel_model->getAllMapel()->result();
			$data['dt_kelas']=$this->kelas_model->getKelas()->result();
			$data['content']='materi/_materi';
			$this->load->view('index',$data);
		}

		function process(){
			if($this->input->post("submit")){
				$this->form_validation->set_rules('materi_judul','Judul Materi','required');
				$this->form_validation->set_rules('materi_upload','Upload Materi','required');
				$this->form_validation->set_rules('kelas','Kelas', 'required');
				$this->form_validation->set_rules('mapel','Mata Pelajaran','required');
				$this->form_validation->set_rules('materi_jenis','Jenis Materi','required');

				if($this->form_validation->run()==true){
					$this->load->library('upload');
					$this->load->library('image_lib');
						

					$config['upload_path'] = '.' . $this->config->item("upload_path_materi");
		           	$config['allowed_types'] = $this->config->item("allowed_types_doc");
		           	$config['max_size'] = 5000;
		           	$config['max_width'] = 0;
		           	$config['max_height'] = 0;
		           	$config['encrypt_name'] = true;

					

					$this->upload->initialize($config);

					if(!$this->upload->do_upload('materi_upload')){
						//echo print_r($config['upload_path_materi']);
						echo $this->upload->display_errors();
					}else{
						$data_materi=$this->upload->data();
						$materi_name=$data_materi['raw_name'];
						$materi_ext=$data_materi['file_ext'];
						$materi_path=$data_materi['file_name'];
						$materi_fullpath=$data_materi['full_path'];

					
						$this->materi_model->create($materi_path);
						redirect('materi');
					}
				}else{
					echo "tidak valid";
				}
			}
		}
	}

?>