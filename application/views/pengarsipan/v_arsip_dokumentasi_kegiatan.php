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

      <?php $this->load->view($navbar) ?>
    

    <div class="container-fluid">
         <!-- isi -->
      <div class="row">
         <div class="container-fluid" id="isi" style="margin-bottom: -11px;">
          <div class="col-sm-12 julsip text-center">
            <br><h2>
                <strong>
                  <?php echo $tittle ?>
                </strong>
            </h2><br>
          </div>
        </div>
        <div class="container-fluid" id="isi">
          <div class="row">

            <!-- sidebar -->
            <div class="col-sm-3 bg-warning sidebar">
              <div class="collapse d-sm-flex pt-2 pb-2" id="sidebar">
                <ul class="nav flex-column flex-nowrap">
                    <li class="nav-item sideitem"><a class="nav-link text-dark" href="<?php echo base_url().'c_pengarsipan/hutdesa' ?>">HUT Desa</a></li>
                    <li class="nav-item sideitem"><a class="nav-link text-dark" href="<?php echo base_url().'c_pengarsipan/rapat_bulanan' ?>">Rapat Bulanan</a></li>
                    <li class="nav-item sideitem"><a class="nav-link text-dark" href="<?php echo base_url().'c_pengarsipan/lomba_agustusan' ?>">Lomba Agustusan</a></li>
                     <li class="nav-item sideitem"><a class="nav-link text-dark" href="<?php echo base_url().'c_pengarsipan/posyandu' ?>">Posyandu</a></li>
                </ul>
              </div>
            </div>
            <!-- akhir sidebar -->

            <!-- isi sidebar -->
            <div class="col-sm-9 isi_sbar">
              <?php 
                if (isset($side1)) {
                  $this->load->view('pengarsipan/'.$side1);
                } elseif (isset($side2)) {
                  $this->load->view('pengarsipan/'.$side2);
                } elseif (isset($side3)) {
                  $this->load->view('pengarsipan/'.$side3);
                } else {
                  $this->load->view('pengarsipan/'.$side4);
                }
              ?>
                     
             </div>
          </div>
          <br>
        </div>
      </div>
    </div>

        <!-- akhir isi sidebar -->

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