<?php
	class materi_model extends CI_Model{
		public function __construct(){
			parent::__construct();
		}

		function input(){
			$this->db->set('materi_nm',$this->input->post('materi_judul'));
			$this->db->set('mapel_mapel_kode',$this->input->post('mapel'));
			$this->db->set('kelas_kelas_kode',$this->input->post('kelas'));
			$this->db->set('materi_tanggalupload',date('Y-m-d'));
			$this->db->set('materi_jenis',$this->input->post('materi_jenis'));
		}

		function create($materi_path){
			$this->input();
			$this->db->set('materi_file', $this->config->item("upload_path_materi").$materi_path);
       		return $this->db->insert('materi');
		}

		function getMateri(){
			$this->db->join('kelas','kelas.kelas_kode=materi.kelas_kelas_kode');
			$this->db->join('mapel','mapel.mapel_kode=materi.mapel_mapel_kode');
			return $this->db->get('materi');
		}

		function getMapelPerKelas($kelas){
			$this->db->select('mapel_kode,mapel_nm');
			//$this->db->from('kelas,mapel,materi');
			$this->db->join('kelas','kelas.kelas_kode=materi.kelas_kelas_kode');
			$this->db->join('mapel','mapel.mapel_kode=materi.mapel_mapel_kode');
			$this->db->where('materi_jenis','tugas');
			$this->db->where('materi.kelas_kelas_kode',$kelas);
			return $this->db->get('materi');
		}

		function delMateri($id){
			$this->db->where('materi_kode',$id);
			//$this->db->where('materi_file',$path);
			$this->db->delete('materi');
		}

		function getOneMateri($kode){
			$this->db->join('kelas','kelas.kelas_kode=materi.kelas_kelas_kode');
			$this->db->join('mapel','mapel.mapel_kode=materi.mapel_mapel_kode');
			$this->db->where('materi_kode',$kode);
			return $this->db->get('materi')->row();
		}

		/*function DeleteFile($id){
	        $this->db->where('materi_kode',$id);
	        $query = $this->db->get('materi');
	        $row = $query->row();

	        unlink('.'.$row->materi_file);

    	}*/

    	function getMateriGuru($kelas){
    		$this->db->join('kelas','kelas.kelas_kode=materi.kelas_kelas_kode');
    		$this->db->join('mapel','mapel.mapel_kode=materi.mapel_mapel_kode');
    		$this->db->join('guru','guru.mapel_mapel_kode=mapel.mapel_kode');
    		$this->db->where('materi.kelas_kelas_kode',$kelas);
    		return $this->db->get('materi');
    	}
		
	}
?>