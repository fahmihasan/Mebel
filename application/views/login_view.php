<<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
 
    <title>Daftar Pariwisata</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
  </head>

  <body>

    <div class="container">

      <!-- Static navbar -->
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="#">Daftar Pariwisata</a>
            <img src="<?php echo base_url() ?>assets/img/pesona.jpg" height="50px" width="50px" />
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Beranda</a></li>
              <li><a href="<?php echo site_url('wisata/index'); ?>">Lihat Wisata</a></li>
             
              
            </ul>
            
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>

      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
	<div class="col-xs-12 col-sm-12 col-lg-12">
	<?php echo form_open('login/ceklogin') ?>
		<div class="form-group">
			<legend>login ke Sistem</legend>
		</div>

		<?php echo validation_errors(); ?>
		<div class="form-group">
			<label for="">Username</legend>
			<input type="text" class="form-control" id="username" name="username" placholder="input field">
		</div>

		<div class="form-group">
			<label for="">Password</input>
			<input type="password" class="form-control" id="password" name="password" placholder="input field".
			</div>
			<div class="form-group">
				<button type="submit" class="btn-primary">Submit</button>
			</div>
		</form>

	</div>
</div>
