<?php $nama = $this->session->userdata('user'); ?>
<?php foreach ($nama as $us) {
  $namaadmin = $us['nama'];
} ?>

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
      <?php $this->load->view($navbar) ?>
      <!-- akhir navbar -->
    
      <!-- isi -->
<div class="container" id="isi">
      <div class="row">
        <div class="col-sm-12">
          <div class="judul">
            <br>
            <h1 align="center">Daftar Surat</h1>
            <br>
          </div>
           <?php foreach ($surat as $tampilkan) {
            ?>
          <form action="../surat.php" method="POST" enctype="multipart/form-data">
            <div class="row">
              <div class="col-25">
                <label for="lname">Nama </label>
              </div>
              <div class="col-75">
                <input type="text" name="nama" id="nik" value="<?php echo $data1['nama']; ?>" autocomplete="off">
              </div>
            </div>
            <div class="row">
              <div class="col-25">
                <label for="country">NIK </label>
              </div>
              <div class="col-75">
                 <input type="text" name="nik" id="nama" value="<?php echo $nik ?>" autocomplete="off">
              </div>
            </div>
            <div class="row">
              <div class="col-25">
                <label for="subject">Jenis surat </label>
              </div>
              <div class="col-75">
                <input type="text" name="jenis" id="umur" value="<?php echo $data['nama_surat']; ?>" 
                autocomplete="off">
                <input type="hidden" name="ks" value="<?php echo $kode_surat?>">
              </div>
            </div>
            <div class="row">
              <div class="col-25">
                <label for="subject">Keperluan </label>
              </div>
              <div class="col-75">
               <input type="text" name="keperluan" id="jenis_kelamin" placeholder="keperluan pengajuan ...." autocomplete="off">
              </div>
            </div>
            <div class="row">
              <div class="col-25">
              </div>
              <div class="col-75">
                <input class="btn-primary" type="submit" value="Layout" name="submit" autocomplete="off">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <br>
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