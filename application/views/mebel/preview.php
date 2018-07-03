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
	<center><img src="<?php echo base_url('assets/img/IYO.jpg')?>" alt="kop surat" width="935" height="250"></center>
		<center><p style="text-align:center">Tabel mebel</p></center>
		<table>
			<tr>
				<th>Nama</th>
				<th>Daerah</th>
				<th>Tarif</th>
				<th>Jenis</th>
				<th>Foto<th>
			</tr>
			<?php $no=0; foreach ($mebel as $row):
			$no++
			?>
        <tr>
          <td><?php echo $row->nama ?></td>
          <td><?php echo $row->daerah ?></td>
          <td><?php echo $row->tarif ?></td>
          <td><?php echo $row->jenis ?></td>
          
          <td><img src=<?=base_url("assets/uploads")."/".$row->foto?>></td>
          </td>
		</tr>
		<?php endforeach; ?>
		</table>
		<center><p style="text-align"><a href="<?php echo base_url()?>index.php/cetak/cetakPdf">Cetak Pdf</a></p></center>
	</body>
	</html>