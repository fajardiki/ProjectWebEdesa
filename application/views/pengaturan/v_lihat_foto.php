<div class="container">
      <table width="100%" border="1px solid #000" class="table-bordered text-center mt-3">
                <thead>
                    <tr style="background-color: skyblue;">
                        <th>Waktu</th>
                        <th>Nama Foto</th>
                        <th>Foto</th>
                        <th>Keterangan</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <?php foreach ($lihatfoto->result_array() as $lf) { ?>
                <tbody>
                    <tr>
                        <td><?php echo $lf['waktu_slideshow']; ?></td>
                        <td><?php echo $lf['nama_slideshow']; ?></td>
                        <td align="center"><img style="width: 150px;" src="image_foto/<?php echo $lf['gambar_slideshow']; ?>"></td>
                        <td><?php echo $lf['keterangan_slideshow']; ?></td>
                        <td align="center">
                            <a href="delete_foto.php?id_foto" class="btn btn-info btn-sm">Delete</a>
                        </td>
                    </tr>
                </tbody>
                <?php } ?>
              
            </table>
        </div>