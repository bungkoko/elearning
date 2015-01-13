<?php

class tugas_model extends CI_Model{
	function getInput(){
		$this->db->set('siswa_siswa_nis',$this->input->post('siswa_nis'));
		$this->db->set('materi_materi_kode',$this->input->post('materi_kode'));
		$this->db->set('materi_kelas_kelas_kode',$this->input->post('kelas_kode'));
		$this->db->set('materi_mapel_mapel_kode',$this->input->post('mapel_kode'));
		$this->db->set('tugas_tanggalupload',date('Y-m-d'));
	}

	function create($path){
		$this->getInput();
		$this->db->set('tugas_upload', $this->config->item("upload_path_tugas").$path);
       	return $this->db->insert('siswa_has_materi');
	}


	function getTugas($kelas){
		$this->db->join('kelas','kelas.kelas_kode=materi.kelas_kelas_kode');
		$this->db->join('mapel','mapel.mapel_kode=materi.mapel_mapel_kode');
		$this->db->where('materi_jenis','tugas');
		$this->db->where('materi.kelas_kelas_kode',$kelas);
		return $this->db->get('materi');
	}	

	function getMapelperKelas($kelas,$mapel){
		$this->db->join('kelas','kelas.kelas_kode=materi.kelas_kelas_kode');
		$this->db->join('mapel','mapel.mapel_kode=materi.mapel_mapel_kode');
		$this->db->where('materi_jenis','tugas');
		$this->db->where('mapel.mapel_kode',$mapel);
		$this->db->where('materi.kelas_kelas_kode',$kelas);
		return $this->db->get('materi')->row();
	}

	
} 

?>