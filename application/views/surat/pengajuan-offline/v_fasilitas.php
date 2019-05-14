<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/style_user.css' ?>">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Halaman Utama E-Desa</title>
  </head>

  <body>
    <div class="container-fluid">
      <!-- Header -->
      <?php $this->load->view($head) ?>
      <!-- Akhir Header -->

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
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pengajuan</a>
                                <div class="dropdown-menu bg-warning" aria-labelledby="navbarDropdownMenuLink">
                                      <a class="dropdown-item" href="<?php echo base_url('c_dasbord/pengajuan') ?>">Pengajuan Offline</a>
                                      <a class="dropdown-item" href="../surat/permohonan-online/permohonan_masuk.php">Pengajuan Online</a>
                                      <a class="dropdown-item" href="statuspengajuan_admin.php">Status Pengajuan</a>
                                </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Pengarsipan</a>
                                <div class="dropdown-menu bg-warning" aria-labelledby="navbarDropdownMenuLink">
                                      <a class="dropdown-item" href="arsipdokumentasikegiatan.php">Arsip Dokumentasi Kegiatan</a>
                                      <a class="dropdown-item" href="../pengarsipan/datapengajuan.php">Arsip Data Pengajuan</a>
                                      <a class="dropdown-item" href="../pengarsipan/formsuratkeluardata.php">Arsip Surat Pengajuan</a>
                                      <a class="dropdown-item" href="backupandrestore.php">Backup dan Restore</a>
                                </div>
                    </li>
            
                    <li class="nav-item"> 
                        <a class="nav-link" href="../pengaturan/edit_pengumuman.php">Pengaturan</a>
                    </li>
                    

                    <li class="nav-item"> 
                        <a class="nav-link" href="../surat/tambah_data.php">Tambah data</a>
                    </li>
            </ul>

            <ul class="navbar-nav">
                    <span class="navbar-text"> </span>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img style="width: 50px;" src="<?php echo base_url().'assets/img/desa.jpg' ?>">
                            Fajar Siddiqi Putu Sa'ed
                        </a>
                        
                        <div class="dropdown-menu dropdown-menu-right bg-warning" aria-labelledby="navbarDropdownMenuLink">
                        <div class="profile">
                              <div class="row">
                                    <div class="col">
                                        <img src="<?php echo base_url().'assets/img/desa.jpg' ?>" alt="..." class="img-thumbnail">
                                    </div>
                              </div>
                        <div class="row">
                              <div class="col">
                                    <p>Fajar Siddiqi putu sa'ed</p>
                                    <p>Haiiiii iii</p>
                              </div>
                        </div>
                        </div>
                
                      <a class="dropdown-item" href="ubah_profil_admin.php">Edit profil</a>
                      <a class="dropdown-item" href="config/logout.php">Log out</a>
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
                      <?php $this->m_user->surat_fasilitas_offline() ?>
                  <tbody>
                      <tr>
                        <td style="text-align: center;"> </td>
                        <td><a href="../config/cari.php"></a></td>
                      </tr>
                  </tbody>
              </table>
          </form>
          </div>
        
        </div>
      </div>
    </div>

    <!-- akhir isi -->

      <!-- Footer -->
      <?php $this->load->view($foot) ?>
      <!-- Akhir Footer -->
   </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>