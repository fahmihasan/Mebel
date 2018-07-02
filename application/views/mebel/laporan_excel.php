<?php
 
 header("Content-type: application/vnd-ms-excel");
 
 header("Content-Disposition: attachment; filename=$title.xls");
 
 header("Pragma: no-cache");
 
 header("Expires: 0");
 
 ?>
 
 <table border="1" width="100%">
 
      <thead>
 
           <tr>
 
                <th>Nama</th>
 
                <th>Tarif</th>
 
                <th>Daerah</th>

                <th>Jenis</th>
 
           </tr>
 
      </thead>
 
      <tbody>
 
           <?php $i=1; foreach($all as $row) { ?>
 
           <tr>
 
                <td><?php echo $row->nama; ?></td>
                <td><?php echo $row->tarif; ?></td>
                <td><?php echo $row->daerah; ?></td>
                <td><?php echo $row->jenis; ?></td>
                
 
           </tr>
 
           <?php $i++; } ?>
 
      </tbody>
 
 </table>
