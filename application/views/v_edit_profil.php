<!-- navbar -->
<?php $nama = $this->session->userdata('user'); ?>
	<?php foreach ($nama as $us) {
  		$name = $us['nama'];
  		$status = $us['status'];
  		$img = $us['avatar'];
   	} ?>

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

	<?php if ($status == 'admin') { ?>

		<?php foreach ($nama as $a) {
			$img = $a['avatar'];
		} ?>

	  	<div class="container-fluid">
		  	<!-- Header -->
		  	<?php $this->load->view($head) ?>
		  	<!-- Akhir Header -->

		  	<?php $this->load->view($navbar) ?>
		  	
		  	<div class="container-fluid mt-4 mb-4">
		  		<div class="row">
		  			<div class="col-sm-3">
		  			<?php foreach ($warga as $wk) {
		  				$ava = $wk['avatar'];
		  			} ?>
		  				<img src="assets/img_profil/<?php echo $ava ?>" style=" width: 220px; height: 220px;" class="img-circle img-fluid">
		  				<table class="info-bio">
			              <tr>
			                <td width="60">Nama </td>
			                <td width="10"> : </td>
			                <td><?php echo $name; ?></td>
			              </tr>
			              <tr>
			                <td>Status </td>
			                <td> : </td>
			                <td><?php echo $status; ?></td>
			              </tr>
			            </table>
		  			</div>

		  			<div class="col-sm-1"></div>

		  			<div class="col-sm3">
		  				<form action="<?php echo base_url().'c_editprofile/uploudfotoprofile' ?>" method="POST" enctype="multipart/form-data">
					        <div>
					                <div>
					                    <script type="text/javascript">
					                    function PreviewImage() {
					                        var oFReader = new FileReader();
					                        oFReader.readAsDataURL(document.getElementById("uploadgambar").files[0]);

					                        oFReader.onload = function (oFREvent) {
					                        document.getElementById("uploadPreview").src = oFREvent.target.result;
					                        };
					                    };
					                    </script>
					                </div>  
					                <div>  
					                    <div class="mb-3">
					                     <b> UBAH FOTO PROFIL </b>
					                    </div>       
					                    <div>
					                     <img id="uploadPreview" style=" width: 220px; height: 220px;"> 
					                    </div>
					                </div>
					                <div>
					                    <div>
					                      <input id="uploadgambar" name="gambar" type="file" onchange="PreviewImage() ;" class="mt-2">
					                    </div>
					                    <div>
					                      <button class="btn btn-primary mt-2" type="submit" name="upload"> Ganti Profil </button>
					                    </div>
					                </div>
					        </div>
					    </form>
		  			</div>

		  			<div class="col-sm3">
		  				<div class="mb-3">
			                   <div> <b> UBAH PASSWORD </b> </div>
			                </div>
			                <div class="mb-2">
			                    <div width="250"> 
			                    	<input type="password" name="passwordlama" id="input" class="form-control" placeholder="Password Lama" required oninvalid="this.setCustomValidity('Password tidak boleh kosong')">
			                    </div>
			                </div>
			                <div class="mb-2">
			                    <div width=""> 
			                    	<input type="password" name="passwordbaru" id="input" class="form-control" placeholder="Password Baru" required oninvalid="this.setCustomValidity('Password tidak boleh kosong')"> 
			                    </div>
			                </div>
			                <div class="mb-2">
			                    <div width="" > 
			                    	<input type="password" name="konfirmasipasswordbaru" id="input" class="form-control" placeholder="Konfirmasi Password Baru" required oninvalid="this.setCustomValidity('Password tidak boleh kosong')"> 
			                    </div>
			                </div>
			                <div class="mb-2">
			                  <div>
			                    <button class="btn btn-primary pl-4 pr-4" type="submit" name="submit"> Ok  </button>
			                  </div>
			                </div>
		  			</div>
		  		</div>
		  	</div>

		  	<!-- Footer -->
		  	<?php $this->load->view($foot) ?>
		  	<!-- Akhir Footer -->
		 </div>

	<?php } elseif ($status == 'warga') { ?>
 
		<?php foreach ($nama as $w) {
			$nik = $w['nik'];
		} ?>

		<?php echo $img; ?>

	  	<div class="container-fluid">
		  	<!-- Header -->
		  	<?php $this->load->view($head) ?>
		  	<!-- Akhir Header -->

		  	<?php $this->load->view($navbar) ?>
		  	
		  	<div class="container-fluid mt-4 mb-4">
		  		<div class="row">
		  			<div class="col-sm-3">
		  				<img src="assets/img_profil/<?php echo $img; ?>" style=" width: 220px; height: 220px;" class="img-circle img-fluid">
		  				<table class="info-bio">
			              <tr>
			                <td width="60">Nama </td>
			                <td width="10"> : </td>
			                <td><?php echo $name; ?></td>
			              </tr>
			              <tr>
			                <td>NIK </td>
			                <td> : </td>
			                <td><?php echo $nik; ?></td>
			              </tr>
			            </table>
		  			</div>

		  			<div class="col-sm-1"></div>

		  			<div class="col-sm3">
		  				<form action="<?php echo base_url().'c_editprofile/uploudfotoprofile' ?>" method="post" enctype="multipart/form-data">
					        <div>
					                <div>
					                    <script type="text/javascript">
					                    function PreviewImage() {
					                        var oFReader = new FileReader();
					                        oFReader.readAsDataURL(document.getElementById("uploadgambar").files[0]);

					                        oFReader.onload = function (oFREvent) {
					                        document.getElementById("uploadPreview").src = oFREvent.target.result;
					                        };
					                    };
					                    </script>
					                </div>  
					                <div>  
					                    <div class="mb-3">
					                     <b> UBAH FOTO PROFIL </b>
					                    </div>       
					                    <div>
					                     <img id="uploadPreview" style=" width: 220px; height: 220px;"> 
					                    </div>
					                </div>
					                <div>
					                	<div class="col-75" hidden="true">
							                <input type="text" name="nik" id="nama" value="<?php echo $nik; ?>" autocomplete="off">
							              </div>
					                    <div>
					                      <input id="uploadgambar" name="gambar" type="file" onchange="PreviewImage() ;" class="mt-2">
					                    </div>
					                    <div>
					                      <button class="btn btn-primary mt-2" type="submit" name="upload"> Ganti Profil </button>
					                    </div>
					                </div>
					        </div>
					    </form>
		  			</div>

		  			<div class="col-sm3">
		  				<div class="mb-3">
			                   <div> <b> UBAH PASSWORD </b> </div>
			                </div>
			                <div class="mb-2">
			                    <div width="250"> 
			                    	<input type="password" name="passwordlama" id="input" class="form-control" placeholder="Password Lama" required oninvalid="this.setCustomValidity('Password tidak boleh kosong')">
			                    </div>
			                </div>
			                <div class="mb-2">
			                    <div width=""> 
			                    	<input type="password" name="passwordbaru" id="input" class="form-control" placeholder="Password Baru" required oninvalid="this.setCustomValidity('Password tidak boleh kosong')"> 
			                    </div>
			                </div>
			                <div class="mb-2">
			                    <div width="" > 
			                    	<input type="password" name="konfirmasipasswordbaru" id="input" class="form-control" placeholder="Konfirmasi Password Baru" required oninvalid="this.setCustomValidity('Password tidak boleh kosong')"> 
			                    </div>
			                </div>
			                <div class="mb-2">
			                  <div>
			                    <button class="btn btn-primary pl-4 pr-4" type="submit" name="submit"> Ok  </button>
			                  </div>
			                </div>
		  			</div>
		  		</div>
		  	</div>

		  	<!-- Footer -->
		  	<?php $this->load->view($foot) ?>
		  	<!-- Akhir Footer -->
		 </div>

    <?php } ?>

    <!-- Optional JavaScript -->
	    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
	    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	  </body>
	</html>