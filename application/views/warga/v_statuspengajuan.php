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
  <script type="text/javascript" src="js/script.js"></script>
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>