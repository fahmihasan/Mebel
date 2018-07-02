<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class mebel extends CI_Controller
	{

		public function __construct()
		{
		parent::__construct();
		$this->load->model('mebel_model');
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		if($this->session->userdata('logged_in')){
			$session_data=$this->session->userdata('logged_in');
			$data['username']=$session_data['username'];
		}else{
			redirect('login','refresh');
		}
		}

		public function index()
		{
			//$this->load->model('mebel_model');
			$data['all']=$this->mebel_model->piew();
			$this->load->view('mebel/mebel_datatable_ajax',$data);
		}

		public function Create()
		{
		
		$this->form_validation->set_rules('nama','nama','trim|required');
		$this->form_validation->set_rules('daerah','daerah','trim|required');
		$this->form_validation->set_rules('tarif','tarif','trim|required');
		$this->form_validation->set_rules('jenis','jenis','trim|required');
		if ($this->form_validation->run()==FALSE) 
			{
				$this->load->view('mebel/tambah_mebel_view');
			}else{

				$config['upload_path']	='./assets/uploads/';
				$config['allowed_types'] ='gif|jpg|png';
				$config['max_size'] =1000000000;
				$config['max_width'] =7000;
				$config['max_height'] =1000;

				$this->load->library('upload',$config);

				if(! $this->upload->do_upload('userfile'))
				{
					$error = array('error' =>$this->upload->display_errors());
					$this->load->view('mebel/tambah_mebel_view',$error);
				}
				else
				{ 
					$gambar=$this->upload->data();

					$config['image_library']='gd2';
					$config['source_image']='./assets/uploads/'.$gambar['file_name'];
					$config['maintain_ratio']=true;
					$config['create_thumb']=true;
					$config['quality']='50%';
					$config['width']=270;

					$this->load->library('image_lib',$config);
					if($this->image_lib->resize()){

					$this->mebel_model->insertMebel();
					$this->load->view('mebel/tambah_mebel_sukses');}
				}
			}
		}

		public function Update($id)
		{
			$this->form_validation->set_rules('nama','nama','trim|required');
			$this->form_validation->set_rules('daerah','daerah','trim|required');
			$this->form_validation->set_rules('tarif','tarif','trim|required');
			$this->form_validation->set_rules('jenis','jenis','trim|required');
			

			$data['mebel']=$this->mebel_model->getMebel($id);

			if ($this->form_validation->run()==FALSE)
			{
				# code...
				$this->load->view('mebel/edit_mebel_view',$data);
			}else{
				$config['upload_path']	='./assets/uploads/';
				$config['allowed_types'] ='gif|jpg|png';
				$config['max_size'] =1000000000;
				$config['max_width'] =7000;
				$config['max_height'] =1000;

				$this->load->library('upload',$config);

				if(! $this->upload->do_upload('foto'))
				{
					$error = array('error' =>$this->upload->display_errors());
					$this->load->view('mebel/edit_mebel_view',$error);
				}
			else
				{
					$gambar=$this->upload->data();

					$config['image_library']='gd2';
					$config['source_image']='./assets/uploads/'.$gambar['file_name'];
					$config['maintain_ratio']=true;
					$config['create_thumb']=true;
					$config['quality']='50%';
					$config['width']=270;

					$this->load->library('image_lib',$config);
					if($this->image_lib->resize()){

					$this->mebel_model->UpdateById($id);
					$this->load->view('mebel/edit_mebel_sukses');
				}
				}
			}

		}
		public function delete($id)
		{
			$this->mebel_model->delete($id);
			$this->load->view('mebel/hapus_mebel_sukses');
		}

		public function datatable()
		{
			$data['all']=$this->mebel_model->piew();
			$this->load->view('mebel/mebel_datatable',$data);
		}

		public function datatable_ajax()
		{
			$this->load->view('mebel/mebel_datatable_ajax');
		}

		public function datatable_ajax1()
		{
			$this->load->view('mebel/mebel_datatable_ajax1');
		}

		public function data_server()
		{
			$this->load->library('Datatables');
			$this->datatables
				->select('id,nama,daerah,tarif,jenis,foto')
				->from('mebel');
				echo $this->datatables->generate();
		}
	}
 ?>