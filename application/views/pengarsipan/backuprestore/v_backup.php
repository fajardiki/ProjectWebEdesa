<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<header style="margin-bottom: 20px;">
		<h2>Backup Database</h2>
	</header>
	<div class="backup">
		<form action="config/bckup.php" method="post">
			<label>Pilih database :</label>
			<br>
		
				<?php $this->load->$show ?>

			<select type="tekt" name="dbname" style="padding: 5px; width: 200px;">
				<?php while ($db = mysqli_fetch_array($dbase)) { ?>
	              <option><?php echo $db['Database']; ?></option>
	            <?php } ?>
			</select>
			<br>
			<label>Pilih file :</label>
			<br>
			<input type="tekt" name="filename">
			<br>
			<button type="submit" name="backup">Backup</button>
		</form>
	</div>
	<br>
	<div style="min-height: 300px;">
		<table border="1" width="100%" style="text-align: center;">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Penyimpanan</th>
					<th>Waktu</th>
				</tr>
			</thead>
			<?php 
				$query = mysqli_query($koneksi,"SELECT * FROM databackup");
			?>
			<?php 
				while ($data = mysqli_fetch_array($query)) {
			?>
			<tbody>
				<tr>
					<td><?php echo $data['idbackup'] ?></td>
					<td><?php echo $data['nama'] ?></td>
					<td><?php echo $data['penyimpanan'] ?></td>
					<td><?php echo $data['waktu'] ?></td>
				</tr>
			</tbody>
			<?php 
				}
			?>
		</table>
	</div>
</body>
</html>