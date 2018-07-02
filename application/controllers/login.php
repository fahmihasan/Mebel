<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mebel_model');
		$this->load->helper('url','form');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->view('mebel/login_view');
	}

	public function cekLogin()
		{
			$this->load->library('form_validation');
			$this->form_validation->set_rules('username','username','trim|required');
			$this->form_validation->set_rules('password','password','trim|required');
			if($this->form_validation->run()==FALSE){
				$this->load->view('mebel/login_view');
			}else{
				$username=$this->input->post('username');
				$password=$this->input->post('password');
				$cek=$this->mebel_model->cek($username,MD5($password))->row_array();
				if ($cek>0){

					$login=$this->mebel_model->cek($username,MD5($password))->row_array();

					$username=$login['username'];
					$akses=$login['hak_akses'];
					$this->session->set_userdata('username',$username);
					$this->session->set_userdata('hak_akses',$akses);
					$this->load->model('mebel_model');
					$data['all']=$this->mebel_model->piew();
					if ($akses=='admin'){
						$this->load->view('mebel/mebel_view', $data);
					}else{
						$this->load->view('mebel/mebel_datatable_ajax1', $data);
					}
				}else{
				redirect('mebel','refresh');
			}
		}
		}

		public function cekDb($password)
		{
			$this->load->model('user');
			$username=$this->input->post('username');
			$result=$this->user->login($username,$password);
			if($result){
				$sess_array=array();
				foreach ($result as $row) {
					$sess_array=array(
						'id'=>$row->id,
						'username'=>$row->username
						);
					$this->session->set_userdata('logged_in',$sess_array);
				}
				return true;
			}else{
				$this->form_validation->set_massage('cekDb',"Login Gagal Username dan Password tidak valid");
			}
			}
			

		public function logout()
		{
			$this->session->unset_userdata('logged_in');
			$this->session->unset_userdata('hak_akses');
			$this->session->sess_destroy();
			redirect('login','refresh');
		}

		public function Create()
		{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username','username','trim|required');
		$this->form_validation->set_rules('password','password','trim|required');
		$this->form_validation->set_rules('hak_akses','hak_akses','trim|required');
		if ($this->form_validation->run()==FALSE) 
			{
				$this->load->view('mebel/tambah_user_view');
			}else{
		
		$this->mebel_model->insertUser();
		$this->load->view('mebel/tambah_user_sukses');
		}
		}
		public function tambah_user()
		{
			$this->load->view('mebel/tambah_user_view');
		}

}