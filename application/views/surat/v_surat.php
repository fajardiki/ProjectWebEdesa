<?php 
	$s = $surat->row_array();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Surat <?php echo $s['nama_surat']; ?></title>
</head>
<body>

	<p><?php echo $s['kode_surat']; ?></p>
	<p><?php echo $s['nama_surat']; ?></p>

</body>
</html>