<!-- navbar -->
	    <nav class="navbar navbar-expand-md bg-warning navbar-light" id="navbar">
	      <!-- Brand -->
	      <a class="navbar-brand" href="index_admin.php">Home</a>

	      <!-- Toggler/collapsibe Button -->
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
	        <span class="navbar-toggler-icon"></span>
	      </button>

	      <!-- Navbar links -->
	      <div class="collapse navbar-collapse" id="collapsibleNavbar">
	        <ul class="navbar-nav mr-auto">

	          <li class="nav-item dropdown">
	            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	              Pengajuan
	            </a>
	            <div class="dropdown-menu bg-warning" aria-labelledby="navbarDropdownMenuLink">
	              <a class="dropdown-item" href="<?php echo base_url('c_surat') ?>">Pengajuan Offline</a>
	              <a class="dropdown-item" href="../surat/permohonan-online/permohonan_masuk.php">Pengajuan Online</a>
	              <a class="dropdown-item" href="statuspengajuan_admin.php">Status Pengajuan</a>
	            </div>
	          </li>

	          <li class="nav-item dropdown">
	            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	              Pengarsipan
	            </a>
	            <div class="dropdown-menu bg-warning" aria-labelledby="navbarDropdownMenuLink">
	              <a class="dropdown-item" href="arsipdokumentasikegiatan.php">Arsip Dokumentasi Kegiatan</a>
	              <a class="dropdown-item" href="../pengarsipan/datapengajuan.php">Arsip Data Pengajuan</a>
	              <a class="dropdown-item" href="../pengarsipan/formsuratkeluardata.php">Arsip Surat Pengajuan</a>
	              <a class="dropdown-item" href="backupandrestore.php">Backup dan Restore</a>
	            </div>
	          </li>
	          <li class="nav-item"> 
	            <a class="nav-link" href="../pengaturan/edit_pengumuman.php">Pengaturan</a>
	          </li>
	          <li class="nav-item"> 
	            <a class="nav-link" href="../surat/tambah_data.php">Tambah data</a>
	          </li>
	        </ul>
	        <ul class="navbar-nav">
	        	<span class="navbar-text">
	        		
			     	
			    </span
	          <li class="nav-item dropdown">
	            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	            	<img style="width: 50px;" src="<?php echo base_url().'assets/img/desa.jpg' ?>">
	              	Fajar Siddiqi Putu Sa'ed
	            </a>
	            <div class="dropdown-menu dropdown-menu-right bg-warning" aria-labelledby="navbarDropdownMenuLink">
	            	<div class="profile">
	            		<div class="row">
	            			<div class="col">
	            				<img src="<?php echo base_url().'assets/img/desa.jpg' ?>" alt="..." class="img-thumbnail">
	            			</div>
	            		</div>
	            		<div class="row">
	            			<div class="col">
	            				<p>Fajar Siddiqi putu sa'ed</p>
	            				<p>Haiiiii iii</p>
	            			</div>
	            		</div>
	            	</div>
	            	
	              <a class="dropdown-item" href="ubah_profil_admin.php">Edit profil</a>
	              <a class="dropdown-item" href="config/logout.php">Log out</a>
	            </div>
	        </ul>
	      </div> 
	    </nav>
	    <!-- akhir navbar -->