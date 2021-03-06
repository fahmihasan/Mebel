
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

    <title>WEB MEUBEL</title>

    <link href="<?php echo base_url();?>assets/as/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo base_url();?>assets/as/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="<?php echo base_url();?>assets/as/stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
    <link rel="<?php echo base_url();?>assets/as/stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
    <link rel="<?php echo base_url();?>assets/as/stylesheet" type="text/css" href="assets/lineicons/style.css">    
    <link href="<?php echo base_url();?>assets/as/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/as/css/style-responsive.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/datatables.min.css">

    <script src="<?php echo base_url();?>assets/as/js/chart-master/Chart.js"></script>
  </head>

  <body>
  <section id="container" >
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <a href="#" class="logo"><b>Mebel Jepara</b></a>
            <div class="top-menu">
              <ul class="nav pull-right top-menu">
                    <li><a class="logout" href="<?php echo site_url('');?>">Logout</a></li>
              </ul>
            </div>
        </header>
        <aside>
          <div id="sidebar"  class="nav-collapse ">

              <ul class="sidebar-menu" id="nav-accordion">
              
                  <p class="centered"><a href="profile.html"><img src="<?php echo base_url('assets/as/img/ui-sam.jpg"');?>"  class="img-circle" width="60"></a></p>
                  <h5 class="centered">Meubel</h5>
                    
                  <li class="mt">
                      <a href="<?=site_url()?>/mebel/datatable_ajax1">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
                  </ul>
                  </div>
      <section id="main-content">
          <section class="wrapper">
            <h3><center> Mebel Jepara </center></h3>
       <div class="col-md-12">
         <div class="content-panel">
            <h4>Daftar Meubel </h4>
      <table class="table table-striped table-bordered" id="example">
      <thead>
        <tr>
          <th>Nama</th>
          <th>Daerah</th>
          <th>Tarif</th>
          <th>Jenis</th>
          <th>Foto</th>


        </tr>
      </thead>

  
      <tbody>
        <?php foreach ($all as $row):?>
        <tr>
          <td><?php echo $row->nama; ?></td>
          <td><?php echo $row->daerah; ?></td>
          <td><?php echo $row->tarif; ?></td>
          <td><?php echo $row->jenis; ?></td>
          <td><img src=<?=base_url("assets/uploads")."/".$row->foto?>></td>

        </tr>
      <?php endforeach; ?>
      </tbody>
      </table>
      </div>
</div>
</div>

                        </div>
                    </div>
      <footer class="site-footer">
          <div class="text-center">
              Mebel Jepara
              <a href="basic_table.html#" class="go-top">
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
    
  <script>

      $(function(){
          $('select.styled').customSelect();
      });

  </script>
  <script src="<?php echo base_url()?>assets/datatables.min.js"></script>
      <script type="text/javascript">
      $(document).ready(function() {
       $('#example').DataTable({
        "procesing":true,
        "serverSide":true,
        "lengthMenu":[[1,3,6,-1]],[[1,3,6,"All"]],
        "ajax":{
          url : "<?php echo site_url('mebel/data_server')?>"
          type : "POST"
        },
        "columnDefs":
        [
          {
            "targets":0,
            "data":"nama",
          }

          {
            "targets":1,
            "data":"daerah",
          }

          {
            "targets":2,
            "data":"tarif",
          }

          {
            "targets":3,
            "data":"jenis",
          }

          {
            "targets":4,
            "data":"foto",
            "render":function(data,type,full,meta){
              return '<img src="<?=base_url()?>asset/uploads/'+data+'">';
            }
          },
        ]
       });
       });
        </script>
  </body>
</html>
