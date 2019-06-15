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
            <h1 align="center">Status pengajuan</h1>
            <br>
          </div>
          <div class="table">
            <table class="table table-bordered">
              <thead>
                <tr align="center">
                  <th>NIK</th>
                  <th>Jenis Surat</th>
                  <th>Tanggal</th>
                  <th>Status</th>
                </tr>
              </thead>
              <?php foreach ($status->result_array() as $sp) { ?>
              <tbody>
                
                <tr>
                  <td><?php echo $sp['nik'] ?></td>
                  <td><?php echo $sp['nama_surat'] ?></td>
                  <td><?php echo $sp['tanggal_pengajuan'] ?></td>
                  <td><?php echo $sp['status_pengajuan'] ?></td>
                </tr>
                
              </tbody>
              <?php } ?>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- akhir isi -->
<?php $this->load->view($foot) ?>
  </div>
  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>