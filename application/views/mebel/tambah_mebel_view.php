
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
            <h3><i class="fa fa-angle-right"></i> Mebel Jepara </h3>
        <div class="row">
        
        <div class="col-md-12">
          <div class="content-panel">
            <h4><i class="fa fa-angle-right"></i> Tambah Data Meubel </h4>
                <hr>
	
	<?php echo form_open_multipart('mebel/create'); ?>
	<?php echo validation_errors();  ?>
	<div class="form-group">
		<label for="">Nama </label>
		<input type="text" name="nama" class="form-control"  placeholder="Masukkan Nama">
		<label for="">Daerah </label>
		<input type="text" name="daerah" class="form-control"  placeholder="Masukkan Daerah">
		<label for="">Tarif </label>
		<input type="text" name="tarif" class="form-control"  placeholder="Masukkan Harga">
    <label for="">Jenis</label>
    <input type="text" name="jenis" class="form-control" placeholder="Masukkan Jenis">
    <label for="">Foto</label>
    <input type="file" name="userfile" size="20">
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
