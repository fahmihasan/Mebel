<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 ?><!DOCTYPE html>
 <html lang="en">
 <head>
      <meta charset="utf-8">
      <title><?php echo $title ?></title>
      <style>
           ::selection { background-color: #E13300; color: white; }
           ::-moz-selection { background-color: #E13300; color: white; }
 
           body {
                background-color: #fff;
                margin: 40px;
                font: 13px/20px normal Helvetica, Arial, sans-serif;
                color: #4F5155;
           }
 
           main {
                width: 80%;
                padding: 20px;
                background-color: white;
                min-height: 300px;
                border-radius: 5px;
                margin: 30px auto;
                box-shadow: 0 0 8px #D0D0D0;
           }
           table {
                border-top: solid thin #000;
                border-collapse: collapse;
           }
           th, td {
                border-top: border-top: solid thin #000;
                padding: 6px 12px;
           }
 
           a {
                color: #003399;
                background-color: transparent;
                font-weight: normal;
           }
      </style>
 </head>
 
 <body>

      <main>

           <h1>Laporan Meubel</h1>
           <centar><img src="<?php echo base_url('assets/img/IYO.jpg')?>"alt="kop surat" width="1000" height="250"></centar>
           <center><p><a href="<?php echo base_url('c_excel/export_excel') ?>">Export ke Excel</a></p><p><a href="<?php echo base_url('c_excel/export_word') ?>">Export ke Word</a></p></center>
           <table border="1" width="100%">
                <thead>
                     <tr>
                          <th>ID</th>
                          <th>Nama</th>
                          <th>Tarif</th>
                          <th>Daerah</th>
                          <th>Jenis</th>
                          
                     </tr>
                </thead>
                <tbody>
                     <?php $i=1; foreach($all as $row) { ?>
                     <tr> 
                          <td><?php echo $row->id; ?></td>
                          <td><?php echo $row->nama; ?></td>
                          <td><?php echo $row->tarif; ?></td>
                          <td><?php echo $row->daerah; ?></td>
                          <td><?php echo $row->jenis; ?></td>
                          
                          
                     </tr>
                     <?php $i++; } ?>
                </tbody>
           </table>
           <center><p><a href="<?php echo base_url('login') ?>">Keluar Sistem</a></p></center>
      </main>
 </body>
 </html>
