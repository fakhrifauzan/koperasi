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
    <h1>Data Angsuran</h1>
    <a href="<?php echo base_url(); ?>angsuran/add_angsuran"><button>Tambah Data Angsuran</button></a>
    <br>
    <div id="body">
        <table border="2">
          <thead>
            <tr>
              <th>No</th>
              <th>Pinjaman</th>
              <th>ID</th>
              <th>Nama Anggota</th>
              <th>Besar Pinjaman</th>
              <th>Angsuran</th>
              <th>Tanggal Pelunasan</th>
              <th>Keterangan</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
          <?php $no=1; foreach($angsuran as $view){
          echo "
          <tr>
            <td>$no</td>
            <td>$view->nama_pinjaman</td>
            <td>$view->id_anggota</td>
            <td>$view->nama_anggota</td>
            <td>Rp. ".number_format($view->besar_pinjaman, 2, ',', '.')."</td>
            <td>$view->jml_angsuran</td>
            <td>$view->tgl_pelunasan</td>
            <td>$view->keterangan_pinjaman</td>
            <td>
              <a href=".base_url().'pinjaman/detail/'.$view->id_pinjaman." title='Detail'>Detail</a>
              <a href=".base_url().'pinjaman/edit_pinjaman/'.$view->id_pinjaman." title='Edit'>Edit</a>
              <a href=".base_url().'pinjaman/delete_pinjaman/'.$view->id_pinjaman." title='Delete'>Delete</a>
            </td>
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
