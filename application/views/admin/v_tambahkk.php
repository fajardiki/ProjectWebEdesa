<!DOCTYPE html>
<html>
<head>
	<title>Tambah kk</title>

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
          <label for="fname">NKK </label>
        </div>
        <div class="col-75">
           <input type="text" name="nkk" id="nkk" autocomplete="off">
        </div>  
      </div>
      <div class="row">
        <div class="col-25">
          <label for="lname">Kepala keluarga </label>
        </div>
        <div class="col-75">
          <input type="text" name="kepala" id="kepala" autocomplete="off">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="lname">Tempat Lahir Kepala Keluarga </label>
        </div>
        <div class="col-75">
          <input type="text" name="tempat_lahirkk" id="tempat_lahirkk" autocomplete="off">
        </div>
      </div>

      <div class="row">
        <div class="col-25">
          <label for="lname">Tanggal Lahir Kepala Keluarga </label>
        </div>
        <div class="col-75">
          <input type="text" name="tanggal_lahirkk" id="tanggal_lahirkk" autocomplete="off">
        </div>
      </div>
      
      <div class="row">
        <div class="col-25">
          <label for="lname">Pekerjaan Kepala Keluarga</label>
        </div>
        <div class="col-75">
          <input type="text" name="pekerjaankk" id="pekerjaankk" autocomplete="off">
        </div>
      </div>
      
      <div class="row">
        <div class="col-25">
          <label for="country">Alamat </label>
        </div>
        <div class="col-75">
           <input type="text" name="alamat" id="alamat" autocomplete="off">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="subject">Rt </label>
        </div>
        <div class="col-75">
          <input type="text" name="rt" id="rt" autocomplete="off">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="subject">Rw </label>
        </div>
        <div class="col-75">
          <input type="text" name="rw"id="rw" autocomplete="off">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="subject">Kode pos </label>
        </div>
        <div class="col-75">
          <input type="text" name="pos" id="pos" autocomplete="off">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
        </div>

        <div class="col-75" style="padding-top: 10px;">
          <button  type="submit" name="submit" class="btn btn-info" style="float: right;">Tambahkan</button>
        </div>
      </div>
    </form>
  </div>

  <!-- Akhir form -->
</body>
</html>