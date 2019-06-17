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

    <title>Pengajuan Online</title>
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

     
              <div class="col-sm-14 isi_sbar center" style="margin-top: 10px; margin-bottom: 10px;">

                  <ul class="list-group">
                      <li class="list-group-item" style="height: 100%;">
                        <!--  <a class="btn btn-info text-white" style="float: right;">Cetak</a> -->
                      <?php 
                          if (isset($side1)) {
                              $this->load->view('surat/jenis_surat/'.$side1);
                          } elseif (isset($side2)) {
                              $this->load->view('surat/jenis_surat/'.$side2);
                          } elseif (isset($side3)) {
                              $this->load->view('surat/jenis_surat/'.$side3);
                          } elseif (isset($side4)) {
                              $this->load->view('surat/jenis_surat/'.$side4);
                          } else{
                              $this->load->view('surat/jenis_surat/'.$side5);
                          }
                      ?>
                      </li>
                  </ul>
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