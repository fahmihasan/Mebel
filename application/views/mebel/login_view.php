
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
    <!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="<?php echo base_url();?>assets/images/icons/favicon.ico"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/vendor/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/vendor/select2/select2.min.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/util.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/main.css">
<!--===============================================================================================-->
  </head>

  <body>

  <section id="container" >
     <header class="header black-bg">
            <a href="#" class="logo"><b>Mebel Jepara</b></a>
            <div class="top-menu">
              <ul class="nav pull-right top-menu">
                    <button type="button" class="btn btn-primary btn-md"><a class="daftar" href="<?php echo site_url('login/tambah_user');?>">Daftar</a></button>
              </ul>
            </div>
        </header>
      
        
        <div class="container-login100">
      <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
            <h4><i class="fa fa-angle-right"></i> LOGIN </h4>
                <hr>
	<?php echo form_open('login/cekLogin') ?>
		<div class="form-group">
		</div>

		<?php echo validation_errors(); ?>
		<center><div class="form-group">
			<p><label for="">Username</legend> <input type="text" class="form-control" id="username" name="username" placholder="input field"></p>
		</div>

		<div class="form-group">
			<p><label for="">Password</legend> <input type="password" class="form-control" id="password" name="password" placholder="input field"></p>
		</div>
			<div class="form-group">
				<button type="submit" class="btn-primary btn-lg active">Submit</button></br>
			</div></center>
		</form>

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
