<!DOCTYPE html>
<html>
<head>
	<title>PROFIL DESA</title>
	<link type="text/css" rel="stylesheet" href="style2.css"/>

<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/style_user.css' ?>">

    <!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body id="wrapper">
<div class="container-fluid">

		<?php $this->load->view($head) ?>
	  	<!-- Akhir Header -->

	  	<?php $this->load->view($navbar) ?>
	  	
	<div id="header"><h1 class="text-white">PROFIL DESA<br></h1></div>
		<div id="form_top"></div>
		<div id="form_content">
		<div class="container">
			<div class="row">
            	<div class="col-lg-6">
				<div id="form_judul"><b><h3 class="text-danger">SEJARAH DESA<br></h3></b></div>
				<div id="isi">
				<p><b>	Tribungan atau biasa disebut 'Trebungan' berasal dari kata dalam Bahasa Madura 'Tribung' yang artinya pohon siwalan. Mungkin dahulunya daerah ini banyak terdapat pohon siwalan sehingga orang-orang menyebut Trebungan.</b></p>
				<p><b>	Masyarakat di Desa Trebungan sebagian besar bekerja sebagai petani, buruh tani dan pedagang.</b></p>
				</div>
				</div>
				
				<div class="col-lg-6">
				<div id="form_judul"><h3 class="text-danger">LOKASI DESA<br></h3></div>
				<div id="isi">
				<p><b>	Trebungan adalah desa yang terletak di Kecamatan Mlandingan Ujung Timur. Desa Trebungan berbatasan dengan desa-desa lain diantaranya:</b></p>
				<p><b>Sebelah timur = Desa Silowogo</b></p>
				<p><b>Sebelah selatan = Desa Sumber Anyar</b></p>
				<p><b>Sebelah barat = Desa Meranggi dan Desa Sumber Pinang</b></p>
				<p><b>Sebelah utara = Desa Mlandingan Wetan</b></p>
				<table border="4" style="margin-left: 80px">
					<tr><td><b> Kelurahan / Desa : Trebungan</b></td></tr>
					<tr><td><b>	Kecamatan : Mlandingan</b></td></tr>
					<tr><td><b> Kabupaten / Kota : Situbondo</b></td></tr>
					<tr><td><b> Provinsi : Situbondo</b></td></tr>
					<tr><td><b> Kode Pos : 68353</b></td></tr>
				</table>
				</div>
				</div>
			</div>
		<div id="form_judul"><b><h3 class="text-danger">STRUKTUR ORGANISASI DESA<br></h3></b>
		<div id="isi" style="text-align: center;">
			<img src="<?php echo base_url().'assets/img/struktur desa.JPG' ?>">
		</div>
		</div>
		</div>
		</div>
		<?php $this->load->view($foot) ?>
		</div>
</body>
</html>