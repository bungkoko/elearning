<?php 
class guru extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('mapel_model');
		$this->load->model('guru_model');
		$this->load->model('role_model');
	}

	function index(){
		$data['dt_mapel']=$this->mapel_model->getAllMapel()->result();
		//$data['dt_user_type']$this->role_model->getRole()->result();
		$data['dt_guru']=$this->guru_model->getguru()->result();
		$data['pagetitle']='Management Guru';
		$data['content']='management/_guru/_guru';
		$this->load->view('index',$data);
	}

	function register(){
		$data['dt_mapel']=$this->mapel_model->getAllMapel()->result();
		$data['dt_user_type']=$this->role_model->getRole()->result();
		$data['content']='management/_guru/_guru_register';
		$this->load->view('index',$data);
	}

	function processRegister(){
			if($this->input->post('submit')){
				$this->load->library('form_validation');
				$this->form_validation->set_rules('guru_username','Username','required');
				$this->form_validation->set_rules('guru_password','Password','required');
				$this->form_validation->set_rules('guru_nm','Nama Lengkap','required');
				$this->form_validation->set_rules('guru_email','Email','required');
				$this->form_validation->set_rules('guru_jeniskelamin','Jenis Kelamin','required');
				$this->form_validation->set_rules('guru_agama','Agama','required');
				//$this->form_validation->set_rules('guru_status_akses','Status Akses','required');
				$this->form_validation->set_rules('guru_alamat','Alamat','required');
				$this->form_validation->set_rules('guru_tmplahir','Tempat Lahir','required');
				//$this->form_validation->set_rules('guru_tgllahir','Tanggal Lahir','required');
				
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

					if(!$this->upload->do_upload('guru_photo')){
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

						$this->guru_model->saveguru($photo_path);
						if($this->session->userdata('user_logged')==true){
							redirect('guru');
						}else{
							redirect('auth/index');
						}
					}
				}else{
					echo "tidak valid";
				}

			}
		}

		function status_akses($id='', $status='') {
       
        if ($status == '1')
            $status = '2';
        else
            $status = '1';

        // $this->db->join('tborder','tborder.kdorder=tborder_detail.tborder_kdorder');
        // $this->db->join('tbproduk','tborder_detail.TbProduk_KdProduk=tbProduk.kdproduk');
        //$this->db->join('tbmember','tbmember.kdmember=tborder.tbmember_kdmember');
        $this->db->where('guru_username', $id);
        $this->db->set('user_role_user_role_kode', $status);
        $this->db->update('guru');

        $this->session->set_flashdata('message', 'status berita telah berhasil di ubah');
        redirect('guru');
    }

}
?>