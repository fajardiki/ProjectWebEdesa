<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Halaman Login</title>
  </head>
  <body>
   
  <nav class="navbar navbar-dark bg-dark">
     <div class="container-fluid">
      <a class="navbar-brand">
        <img src="<?php echo base_url().'assets/brand/logo.png' ?>" width="80" height="30" alt="">
      </a>
      <form class="form-inline" action="<?php echo base_url().'c_login/login_warga' ?>" method="post">
        <div class="form-group">
          <input type="text" class="form-control" id="staticEmail2" placeholder="Username" name="username">
        </div>
        <div class="form-group mx-sm-3">
          <input type="password" class="form-control" id="inputPassword2" placeholder="Password" name="password">
        </div>
        <button type="submit" class="btn btn-primary" name="btnlogin">Login</button>
      </form>
     </div>
  </nav>

  <br>

  <div class="container">
    <h2 align="center">Buat Akun Anda Di Web Desa</h2>
    <hr style="background-color: #000; width: 50%;">
    <br>
    <div class="row">


      <div class="col-sm-6 mb-3">
          <img src="<?php echo base_url().'assets/img/desa.jpg' ?>" class="img-fluid mb-3" alt="Responsive image" style="border-radius: 4px">
          <h4 class="mb-0">Desa Tribungan</h4>
          <h6>Kec. Mlandingan Kab. Situbondo</h6>
          <h6>No. Telp : 08x xxx xxx xxx</h6><h6>Kode Pos : 68363</h6>
      </div>

      <br>

      <div class="col-sm-6">
        <form>
          <div class="form-group">
            <label for="inputAddress">NIK</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="Masukkan nik">
          </div>
          <div class="form-group">
            <label for="inputAddress">Nama</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="Masukkan nama">
          </div>
          <div class="form-group">
            <label for="inputAddress">Email</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="Email">
          </div>
          <div class="form-group">
            <label for="inputAddress2">No. Telp</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="Nomer Telp">
          </div>
          <div class="form-group">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="gridCheck">
              <label class="form-check-label" for="gridCheck">
                Check me out
              </label>
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Sign in</button>
        </form>
      </div>
    </div>
  </div>
 

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>