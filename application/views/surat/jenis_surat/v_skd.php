<!DOCTYPE html>
<html>
<head>
	<title>Surat Keterang Tidak Mampu</title>
	<style>
		.tepi {
			padding: 250px;
			padding-top: 50px;
		}

		.header {
			text-align: center;
		}

		h2 {
			margin-bottom: -10px;
		}

		h1 {
			margin-bottom: -10px;
		}

		hr {
			background-color: #000;
			background-size: 2px; 
		}

		.isi {
			text-align: justify;
		}
	</style>
</head>
<body>

	<div class="container"> <!-- pakai class="tepi" -->
		<div class="header">
			<h2>PEMERINTAH KABUPATEN SITUBONDO</h2>
			<h2>KECAMATAN MLANDINGAN</h2>
			<h1>DESA TRIBUNGAN</h1>
			<p>Jalan Selowogo No. 01 Mlandingan 68358</p>
		</div>
		<hr>
		<div class="isi">
			<div class="judul" style="text-align: center;">
				<h3 style="margin-bottom: -5px;"><u>SURAT KETERANGAN DOMISILI (SKD)</u></h3>
				<h4>Nomor :</h4>
			</div>
			<br>
			<div>
				<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yang bertanda tangan di bawah ini Kepala Desa Trebungan Kecamatan Mlandingan Kabupaten Situbondo Menerangkan Dengan Sebenarnya Bahwa :</p>
				<table>
					 <?php foreach ($warga as $data) {
					 	$nik = $data->nik;
                        $namawarga = $data->nama;
                        $jenis_kelamin = $data->jenis_kelamin;
                        $tempat_lahir = $data->tempat_lahir;
                        $tanggal_lahir = $data->tanggal_lahir;
                        $perkawinan = $data->perkawinan;
                        $pendidikan = $data->pendidikan;
                        $agama = $data->agama;
                        $pekerjaan = $data->pekerjaan;
                      } ?>
					<tr>
						<td style="width: 25px;">1.</td>
						<td style="width: 200px;">Nama Lengkap</td>
						<td>:&nbsp;<?php echo $namawarga; ?></td>
					</tr>
					<tr>
						<td>2.</td>
						<td>Jenis Kelamin</td>
						<td>:&nbsp;<?php echo $jenis_kelamin; ?></td>
					</tr>
					<tr>
						<td>3.</td>
						<td>Tempat Tanggal Lahir</td>
						<td>:&nbsp;<?php echo $tempat_lahir; echo $tanggal_lahir; ?></td>
					</tr>
					<tr>
						<td>4.</td>
						<td>Status Perkawinan</td>
						<td>:&nbsp;<?php echo $perkawinan; ?></td>
					</tr>
					<tr>
						<td>5.</td>
						<td>Pendidikan</td>
						<td>:&nbsp;<?php echo $pendidikan; ?></td>
					</tr>
					<tr>
						<td>6.</td>
						<td>Kewarganegaraan</td>
						<td>: Indonesia</td>
					</tr>
					<tr>
						<td>7.</td>
						<td>Agama</td>
						<td>:&nbsp;<?php echo $agama; ?></td>
					</tr>
					<tr>
						<td>8.</td>
						<td>Pekerjaan</td>
						<td>:&nbsp;<?php echo $pekerjaan; ?></td>
					</tr>
					<tr>
						<td>9.</td>
						<td>Nomor KTP</td>
						<td>:&nbsp;<?php echo $nik; ?></td>
					</tr>
					<!-- 	<?php foreach ($warga as $data) {
					   	$alamat = $data->alamat;
                        $desa = $data->desa;
                        $kecamatan = $data->kecamatan;
                        $kabupaten = $data->kabupaten;
                        } ?> -->
					<tr>
					<td>10.</td>
						<td>Alamat</td>
						<td>:&nbsp;<?php echo $alamat; echo $desa; echo $kecamatan; echo $kabupaten; ?></td>
					</tr>
					<tr>
						<td>11.</td>
						<td>Keperluan</td>
						
             			<?php foreach ($permohonan as $prmhn) {
                      		$keperluan = $prmhn->keperluan;
                     	 } ?>
							<td>:&nbsp;<?php echo $keperluan; ?></td>
					</tr>
					<tr>
						<td>12.</td>
						<td>Keterangan</td>
						<td>: Bahwa nama yang tersebut di atas benar - benat Penduduk Desa Trebungan Kecamatan Mlandingan Kabupaten Situbondo.</td>
					</tr>
				</table>
				<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian Surat Keterangan ini kami buat dengan sebenar - benarnya dan semoga dapat digunakan sebagaimana mestinya.</p>
				<br>
						<div style="float: right; text-align: center;">
							<p>Trebungan, <?php echo date('d M Y'); ?></p>
							<p>Kepala Desa / Lurah Trebungan</p>
							<br><br><br>
							<P>Hadi Santosa, S.Kom</P>
						</div>
			</div>
		</div>
	</div>
	
	
	

</body>
</html>