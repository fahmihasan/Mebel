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
	<img src="<?php echo base_url('assets/img/pesona.jpg') ?>" alt="kop surat">
		<p style="text-align:center">Tabel Meubel</p>
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
          <td>
          <img src="<?php echo base_url("assets/uploads").$row->foto?>" style="width=150;" align="center">
          </td>
		</tr>
		<?php }?>
		</table>
	</body>
	</html>