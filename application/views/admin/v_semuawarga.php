<!DOCTYPE html>
<html>
<head>
<title>Lihat Data</title>
<!-- CSS untuk mempercantik tampilan-->
	<style type="text/css">
		td{
		 text-align: center;
		}
	</style>

</head>

<body background="blue">

	<table width="100%" border="1px solid #000" style="border-collapse:collapse; background-color: yellow">
		<thead>
		  <tr style="background-color: skyblue;">
		   <th>NIK</th>
		   <th>NKK</th>
		   <th>NAMA</th>
		   <th>TEMPAT LAHIR</th>
		   <th>TANGGAL LAHIR</th>
		  </tr>
		</thead>
	 	<tbody>
	 		<?php foreach ($datawarga->result_array() as $dw) { ?>
	 		<tr>
			 	<td><?php echo $dw['nik']; ?></td>
			 	<td><?php echo $dw['nkk']; ?></td>
			 	<td><?php echo $dw['nama']; ?></td>
			 	<td><?php echo $dw['tempat_lahir']; ?></td>
			 	<td><?php echo $dw['tanggal_lahir']; ?></td>
		 	</tr>
		 	<?php } ?>
	 	</tbody> 	 
	</table>
<br>
</body>
</html>