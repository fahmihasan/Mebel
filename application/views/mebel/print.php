<!DOCTYPE html>
<html>
<head>
	<title>Laporan</title>
	<style>
		table{
			border-collapse: collapse;
			width: 70%;
			margin: 0 auto;
		}

		table th{
			border:1px solid #000;
			padding: 3px;
			font-weight: bold;
			text-align: center;
		}

		table td{
			border:1px solid #000;
			padding: 3px;
			vertical-align: top;
		}
	</style>
	</head>

	<body>
	
		<center><p style="text-align:center">Tabel Mebel</p></center>
		<table>
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
        <tr>
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