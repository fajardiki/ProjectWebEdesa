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

    <title>Arsip Data Pengajuan</title>
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
            <h2 align="center"> <strong> Arsip Data Pengajuan</strong> </h1>
            <br>
          </div>
         <div style="margin-bottom:15px; margin-right: 10px;" >
            <form action="data_pengajuan.php">
            <table class="table table-bordered">
              <thead>
                <tr style="background-color: skyblue;" align="center">
                  <th>NIK</th>
                  <th>Nama</th>
                  <th>Jenis Kelamin</th>
                  <th>Surat</th>
                  <th>Tanggal pengajuan</th>
                </tr>
              </thead>
 
                <?php foreach ($dataarsip as $tampilkan) {
                     ?>
               <tbody>
                <tr>
                  <td><?php echo $tampilkan->nik ?></td>
                  <td><?php echo $tampilkan->nama ?></td>
                  <td><?php echo $tampilkan->jenis_kelamin ?></td>
                  <td><?php echo $tampilkan->nama_surat ?></td>
                  <td align="center"><?php echo $tampilkan->tanggal_pengajuan ?></td>
              </tbody>
              <?php 
                }
              ?>
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