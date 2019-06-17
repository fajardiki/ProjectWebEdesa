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

    <title>Pengajuan Offline - Daftar Surat</title>
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
              <h2 align="center"> <strong> Form Surat </strong> </h2>
              <br>
            </div>
        
        <div>

            <form action="<?php echo base_url().'c_surat/uploudpengajuanoffline' ?>" method="POST" enctype="multipart/form-data"> 
            <div>
                <div align="center">
                    <table>
                      <?php foreach ($warga as $wrg) {
                        $namawarga = $wrg->nama;
                        $nik = $wrg->nik;
                      } ?>
                        <tr>
                            <td style="padding-bottom: 10px;"> <label for="lname">Nama </label> </td>
                            <td style="padding-bottom: 10px; padding-left: 30px;"> <input type="text" name="nama" id="nama" value="<?php echo $namawarga; ?>" autocomplete="off" class="css-input form-control" style="width:250px;"> </td>
                        </tr>
                        <tr>
                            <td style="padding-bottom: 10px;"> <label for="country">NIK </label> </td>
                            <td style="padding-bottom: 10px; padding-left: 30px;"> <input type="text" name="nik" id="nik" value="<?php echo $nik; ?>" autocomplete="off" class="css-input form-control" style="width:250px;"> </td>
                        </tr>
                        <?php foreach ($kodesurat->result_array() as $ks) {
                          $namasurat = $ks['nama_surat'];
                          $kodesurat = $ks['kode_surat'];
                        } ?>

                        <div class="col-75" hidden="true">
                          <input type="text" name="ksurat" id="nama" value="" autocomplete="off">
                        </div>
                        
                        <tr>
                            <td style="padding-bottom: 10px;"> <label for="subject">Jenis surat </label> </td>
                            <td style="padding-bottom: 10px; padding-left: 30px;"> <input type="text" name="jenis" id="umur" value="<?php echo $namasurat; ?>" autocomplete="off" class="css-input form-control" style="width:250px;"></td>
                        </tr>
                        <tr>
                            <td style="padding-bottom: 10px;"> <label for="subject">Keperluan </label> </td>
                            <td style="padding-bottom: 10px; padding-left: 30px;"> <input type="text" name="keperluan" id="jenis_kelamin" placeholder="Keperluan pengajuan..." autocomplete="off" class="css-input form-control" style="width:250px;"> </td>
                        </tr>
                        <tr>
                            <td></td>
                           <td> <a href="<?php echo base_url().'c_surat/cetaksurat/'.$wrg->nik; ?>" class="btn btn-info" style="float: right; width: 75px;">Terima</a> </td>
                        </tr>
                  </table>
                </div>
            </div>
            </form>

        </div>
      
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