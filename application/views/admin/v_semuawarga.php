<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

<table width="100%" border="1px solid #000" class="table-bordered">
        <thead>
        <tr style="background-color: skyblue;" class="text-center">
           <th>NIK</th>
		   <th>NKK</th>
		   <th>NAMA</th>
		   <th>TEMPAT LAHIR</th>
		   <th>TANGGAL LAHIR</th>
        </tr>
        </thead>
    <?php foreach ($datawarga->result_array() as $dw) { ?>
              <tbody>
                <tr>
                <td><?php echo $dw['nik']; ?></td>
			 	<td><?php echo $dw['nkk']; ?></td>
			 	<td><?php echo $dw['nama']; ?></td>
			 	<td><?php echo $dw['tempat_lahir']; ?></td>
			 	<td><?php echo $dw['tanggal_lahir']; ?></td>
                </tr>
              </tbody>
    <?php } ?>
  </table>


</body>
</html>

