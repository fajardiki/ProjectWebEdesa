<html lang="en">
<head>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../../login/font-awesome/css/all.css">
  <link rel="stylesheet" href="../css/bootstrap.min.css">

  <link rel="stylesheet" type="text/css" href="../../index/css/style.css">

<title>status pengajuan</title>
</head>
<body>
  <div class="container" id="container-utama">
    <!-- header -->
    <div class="row bg-dark" id="header">
      <div class="col-sm-lg-md-xs-2" id="img-logo">
        <img src="../../index/img/Situbondo.png" class="img-fluid" style="width: 130px; height: 150px;">
      </div>
      <div class="col-sm-lg-md-xs-10" id="text-header">
        <h1>E-Desa</h1>
        <h2>Sistem Administrasi Surat Desa</h2>
      </div>
    </div>
    <!-- akhir header -->

    <!-- navbar -->
    <nav class="navbar navbar-expand-md bg-warning navbar-light" id="navbar">
      <!-- Brand -->
      <a class="navbar-brand" href="../../index/index_admin.php">Home</a>

      <!-- Toggler/collapsibe Button -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Navbar links -->
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav mr-auto">

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Pengajuan
            </a>
            <div class="dropdown-menu bg-warning" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="fasilitas.php">Pengajuan Offline</a>
              <a class="dropdown-item" href="../permohonan-online/permohonan_masuk.php">Pengajuan Online</a>
              <a class="dropdown-item" href="../../index/statuspengajuan_admin.php">Status Pengajuan</a>
            </div>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Pengarsipan
            </a>
            <div class="dropdown-menu bg-warning" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="../../index/arsipdokumentasikegiatan.php"">Arsip Dokumentasi Kegiatan</a>
              <a class="dropdown-item" href="../../pengarsipan/datapengajuan.php">Arsip Data Pengajuan</a>
              <a class="dropdown-item" href="../../pengarsipan/formsuratkeluardata.php">Arsip Surat Pengajuan</a>
              <a class="dropdown-item" href="../../index/backupandrestore.php">Backup dan Restore</a>
            </div>
          </li>
          <li class="nav-item"> 
            <a class="nav-link" href="../../index/edit_pengumuman.php">Pengaturan</a>
          </li>
          <li class="nav-item"> 
            <a class="nav-link" href="../tambah_data.php">Data Warga</a>
          </li>
        </ul>
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-user" aria-hidden="true"></i>
            </a>
            <div class="dropdown-menu bg-warning" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="../../index/ubah_profil_admin.php">Edit profil</a>
              <a class="dropdown-item" href="../../index/config/logout.php">Log out</a>
            </div>
        </ul>
      </div> 
    </nav>
    <!-- akhir navbar -->

    <!-- isi -->
    <div class="container" id="isi">
      <div class="row">
        <div class="col-sm-12">
          <div class="judul">
            <br>
            <h1 align="center">Surat pengajuan</h1>
            <br>
          </div>
          <div class="list">
          <form>
		 	<table class="table table-bordered" align="center" style="width: 900px;">
		 		<thead>
		 		<tr style="text-align: center; font-size: 20px;">
		 			<th>Kode Surat </th>
		 			<th>Nama surat yang tersedia untuk pengajuan online</th>
		 			</tr>
		 		</thead>
		 		<?php 
		 			$query = mysqli_query($koneksi, "SELECT * FROM surat");
		 		?>
		 	 	<?php 
		 	 		while ($surat = mysqli_fetch_array($query)) {
		 	  	?>
		 			<tbody>
		 				<tr>
		 					<td style="text-align: center;"><?php echo $surat ['kode_surat']; ?>
              </td>
		 					<td><a href="../config/cari.php?kode_surat=<?php echo $surat['kode_surat']; ?>"><?php echo $surat ['nama_surat']; ?></a></td>
		 				</tr>
		 			</tbody>
		 		<?php 
		 			};
		 		?>
		 	</table>
		 </form>
		 </div>
        </div>
      </div>
    </div>
    <br><br>
    <!-- akhir isi -->

    <!-- footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center">
            <p>&copy; copyright | build by. <a href="#">Apa Aja</a></p>
            <p><a href="" class="btn btn-primary">Facebook desa</a></p>
          </div>
        </div>
      </div>
    </footer>
    <!-- akhir footer -->
  </div>

  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script type="text/javascript" src="../js/script.js"></script>
  <script src="../../index/js/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="../js/bootstrap.min.js"></script>
</body>
</html>