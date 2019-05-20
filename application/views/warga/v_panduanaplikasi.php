<!DOCTYPE html>
<html>
<head>
	<title>PANDUAN APLIKASI</title>
	<link type="text/css" rel="stylesheet" href="style2.css"/>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/style_user.css' ?>">

	    <!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body id="wrapper">
<div class="container-fluid">

		<?php $this->load->view($head); ?>
	  	<!-- Akhir Header -->

	  	<?php $this->load->view($navbar); ?>
	<div id="header"><h1 class="text-white">PANDUAN APLIKASI<br></h1></div>
		<div id="form_top"></div>
		<div id="form_content">
		<div class="container"  style="padding-left: 20px;" "padding-top: 20px;" "padding-bottom: 20px;">
			<div id="isi">
				<p><b>E-Desa adalah Sistem Administrasi Surat Desa, dimana web untuk pelayanan surat-menyurat desa secara online maupun offline di Desa Trebungan.</b></p>
				<p><b>Adapun tata cara penggunaan Aplikasi ini adalah sebagai berikut : </b></p>
				<p><b>1. Pastikan Anda sebagai warga sudah memiliki akun untuk bisa masuk di web ini.</b></p>
				<p><b>2. Menu home sebagai tampilan utama yang menampilkan foto dan biodata singkat Anda sebagai user, pengumuman terbaru, foto dokumentasi kegiatan terbaru dari desa ini.</b></p>
				<p><b>3. Menu informasi menyediakan beberapa informasi mengenai profil desa ini dan panduan aplikasi E-Desa ini.</b></p>
				<p><b>4. Menu fasilitas sebagai menu utama aplikasi ini yaitu menyediakan formulir pengajuan surat untuk Anda dan cek status pengajuan Anda.</b></p>
				<p><b>	a. Formulir Pengajuan, langkah pertama Anda memilih surat yang ingin diajukan -> Persyaratan dari pengajuan surat tersebut -> Pengisian data diri dan persyaratan -> Menunggu konfirmasi dari admin -> Jika diterima, Anda bisa melanjutkan langkah berikutnya yaitu cetak surat -> Jika ditolak, Anda harus mengisi data diri dan melengkapi persyaratan dengan baik dan benar -> Kemudian meminta TTD Kepala Desa secara manual yaitu datang ke Kantor Desa -> Selesai.</b></p>
				<p><b>	b. Cek Status Pengajuan, menu untuk Anda mengecek status pengajuan surat yang Anda ajukan.</b></p>
				<p><b>5. Menu user sebagai menu untuk Anda yang ingin mengedit foto profil maupun password dari akun Anda serta menu untuk Anda Logout dari akun Anda.</b></p>
				<p><b>TERIMA KASIH</b></p>
			</div>
		</div>
		</div>
		<?php $this->load->view($foot) ?>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>