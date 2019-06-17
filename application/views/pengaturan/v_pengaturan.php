<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/style_user.css' ?>">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Pengaturan</title>
  </head>
  <body>
    <div class="container-fluid">
      <!-- Header -->
      <?php $this->load->view($head) ?>
      <!-- Akhir Header -->

      <?php $this->load->view($navbar) ?>
    

    <div>
         <!-- isi -->
      <div class="row">
         <div class="container-fluid" id="isi" style="margin-bottom: -11px;">
          <div class="col-sm-14 julsip text-center">
            <br><h2>
                <strong>
                    <div>
                    <ul class="list-group">
                          <li class="list-group-item " style="height: 70px;">
                            <?php echo $tittle ?>
                          </li>
                    </ul>
                  </div>
                </strong>
            </h2><br>
          </div>
        </div>

            <!-- sidebar -->
            <div class="col-sm-3 sidebar">
              <div class=" pb-2" id="sidebar">
                <b>
                <ul class="list-group ">
                    <li class="list-group-item"><a class="nav-link text-dark" href="<?php echo base_url().'c_pengaturan/tambahpengumuman' ?>">Tambah Pengumuman </a></li>
                    <li class="list-group-item"><a class="nav-link text-dark" href="<?php echo base_url().'c_pengaturan/lihatpengumuman' ?>">Lihat Pengumuman</a></li>
                    <li class="list-group-item"><a class="nav-link text-dark" href="<?php echo base_url().'c_pengaturan/tambahslideshow' ?>">Tambah Foto Slideshow</a></li>
                    <li class="list-group-item"><a class="nav-link text-dark" href="<?php echo base_url().'c_pengaturan/lihatfoto' ?>">Lihat Foto</a></li>
                </ul>
                </b>
              </div>
            </div>
            <!-- isi sidebar -->
              
        
              <div class="col-sm-9 isi_sbar ">
                  <ul class="list-group">
                      <li class="list-group-item " style="height: 100%;">
                      <?php 
                          if (isset($side1)) {
                              $this->load->view('pengaturan/'.$side1);
                          } elseif (isset($side2)) {
                              $this->load->view('pengaturan/'.$side2);
                          } elseif (isset($side3)) {
                              $this->load->view('pengaturan/'.$side3);
                          } else{
                              $this->load->view('pengaturan/'.$side4);
                          }
                      ?>
                      </li>
                  </ul>
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