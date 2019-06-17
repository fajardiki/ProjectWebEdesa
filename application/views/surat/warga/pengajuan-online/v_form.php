<?php $nama = $this->session->userdata('user'); ?>
<?php foreach ($nama as $us) {
  $namaadmin = $us['nama'];
} ?>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/style_user.css'?>">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Daftar Surat</title>

    <style>
     * {
  box-sizing: border-box;
  }

  input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
  }

  label {
    padding: 6px 12px 12px 30px;
    display: inline-block;
  }

  input[type=submit] {
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
  }

  input[type=submit]:hover {
     background-color: #45a049;
  }

  .col-25 {
    margin-left: 350px;
    padding-left: 30px;
    float: right;
    width: 15%;
    margin-top: 6px;
  }

  .col-75 {
    float: left;
    width: 25%;
    margin-top: 6px;
  }

  /* Clear floats after the columns */
  .row:after {
    content: "";
    display: table;
    clear: both;
  }

  /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
  @media screen and (max-width: 600px) {
    .col-25, .col-75, input[type=submit] {
      width: 100%;
      margin-top: 0;
    }
  }
   </style>
  </head>

  <body>
    <div class="container-fluid">
      <!-- Header -->
      <?php $this->load->view($head) ?>
      <!-- Akhir Header -->

      <!-- navbar -->
      <?php $this->load->view($navbar) ?>
      <!-- akhir navbar -->

      <?php $nama = $this->session->userdata('user'); ?>
      <?php foreach ($nama as $us) {
        $namauser = $us['nama'];
        $niks = $us['nik'];
      } ?>

      <?php foreach ($nik->result_array() as $nk) {
        $namas = $nk['nama_surat'];
        $kodesurat = $nk['kode_surat'];
      } ?>
    
      <!-- isi -->
    <div class="container" id="isi">
      <div class="row">
        <div class="col-sm-12">
          <div class="judul">
            <br>
            <h2 align="center"> <strong> Daftar Surat </strong> </h1>
            <br>
          </div>
          <form action="<?php echo base_url().'c_surat/uploudpengajuan' ?>" method="POST" enctype="multipart/form-data">
            <div class="row">

              <div class="col-75" hidden="true">
                <input type="text" name="ksurat" id="nama" value="<?php echo $kodesurat; ?>" autocomplete="off">
              </div>

              <div class="col-25">
                <label for="lname">Nama </label>
              </div>
              <div class="col-75">
                <input type="text" name="nama" id="nama" value="<?php echo $namauser; ?>" autocomplete="off">
              </div>
            </div>
            <div class="row">
              <div class="col-25">
                <label for="country">NIK </label>
              </div>
              <div class="col-75">
                 <input type="text" name="nik" id="nik" value="<?php echo $niks; ?>" autocomplete="off">
              </div>
            </div>
            <div class="row">
              <div class="col-25">
                <label for="subject">Scan ktp </label>
              </div>
              <div class="col-75">
                <input type="file" name="gambarktp">
              </div>
            </div>
            <div class="row">
              <div class="col-25">
                <label for="subject">Scan kk </label>
              </div>
              <div class="col-75">
                <input type="file" name="gambarkk">
              </div>
            </div>
            <div class="row">
              <div class="col-25">
                <label for="subject">Jenis surat </label>
              </div>
              <div class="col-75">
                <input type="text" name="jenis" id="umur" value="<?php echo $namas; ?>" 
                autocomplete="off">
                <input type="hidden" name="ks" value="">
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
                <input class="btn-primary" type="submit" value="Kirim" name="submit" autocomplete="off">
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