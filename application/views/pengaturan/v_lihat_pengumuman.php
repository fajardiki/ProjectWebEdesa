<div class="container">
      <table width="100%" border="1px solid #000" class="table-bordered text-center mt-3">
                <thead>
                    <tr style="background-color: skyblue;">
                        <th>Waktu</th>
                        <th>Judul</th>
                        <th>Isi</th>
                        <th>Gambar</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <?php foreach ($lihatpengumuman->result_array() as $lp) { ?>
                <tbody>
                    <tr>
                        <td width="150"><?php echo $lp['waktu_pengumuman']; ?></td>
                        <td width="150"><?php echo $lp['judul_pengumuman']; ?></td>
                        <td><?php echo $lp['isi_pengumuman']; ?></td>
                        <td align="center" width="170">
                            <img style="width: 150px;  " src="image_pengumuman/<?php echo $lp['gambar_pengumuman']; ?>">
                        </td>
                        <td align="center" width="70">
                            <a href="delete_pengumuman.php?id_pengumuman" class="btn btn-info btn-sm">Delete</a>
                        </td>

                    </tr>
                </tbody>
            <?php } ?>
                
            </table>
        </div>