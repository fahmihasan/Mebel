 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class C_excel extends CI_Controller {
 
      //constructor class C_excel
      public function __construct() {
           parent::__construct();
           //load helper url
           $this->load->helper('url');
           //load model 'model_buku'
           $this->load->model('Export');
      }
 
      //halaman awal untuk menampilkan tabel
      public function index() {
 
           $data = array( 'title' => 'laporan_excel',
                'all' => $this->Export->getAll());
 
           $this->load->view('mebel/view_excel',$data);
      }
 
      //export ke dalam format excel
      public function export_excel(){
           $data = array( 'title' => 'laporan_excel',
                'all' => $this->Export->getAll());
 
           $this->load->view('mebel/laporan_excel',$data);
      }
      public function export_word(){
           $data = array( 'title' => 'laporan_word',
                'all' => $this->Export->getAll());
 
           $this->load->view('mebel/laporan_word',$data);
      }
 
 }
 
 /* End of file C_excel.php */
 /* Location: ./application/controllers/C_excel.php */

