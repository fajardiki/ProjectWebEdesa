<!DOCTYPE html>
<html>
<head>
  <title>PANDUAN APLIKASI</title>
  <link type="text/css" rel="stylesheet" href="style2.css"/>

  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/style_user.css' ?>">

      <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<title>E-desa_user</title>
</head>
<body>
  <div class="container-fluid">

    <?php $this->load->view($head); ?>
      <!-- Akhir Header -->

      <?php $this->load->view($navbar); ?>
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
                     <?php foreach ($surat as $tampilkan) {
                     ?>
                  <tbody>
                      <tr>
                        <td style="text-align: center;"> <?php echo $tampilkan->kode_surat ?> </td>
                        <td>
                          <a href="<?php echo base_url().'c_surat/formpengajuanwarga/'.$tampilkan->kode_surat; ?>">
                            <?php echo $tampilkan->nama_surat ?> 
                          </a>
                       </td>
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
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>