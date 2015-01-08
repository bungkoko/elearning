<?php

	class siswa extends CI_Controller{

		public function __construct(){
			parent::__construct();
			$this->load->model('siswa_model');
			$this->load->model('kelas_model');
			$this->load->model('role_model');
			if($this->session->userdata('user_logged')==false){
				redirect('auth');
			}
			
		}

		function index(){
			$data['content']="management/_siswa/_siswa";
			$data['pagetitle'] = 'Manajemen siswa';
        	$data['dt_siswa'] = $this->siswa_model->getsiswa()->result();
        	$data['getKelas'] = $this->kelas_model->getKelas()->result();
			$this->load->view('index',$data);
		}

		/*function register(){
			$data['content']="management/_siswa/_siswa_register";
			$data['dt_role']=$this->role_model->getRole()->result();
			//$data['gt_mapel']=$this->mapel_model->getAllMapel()->result();
			$data['dt_kelas']=$this->kelas_model->getKelas()->result();
			$data['role']=$this->role_model->getRole()->result();
			$this->load->view('index',$data);
		}*/

		function processRegister(){
			if($this->input->post('submit')){
				$this->load->library('form_validation');
				$this->form_validation->set_rules('siswa_username','Username','required');
				$this->form_validation->set_rules('siswa_password','Password','required');
				$this->form_validation->set_rules('siswa_nm','Nama Lengkap','required');
				$this->form_validation->set_rules('siswa_email','Email','required');
				$this->form_validation->set_rules('siswa_jeniskelamin','Jenis Kelamin','required');
				$this->form_validation->set_rules('siswa_agama','Agama','required');
				//$this->form_validation->set_rules('siswa_status_akses','Status Akses','required');
				$this->form_validation->set_rules('siswa_alamat','Alamat','required');
				$this->form_validation->set_rules('siswa_tmplahir','Tempat Lahir','required');
				//$this->form_validation->set_rules('siswa_tgllahir','Tanggal Lahir','required');
				
				if(($this->form_validation->run())==true){
					$this->load->library('upload');
					$this->load->library('image_lib');
						

					$config['upload_path'] = '.' . $this->config->item("upload_path_photo");
		           	$config['allowed_types'] = $this->config->item("allowed_types");
		           	$config['max_size'] = $this->config->item("max_size");
		           	$config['max_width'] = 0;
		           	$config['max_height'] = 0;
		           	$config['encrypt_name'] = true;

					

					$this->upload->initialize($config);

					if(!$this->upload->do_upload('siswa_photo')){
						//echo print_r($config['upload_path_photo']);
						echo $this->upload->display_errors();
					}else{
						$data_photo=$this->upload->data();
						$photo_name=$data_photo['raw_name'];
						$photo_ext=$data_photo['file_ext'];
						$photo_path=$data_photo['file_name'];
						$photo_fullpath=$data_photo['full_path'];

						$config['image_library']=$this->config->item('image_library');
						$config['maintain_ratio']=$this->config->item('maintain_ratio');
						$config['width']=163;
						$config['height']=143;
						$config['source_image']=$photo_fullpath;

						$this->image_lib->initialize($config);

						$this->image_lib->resize();
						$this->image_lib->clear();

						$this->siswa_model->savesiswa($photo_path);
						if($this->session->userdata('user_logged')==true){
							redirect('siswa');
						}else{
							redirect('auth/index');
						}
					}
				}else{
					echo "tidak valid";
				}

			}
		}

		function deletesiswa($user){
			$this->siswa_model->deletesiswa($user);
			$this->siswa_model->deleteFile($user);
			redirect('siswa');
		}

		function detail($user){

			$data['content']='management/_siswa/_siswa_detail';
			$data['dt_detail']=$this->siswa_model->getOnesiswa($user);
			$this->load->view('index',$data);
		}
		function date(){
        	print_r(date('Y-m-d'));
    	}

    	
	
}

?>
