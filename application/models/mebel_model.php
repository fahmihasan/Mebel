<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 

class mebel_model extends CI_Model
{
	
	public function __construct()
	{
		parent::__construct();
	}

	public function insertMebel()
	{
		$object = array
		(
			'nama' =>$this->input->post('nama'),
			'daerah' =>$this->input->post('daerah'),
			'tarif' =>$this->input->post('tarif'),
			'jenis' =>$this->input->post('jenis'),
			'foto' =>$this->upload->data('raw_name').'_thumb'.$this->upload->data('file_ext'),
			);
		$this->db->insert('mebel',$object);
	}

	public function piew()
	{
		$piew=$this->db->get('mebel');
		return $piew->result();
	}

	public function getMebel($id)
	{
		$this->db->where('id',$id);
		$query = $this->db->get('mebel');
		return $query->result();
	}

	public function UpdateById($id)
	{
		$data = array
		(
			'nama' =>$this->input->post('nama'),
			'daerah' =>$this->input->post('daerah'),
			'tarif' =>$this->input->post('tarif'),
			'jenis' =>$this->input->post('jenis'),
			'foto' =>$this->upload->data('raw_name').'_thumb'.$this->upload->data('file_ext'),
		);
		$this->db->where('id',$id);
		$this->db->Update('mebel',$data);
	}

	public function delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('mebel');
	}

	public function insertUser()
	{
		$object = array
		(
			'username' =>$this->input->post('username'),
			'password' =>MD5($this->input->post('password')),
			'hak_akses' =>$this->input->post('hak_akses'),
			);
		$this->db->insert('user',$object);
	}

	public function cek($username,$password)
	{
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		return $this->db->get('user');
	}
}
 ?>