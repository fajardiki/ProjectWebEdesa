    <!-- isi -->
<div class="col-sm-11 utama-isi">

        <form method="post" enctype="multipart/form-data">      
        <div class="row ml-3">

        <div class="row">
        <div>
                <div class="mb-3">
                   <div> <b> NAMA FOTO </b> </div>
                </div>
                <div class="mb-2">
                    <div>
                      <input type="text" name="judul" class="atur_judul form-control" style="width: 400px;">
                    </div>
                </div>
                <div class="mb-3 mt-4">
                   <div> <b> KETERANGAN </b> </div>
                </div>
                <div class="mb-2">
                    <div>
                      <textarea name="isi_pengumuman" class="atur_isi form-control" style="width: 400px; height: 220px;"></textarea>
                    </div>
                </div>

        </div> 
        </div>

        <div class=" ml-5">
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
                     <b> GAMBAR </b>
                    </div>       
                    <div>
                     <img id="uploadPreview" class="atur_gambar" style="width: 200px; height: 200px;"> 
                    </div>
                </div>
                <div>
                    <div>
                      <input id="uploadgambar" type="file" name="gambar" onchange="PreviewImage();" class="mt-2">
                    </div>
                    <div>
                      <button class="btn btn-primary mt-5" type="submit" name="upload"> Posting </button>
                    </div>
                </div>
                
        </div>
        </form>

      </div>
    <!-- akhir isi -->