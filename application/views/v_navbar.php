<!-- navbar -->
		<?php $nama = $this->session->userdata('user'); ?>
		<?php foreach ($nama as $us) {
			$status = $us['status'];
		} ?>

		<?php if ($status == 'admin') { ?>

		<?php foreach ($nama as $ad) {
			$nama = $ad['nama'];
			$status = $ad['status'];
			$avatar = $ad['avatar'];
		} ?>

	    <nav class="navbar navbar-expand-md bg-warning navbar-light" id="navbar">
	      <!-- Brand -->
	      <a class="navbar-brand" align="" href="<?php echo base_url().'c_dasbord' ?>">E-DESA</a>
	      


	      <!-- Toggler/collapsibe Button -->
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
	        <span class="navbar-toggler-icon"></span>
	      </button>

	      <!-- Navbar links -->
	      <div class="collapse navbar-collapse" id="collapsibleNavbar">
	        <ul class="navbar-nav mr-auto">

	       		<li class="nav-item"> 
	            <a class="nav-link" href="<?php echo base_url().'c_dasbord' ?>">Home</a>
	        	</li>

	          <li class="nav-item dropdown">
	            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	              Pengajuan
	            </a>
	            <div class="dropdown-menu bg-warning" aria-labelledby="navbarDropdownMenuLink">
	              <a class="dropdown-item" href="<?php echo base_url('c_surat/pengajuan_offline') ?>">Pengajuan Offline</a>
	              <a class="dropdown-item" href="<?php echo base_url('c_surat/pengajuan_online') ?>"> Pengajuan Online</a>
	              <a class="dropdown-item" href="<?php echo base_url('c_surat/status_pengajuan') ?>">Status Pengajuan</a>
	            </div>
	          </li>

	          <li class="nav-item dropdown">
	            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	              Pengarsipan
	            </a>
	            <div class="dropdown-menu bg-warning" aria-labelledby="navbarDropdownMenuLink">
	              <a class="dropdown-item" href="<?php echo base_url('c_pengarsipan/hutdesa') ?>">Arsip Dokumentasi Kegiatan</a>
	              <a class="dropdown-item" href="<?php echo base_url('c_pengarsipan/arsip_datapengajuan') ?>">Arsip Data Pengajuan</a>
	              <a class="dropdown-item" href="<?php echo base_url('c_pengarsipan/arsip_suratmasuk') ?>">Arsip Surat Pengajuan</a>
	              <a class="dropdown-item" href="<?php echo base_url('c_pengarsipan/backupdb') ?>">Backup dan Restore</a>
	            </div>
	          </li>
	          <li class="nav-item"> 
	            <a class="nav-link" href="../pengaturan/edit_pengumuman.php">Pengaturan</a>
	          </li>
	          <li class="nav-item"> 
	            <a class="nav-link" href="<?php echo base_url().'c_warga' ?>">Data Warga</a>
	          </li>
	        </ul>
	        <ul class="navbar-nav">
	        	<span class="navbar-text">
	        		
			     	
			    </span li class="nav-item dropdown">
	            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	            	<img style="width: 35px;" src="assets/img_profil/<?php echo $avatar ?>">
	              	<?php echo $nama; ?>
	            </a>
	            <div class="dropdown-menu dropdown-menu-right bg-warning" aria-labelledby="navbarDropdownMenuLink">
	            	<div class="profile">
	            		<div class="row">
	            			<div class="col">
	            				<img src="assets/img_profil/<?php echo $avatar ?>" alt="..." class="img-thumbnail">
	            			</div>
	            		</div>
	            		<div class="row">
	            			<div class="col">
	            				<p><?php echo $nama; ?></p>
	            			</div>
	            		</div>
	            	</div>
	            	
	              <a class="dropdown-item" href="<?php echo base_url().'c_editprofil' ?>">Edit profil</a>
	              <a class="dropdown-item" href="<?php echo base_url().'c_logout'; ?>">Log out</a>
	            </div>
	        </ul>
	      </div> 
	    </nav>
	    <!-- akhir navbar -->


	    <?php } elseif ($status == 'warga') { ?>

	    <?php foreach ($nama as $wa) {
			$nama = $wa['nama'];
			$nik = $wa['nik'];
			$avatar = $wa['avatar'];
		} ?>

	    <!-- navbar -->
	    <nav class="navbar navbar-expand-md bg-warning navbar-light" id="navbar">
	      <!-- Brand -->
	      <a class="navbar-brand" href="<?php echo base_url().'c_dasbord' ?>">Home</a>

	      <!-- Toggler/collapsibe Button -->
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
	        <span class="navbar-toggler-icon"></span>
	      </button>

	      <!-- Navbar links -->
	      <div class="collapse navbar-collapse" id="collapsibleNavbar">
	        <ul class="navbar-nav mr-auto">

	          <li class="nav-item dropdown">
	            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	              Informasi
	            </a>
	            <div class="dropdown-menu bg-warning" aria-labelledby="navbarDropdownMenuLink">
	              <a class="dropdown-item" href="<?php echo base_url().'c_profildesa' ?>">Profil desa</a>
	              <a class="dropdown-item" href="<?php echo base_url().'c_panduanaplikasi' ?>">Panduan aplikasi</a>
	            </div>
	          </li>

	          <li class="nav-item dropdown">
	            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	              Fasilitas
	            </a>
	            <div class="dropdown-menu bg-warning" aria-labelledby="navbarDropdownMenuLink">
	              <a class="dropdown-item" href="<?php echo base_url().'c_listsurat' ?>">Formulir pengajuan</a>
	              <a class="dropdown-item" href="<?php echo base_url().'c_statuspengajuan/index/'.$nik; ?>">Cek status pengajuan</a>
	            </div>
	          </li>
	        </ul>
	        <ul class="navbar-nav">
	        	<span class="navbar-text">
	        		
			     	
			    </span
	          <li class="nav-item dropdown">
	            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	            	<img style="width: 35px;" src="assets/img_profil/<?php echo $avatar ?>">
	              	<?php echo $nama; ?>
	            </a>
	            <div class="dropdown-menu dropdown-menu-right bg-warning" aria-labelledby="navbarDropdownMenuLink">
	            	<div class="profile">
	            		<div class="row">
	            			<div class="col">
	            				<img src="assets/img_profil/<?php echo $avatar ?>" alt="..." class="img-thumbnail">
	            			</div>
	            		</div>
	            		<div class="row">
	            			<div class="col">
	            				<p><?php echo $nama; ?></p>
	            			</div>
	            		</div>
	            	</div>
	            	
	              <a class="dropdown-item" href="<?php echo base_url().'c_editprofile' ?>">Edit profil</a>
	              <a class="dropdown-item" href="<?php echo base_url().'c_logout'; ?>">Log out</a>
	            </div>
	        </ul>
	      </div> 
	    </nav>
	    <!-- akhir navbar -->

    <?php } ?>