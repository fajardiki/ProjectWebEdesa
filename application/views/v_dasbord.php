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
	  	<?php $nama = $this->session->userdata('user'); ?>
	  	<?php foreach ($nama as $us) {
	  		$namaadmin = $us['namaadmin'];
	  	} ?>
		<!-- Isi -->
		<!-- Slide Show -->
		<div class="carousel">
			<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
			    <ol class="carousel-indicators">
			      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
			      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
			      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
			    </ol>
			    <div class="carousel-inner">
			      <div class="carousel-item img-c active">
			        <img src="<?php echo base_url().'assets/img/desa.jpg' ?>" class="d-block w-100" alt="...">
			        <div class="carousel-caption d-none d-md-block">
			          <h5>First slide label</h5>
			          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
			        </div>
			      </div>
			      <?php 
			      	foreach ($slideshow->result_array() as $s) {
			      		$id = $s['id_slideshow'];
			      		$nama = $s['nama_slideshow'];
			      		$keterangan = $s['keterangan_slideshow'];
			      		$img = $s['gambar_slideshow'];
			      		$waktu = $s['waktu_slideshow'];
			      ?>
			      <div class="carousel-item">
			        <img src="<?php echo base_url().'assets/img/'.$img ?>" class="d-block w-100" alt="...">
			        <div class="carousel-caption d-none d-md-block">
			          <h5><?php echo $nama; ?></h5>
			          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			        </div>
			      </div>
			  		<?php } ?>
			    </div>
			    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
			      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			      <span class="sr-only">Previous</span>
			    </a>
			    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
			      <span class="carousel-control-next-icon" aria-hidden="true"></span>
			      <span class="sr-only">Next</span>
			    </a>
			</div>
		</div>
		<!-- Akhir Slide Show -->

		<!-- Pengumuman Terbaru -->
		<div class="pengumuman">
			<div class="row">
				<div class="col-sm-12" id="pengumuman_title">
					<h2>Pengumunan Terbaru</h2>
					<?php 
						if (!$this->session->userdata('username')) {
							echo "Kosong";
						} else {
							echo "Ada";
						}
					?>
					<hr>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-8">
					<ul class="list-group">
						<li class="list-group-item">
							<div class="row">
								<div class="col">
									<img src="<?php echo base_url().'assets/img/desa.jpg' ?>" class="img-fluid" alt="Responsive image">
								</div>
							</div>
							<div class="row">
								<div class="col">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
									cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
									proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								</div>
							</div>
						</li>
  						<li class="list-group-item">
  							<div class="row">
								<div class="col">
									<img src="<?php echo base_url().'assets/img/desa.jpg' ?>" class="img-fluid" alt="Responsive image">
								</div>
							</div>
							<div class="row">
								<div class="col">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
									cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
									proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								</div>
							</div>
  						</li>
						<li class="list-group-item">
							<div class="row">
								<div class="col">
									<img src="<?php echo base_url().'assets/img/desa.jpg' ?>" class="img-fluid" alt="Responsive image">
								</div>
							</div>
							<div class="row">
								<div class="col">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
									cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
									proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								</div>
							</div>
						</li>
						<li class="list-group-item">
							<div class="row">
								<div class="col">
									<img src="<?php echo base_url().'assets/img/desa.jpg' ?>" class="img-fluid" alt="Responsive image">
								</div>
							</div>
							<div class="row">
								<div class="col">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
									cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
									proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								</div>
							</div>
						</li>
						<li class="list-group-item">
							<div class="row">
								<div class="col">
									<img src="<?php echo base_url().'assets/img/desa.jpg' ?>" class="img-fluid" alt="Responsive image">
								</div>
							</div>
							<div class="row">
								<div class="col">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
									cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
									proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								</div>
							</div>
						</li>
					</ul>
				</div>
				<div class="col-sm-4">
					<ul class="list-group">
						<li class="list-group-item">
							<div class="row">
								<div class="col">
									<img src="<?php echo base_url().'assets/img/desa.jpg' ?>" alt="..." class="img-thumbnail">	
								</div>
								<div class="col">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									. </p>
								</div>
							</div>
						</li>
  						<li class="list-group-item">Dapibus ac facilisis in</li>
						<li class="list-group-item">Morbi leo risus</li>
						<li class="list-group-item">Porta ac consectetur ac</li>
						<li class="list-group-item">Vestibulum at eros</li>
					</ul>
				</div>
			</div>
		</div>	
		<!-- Akhir Pengumuman -->

		<!-- Akhir Isi -->

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