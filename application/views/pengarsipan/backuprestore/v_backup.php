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
			<select type="tekt" name="dbname" style="padding: 5px; width: 200px; padding-bottom: 10px; margin-bottom: 10px;">
			  <?php foreach ($show as $db) { ?>
	              <option><?php echo $db->Database; ?></option>
	          <?php } ?>
			</select>
			<br>
			<label>Nama File :</label>
			<br>
			<input type="tekt" name="filename" style="padding: 5px; width: 200px; margin-bottom: 10px;">
			<br>
			<button type="submit" class="btn btn-info btn-sm" name="backup">Backup</button>
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

			<?php foreach ($bckp as $db) { ?>
			<tbody>
				<tr>
					<td><?php echo $db->idbackup ?></td>
					<td><?php echo $db->nama ?></td>
					<td><?php echo $db->penyimpanan ?></td>
					<td><?php echo $db->waktu ?></td>
				</tr>
			</tbody>
			<?php 
				}
			?>
		</table>
	</div>
</body>
</html>