<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Export extends CI_Model{
	
	public function __construct(){
	parent::__construct();

	$this->load->database();
	}

	public function getAll(){
	$this->db->select('*');
	$this->db->from('mebel');
	$query=$this->db->get();
	return $query->result();
	}
}