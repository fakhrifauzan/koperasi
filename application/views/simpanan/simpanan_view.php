<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Welcome to Koperasi</title>
</head>
<body>

<div id="container">
    <h1>Data Simpanan</h1>
    <a href="<?php echo base_url(); ?>simpanan/add_simpanan"><button>Tambah Simpanan</button></a>
    <br>
    <div id="body">
        <table border="2">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Simpanan</th>
              <th>ID Anggota</th>
              <th>Nama Anggota</th>
              <th>Tgl Simpanan</th>
              <th>Besar Simpanan</th>
              <th>Keterangan</th>
            </tr>
          </thead>
          <tbody>
          <?php $no=1; foreach($simpanan as $view){
          echo "
          <tr>
            <td>$no</td>
            <td>$view->nama_simpanan</td>
            <td>$view->id_anggota</td>
            <td>$view->nama_anggota</td>
            <td>$view->tgl_simpanan</td>
            <td>Rp. ".number_format($view->besar_simpanan, 2, ',', '.')."</td>
            <td>$view->keterangan_simpanan</td>
          </tr>";
          $no++;
          } ?>
          </tbody>
        </table>
    </div>

    <p class="footer"></p>
</div>

</body>
</html>
