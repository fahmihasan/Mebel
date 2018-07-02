<?php
 
 header("Content-type: application/vnd-ms-word");
 
 header("Content-Disposition: attachment; filename=$title.doc");
 
 header("Cache-Control: must-revalidate,post-check=0,pre-check=0");
 
 header("Expires: 0");
 
 ?>
 <img src="<?php echo base_url('assets/img/IYO.jpg')?>"alt="kop surat" width="935" height="250">
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
