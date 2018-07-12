
    <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/datatables.min.css">

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Mebel Jepara</title>

    <link href="<?php echo base_url();?>assets/as/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/as/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="<?php echo base_url();?>assets/as/stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
    <link rel="<?php echo base_url();?>assets/as/stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
    <link rel="<?php echo base_url();?>assets/as/stylesheet" type="text/css" href="assets/lineicons/style.css">    
    
    <link href="<?php echo base_url();?>assets/as/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/as/css/style-responsive.css" rel="stylesheet">

    <script src="<?php echo base_url();?>assets/as/js/chart-master/Chart.js"></script>

  </head>

  <body>

  <section id="container" >
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <a href="index.html" class="logo"><b>Mebel Jepara</b></a>
            <div class="top-menu">
              <ul class="nav pull-right top-menu">
                    <li><a class="logout" href="<?php echo site_url('');?>">Logout</a></li>
              </ul>
            </div>
        </header>
      <aside>
          <div id="sidebar"  class="nav-collapse ">

              <ul class="sidebar-menu" id="nav-accordion">
              
                  <p class="centered"><a href="profile.php"><img src="<?php echo base_url('assets/as/img/ui-sam.jpg"');?>"  class="img-circle" width="60"></a></p>
                  <h5 class="centered">Meubel</h5>
                    
                  <li class="mt">
                      <a href="<?=site_url()?>/mebel/index">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
                  <li class="mt">
                      <a href="<?=site_url()?>/mebel/forget">
                          <i class="fa fa-dashboard"></i>
                          <span>Lupa Password</span>
                      </a>
                  </li>
                  <li class="mt">
                      <a href="<?=site_url()?>/mebel/create">
                          <i class="fa fa-dashboard"></i>
                          <span>Tambah Data </span>
                      </a>
                  </li>
                  <li class="mt">
                      <a href="<?=site_url()?>/cetak">
                          <i class="fa fa-dashboard"></i>
                          <span>Print Data Pdf</span>
                      </a>
                  </li>
                  <li class="mt">
                      <a href="<?=site_url()?>/c_excel">
                          <i class="fa fa-dashboard"></i>
                          <span>Print Data</span>
                      </a>
                  </li>
              </ul>
          </div>
      </aside>
      <section id="main-content">
          <section class="wrapper">
            <h3>Mebel Jepara</h3>
        <div class="row">
        
        <div class="col-md-12">
          <div class="content-panel">
            <h4><center> Tambah Data Meubel </center></h4>
	
	<?php $row = $this->db->where('username',$this->session->userdata('username'))->get('user')->row_array(); echo form_open_multipart('mebel/savePass'); ?>
	<?php echo validation_errors(); if($pesan=$this->session->flashdata('pesan')){ echo $pesan;} ?>
	
    <div class="form-group" >
  <label class="control-label col-sm-2" for="nama">Username  :</label>
  <div class="col-sm-10">
  <input type="text" name="username" class="form-control" placeholder="username" value="<?=$row['username']?>"><br>  
  </div>
</div>
    <div class="form-group" >
  <label class="control-label col-sm-2" for="nama">Password Lama  :</label>
  <div class="col-sm-10">
  <input type="password" name="password" class="form-control" placeholder="password lama"><br>  
  </div>
</div>
<div class="form-group" >
  <label class="control-label col-sm-2" for="nama">Password Baru  :</label>
  <div class="col-sm-10">
  <input type="password" name="newpass" class="form-control" placeholder="password baru"><br>  
  </div>
</div>
<div class="form-group" >
  <label class="control-label col-sm-2" for="nama">Konfirmasi  :</label>
  <div class="col-sm-10">
  <input type="password" name="confpass" class="form-control" placeholder="konfirmasi"><br>  
  </div>
</div>
	
	
	<button type="submit" class="btn btn-primary">OK</button>
	<?php echo form_close(); ?>

      <footer class="site-footer">
          <div class="text-center">
              Mebel JEPARA
              <a href="#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>

  </section>

    <script src="<?php echo base_url();?>assets/as/js/jquery.js"></script>
    <script src="<?php echo base_url();?>assets/as/js/jquery-1.8.3.min.js"></script>
    <script src="<?php echo base_url();?>assets/as/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="<?php echo base_url();?>assets/as/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="<?php echo base_url();?>assets/as/js/jquery.scrollTo.min.js"></script>
    <script src="<?php echo base_url();?>assets/as/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/as/js/jquery.sparkline.js"></script>


    <script src="<?php echo base_url();?>assets/as/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="<?php echo base_url();?>assets/as/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/as/js/gritter-conf.js"></script>

    <script src="assets/js/sparkline-chart.js"></script>    
  <script src="assets/js/zabuto_calendar.js"></script>
