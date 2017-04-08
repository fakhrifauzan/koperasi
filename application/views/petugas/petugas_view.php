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
    <h1>Data Petugas</h1>
    <a href="<?php echo base_url(); ?>petugas/add_petugas"><button>Tambah Petugas</button></a>
    <br>
    <div id="body">
        <table border="2">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Alamat</th>
              <th>Telepon</th>
              <th>Tempat Lahir</th>
              <th>Tanggal Lahir</th>
              <th>Username</th>
              <th>Keterangan</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
          <?php $no=1; foreach($petugas as $view){
          echo "
          <tr>
          <td>$no</td>
          <td>$view->nama_petugas</td>
          <td>$view->alamat_petugas</td>
          <td>$view->no_telp_petugas</td>
          <td>$view->tempat_lahir_petugas</td>
          <td>$view->tgl_lahir_petugas</td>
          <td>$view->username</td>
          <td>$view->ket_petugas</td>
          <td>
            <a href=".base_url().'petugas/edit_petugas/'.$view->id_petugas." title='Edit'>Edit</a>
            <a href=".base_url().'petugas/delete_petugas/'.$view->id_petugas." title='Delete'>Delete</a>
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

