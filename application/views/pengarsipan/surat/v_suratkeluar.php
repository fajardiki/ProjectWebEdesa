<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<table width="100%" border="1px solid #000" class="table-bordered text-center">
        <thead>
         <tr style="background-color: skyblue;">
      <th>Kode Surat</th>
      <th>Nama Surat</th>
      <th>Tanggal Masuk</th>
      <th>Status</th>
    </tr>
    </thead>
      <?php 
              foreach ($keluar as $tampilkan) { ?>
              <tbody>
                <tr>
                  <td><?php echo $tampilkan->kode_surat ?></td>
                  <td><?php echo $tampilkan->nama_surat ?></td>
                  <td><?php echo $tampilkan->tanggal_pengajuan ?></td>
                  <td><?php echo $tampilkan->status_pengajuan ?></td>
                </tr>
              </tbody>
    <?php 
      }
    ?>
  </table>
</body>
</html>

