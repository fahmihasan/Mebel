<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class cetak_model extends CI_Model{
	
	public function view()
	{
		$this->db->select("id,nama,daerah,tarif,jenis,foto");
		$query = $this->db->get('mebel');
		return $query->result();
	}

	public function view_row()
	{
		$this->db->select("id,nama,daerah,tarif,jenis,foto");
		$query=$this->db->get('mebel');
		return $query->result();
	}
}