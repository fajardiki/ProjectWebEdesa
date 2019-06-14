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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/bootstrap/font-awesome/css/all.min.css' ?>">
    

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
        <div class="col-sm-12 col-sm-lg-md-xs-2">
          <br>
          <fieldset >

    

       <div style="margin-bottom:15px; margin-right: 10px;" >
        <form action="<?php echo site_url('c_surat/cariwarga');?>" method="post">
            <table>
                <tr> 
                  <td width="900">
                    <legend><h1 style="color: black">Data Warga</h1></legend>
                  </td>
                  <td>
                    <input type="text" name="input_cari" placeholder="Cari Berdasarkan Nama Warga" class="css-input form-control" style="width:250px;" autocomplete="off"> </input>
                  </td>
                  <td width="20"></td>
                  <td>
                     <button type="submit" name="cari" value="Cari" class="btn btn-danger" style="padding:3px; width: 50px; height: 38px;" margin="6px;" width="50px;"> <i class="fa fa-search"></i> </button>
                  </td>
                </tr>
            </table>
        </form>
       </div>

       <div class="col-sm-lg-md-xs-2">
      <form action="../index1.php" method="post">
        <table class="table table-bordered">
          <tr style="background-color: skyblue;" align="center">
           <th>NIK</th>
           <th>NKK</th>
           <th>NAMA</th>
           <th>TEMPAT LAHIR</th>
           <th>TANGGAL LAHIR</th>
           <th>OPSI</th>
           
           </tr>
          
           <?php foreach ($surat as $tampilkan) {
                     ?>
          <tbody>
            <tr>
              <td><?php echo $tampilkan->nik ?></td>
              <td><?php echo $tampilkan->nkk ?></td>
              <td><?php echo $tampilkan->nama ?></td>
              <td><?php echo $tampilkan->tempat_lahir ?></td>
              <td><?php echo $tampilkan->tanggal_lahir ?></td>
              <td align="center"><a href="<?php echo base_url().'c_surat/form/'.$tampilkan->nik; ?>" class="btn btn-info btn-sm" name="btnpilih">Pilih </a></td>
            </tr>
          </tbody>
          <?php 
          } 
          ?>
         </table>
      </form>
        
          </td>
         </tr>
        
       </table>
      </fieldset>
      <br> <br><br>
     </div>
    </div>
  </div>
        <!-- akhir pengumuman baru -->


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