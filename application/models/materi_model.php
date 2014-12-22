<?php
	class materi_model extends CI_Model{
		public function __construct(){
			parent::__construct();
		}

		function input(){
			$this->db->set('materi_nm',$this->input->post('materi_judul'));
			$this->db->set('mapel_mapel_kode',$this->input->post('mapel'));
			$this->db->set('kelas_kelas_kode',$this->input->post('kelas'));
			$this->db->set('materi_tanggalupload',date('Y'));
			$this->db->set('materi_jenis',$this->input->post('materi_jenis'));
		}

		function create($materi_path){
			$this->input();
			$this->db->set('materi_file', $this->config->item("upload_path_materi").$materi_path);
       		return $this->db->insert('materi');
		}
	}
?>