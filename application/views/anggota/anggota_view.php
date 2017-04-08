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
    <h1>Data Anggota</h1>
    <a href="<?php echo base_url(); ?>anggota/add_anggota"><button>Tambah Anggota</button></a>
    <br>
    <div id="body">
        <table border="2">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Alamat</th>
              <th>Tempat Lahir</th>
              <th>Tanggal Lahir</th>
              <th>Jenis Kelamin</th>
              <th>Status</th>
              <th>Telepon</th>
              <th>Keterangan</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
          <?php $no=1; foreach($anggota as $view){
          echo "
          <tr>
          <td>$no</td>
          <td>$view->nama_anggota</td>
          <td>$view->alamat_anggota</td>
          <td>$view->tempat_lahir_anggota</td>
          <td>$view->tgl_lahir_anggota</td>
          <td>$view->jenis_kelamin_anggota</td>
          <td>".'Anggota '."$view->status_anggota</td>
          <td>$view->no_telp_anggota</td>
          <td>$view->keterangan_anggota</td>
          <td>
            <a href=".base_url().'anggota/edit_anggota/'.$view->id_anggota." title='Edit'>Edit</a>
            <a href=".base_url().'anggota/delete_anggota/'.$view->id_anggota." title='Delete'>Delete</a>
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

