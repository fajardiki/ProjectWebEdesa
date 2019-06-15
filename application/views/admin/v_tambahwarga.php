<?php $nama = $this->session->userdata('user'); ?>
  <?php foreach ($nama as $us) {
      $name = $us['nama'];
      $status = $us['status'];
      $avatar = $us['avatar'];
    } ?>
<!DOCTYPE html>
 <html>
 <head>
   <title>Tambah data warga</title>

   <style>
     * {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 6px 12px 12px 30px;
  display: inline-block;
}

input[type=submit] {
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
   background-color: #45a049;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
   </style>
  
 </head>
 <body>

  <!-- Form -->
  <div class="container">
    <form action="" method="POST">

      <div class="row">
        <div class="col-25">
          <label for="lname">NKK : </label>
        </div>
        <div class="col-75">
          <input type="text" name="nkk" id="nkk" placeholder="nkk" autocomplete="off">
        </div>


      </div>
      <div class="row">
        <div class="col-25">
          <label for="lname">NIK </label>
        </div>
        <div class="col-75">
          <input type="text" name="nik" id="nik" placeholder="nik" autocomplete="off">
        </div>


      </div>
      <div class="row">
        <div class="col-25">
          <label for="country">Nama </label>
        </div>
        <div class="col-75">
           <input type="text" name="nama" id="nama" placeholder="nama" autocomplete="off">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="subject">Tempat lahir </label>
        </div>
        <div class="col-75">
          <input type="text" name="tempat_lahir" id="tempat_lahir" placeholder="tempat lahir" autocomplete="off">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="subject">Tanggal lahir </label>
        </div>
        <div class="col-75">
          <input type="date" name="tanggal_lahir" id="tanggal_lahir" placeholder="tanggal lahir" autocomplete="off">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="subject">Umur </label>
        </div>
        <div class="col-75">
          <input type="text" name="umur" id="umur" placeholder="umur" autocomplete="off">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="subject">Jenis kelamin </label>
        </div>
        <div class="col-75">
          <select name="jenis_kelamin">
            <option value="Laki-Laki">Laki-Laki</option>
            <option value="Perempuan">Perempuan</option>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="subject">Pendidikan </label>
        </div>
        <div class="col-75">
         <input type="text" name="pendidikan" id="pendidikan" placeholder="pendidikan" autocomplete="off">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="subject">Perkawinan </label>
        </div>
        <div class="col-75">
         <input type="text" name="perkawinan" id="perkawinan" placeholder="perkawinan" autocomplete="off">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="subject">Agama </label>
        </div>
        <div class="col-75">
          <input type="text" name="agama" id="agama" placeholder="agama" autocomplete="off">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="subject">Pekerjaan </label>
        </div>
        <div class="col-75">
          <input type="text" name="pekerjaan" id="pekerjaan" placeholder="pekerjaan" autocomplete="off">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
        </div>
        <div class="col-75">
          <input class="btn-primary" type="submit" value="Submit" name="submit" autocomplete="off">
        </div>
        
      </div>
    </form>
  </div>
 </div>
 <br>
 </body>
 </html>