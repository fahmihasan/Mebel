<!DOCTYPE html>
<html>
<head>
	<title>Laporan</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>

	<body>
		<div class="container">
		<center><p style="text-align:center">Tabel Mebel</p></center>
		<table class="table" border="1">
			<tr>
				<th>Nama</th>
				<th>Daerah</th>
				<th>Tarif</th>
				<th>Jenis</th>
				<th>Foto</th>
			</tr>
			<?php $no=0; foreach ($mebel as $row){
			$no++;
			?>
        <tr class="danger">
          <td><?php echo $row->nama ?></td>
          <td><?php echo $row->daerah ?></td>
          <td><?php echo $row->tarif ?></td>
          <td><?php echo $row->jenis ?></td>
          <td><img src=<?=base_url("assets/uploads")."/".$row->foto?>></td>
		</tr>
		<?php }?>
		</table>
	</body>
	</html>