<!doctype html>
<html lang="en">
<head>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../login/font-awesome/css/all.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <link rel="stylesheet" type="text/css" href="css/style.css">

<title>EDIT PENGUMUMAN</title>
<script type="text/javascript">
  function PreviewImage() {
    var oFReader = new FileReader();
    oFReader.readAsDataURL(document.getElementById("uploadgambar").files[0]);

    oFReader.onload = function (oFREvent) {
      document.getElementById("uploadPreview").src = oFREvent.target.result;
    };
  };
</script>
</head>
<body>
  <div class="container" id="container-utama">
    <!-- header -->
    <div class="row bg-dark" id="header">
      <div class="col-sm-lg-md-xs-2" id="img-logo">
        <img src="img/Situbondo.png" class="img-fluid" style="width: 130px; height: 150px;">
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
      <a class="navbar-brand" href="index_admin.php">Home</a>

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
              <a class="dropdown-item" href="pengajuan_admin.php">Pengajuan Offline</a>
              <a class="dropdown-item" href="#">Pengajuan Online</a>
              <a class="dropdown-item" href="statuspengajuan_admin.php">Status Pengajuan</a>
            </div>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Pengarsipan
            </a>
            <div class="dropdown-menu bg-warning" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="arsipdokumentasikegiatan.php">Arsip Dokumentasi Kegiatan</a>
              <a class="dropdown-item" href="../pengarsipan/datapengajuan.php">Arsip Data Pengajuan</a>
              <a class="dropdown-item" href="../pengarsipan/formsuratkeluardata.php">Arsip Surat Pengajuan</a>
              <a class="dropdown-item" href="backupandrestore.php">Backup dan Restore</a>
            </div>
          </li>
          <li class="nav-item"> 
            <a class="nav-link" href="edit_pengumuman.php">Pengaturan</a>
          </li>
          <li class="nav-item"> 
            <a class="nav-link" href="../surat/tambah_data.php"> Data Warga</a>
          </li>
        </ul>
         <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-user" aria-hidden="true"></i>
            </a>
            <div class="dropdown-menu bg-warning" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="ubah_profil_admin.php">Edit Profil</a>
              <a class="dropdown-item" href="config/logout.php">Log Out</a>
            </div>
        </ul>
      </div> 
    </nav>
        <!-- <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="config/logout.php">User</a>
          </li>
        </ul>
      </div> 
    </nav> -->
    <!-- akhir navbar -->

    <!-- isi -->

    <div class="container head-hal" id="isi">
    <div class="row">
    <div class="col-sm-12 julsip">
      <br><h1>PENGATURAN</h1><br>
    </div>
    </div>
    <div id="form_top_artikel"></div>
    <div id="form_content_artikel">
    <div class="container-body">
    <div class="row">
      <div class="col-lg-4" style="background-color: #fd7e14;"><br>
        <ul><b>PENGUMUMAN</b><br>
          <li><b><a href="edit_pengumuman.php">TAMBAH PENGUMUMAN</a></b></li>
          <li><b><a href="update_pengumuman.php">LIHAT PENGUMUMAN</a></b></li>
        </ul>
        <ul><b>FOTO</b>
          <li><b><a href="edit_foto.php">TAMBAH FOTO SLIDE SHOW</a></b></li>
          <li><b><a href="update_foto.php">LIHAT FOTO</a></b></li>
        </ul>
      </div>

      <div class="col-lg-8" style="text-align: center;">
        <div id="isi-body">
          <form action="" method="post" enctype="multipart/form-data">
            <p><h4 class="text-black" align="left"><b><u>PENGUMUMAN</u></b></h4></p><br>
              <p><b>JUDUL<br><input type="text" name="judul" class="atur_judul" style="width: 300px;"></b></p>
              <br>
              <p><b>ISI PENGUMUMAN<br><textarea name="isi_pengumuman" class="atur_isi" style="width: 300px; height: 150px;"></textarea></b></p>
              <br>
              <p><b>GAMBAR<br><img id="uploadPreview" class="atur_gambar" style="width: 200px; height: 200px;">
                <p><input id="uploadgambar" type="file" name="gambar" onchange="PreviewImage() ;"><br></p>
              <br>
              <p><input type="submit" name="posting" value="Posting" class="atur_posting" href="update_pengumuman.php"></p>
              </b></p><br>
          </form>
        </div>
      </div>
    </div>
    </div>
    </div>
        <!-- sidebar -->

        <!-- akhir isi sidebar -->

        <br><footer>
          <div class="container">
            <div class="row">
              <div class="col-sm-12 text-center">
                <p>&copy; copyright | build by. <a href="#">Apa Aja</a></p>
                <p><a href="" class="btn btn-primary">Facebook desa</a></p>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
  </div>


  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script type="text/javascript" src="js/script.js"></script>
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>