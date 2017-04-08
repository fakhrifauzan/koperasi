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
    <h1>Data Kategori Pinjaman</h1>
    <a href="<?php echo base_url(); ?>kategori_pinjaman/add_kategori"><button>Tambah Kategori</button></a>
    <br>
    <div id="body">
        <table border="2">
          <thead>
            <tr>
              <th>No</th> 
              <th>Nama Pinjaman Koperasi</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
          <?php $no=1; foreach($kategori_pinjaman as $view){
          echo "
          <tr>
          <td>$no</td>
          <td>$view->nama_pinjaman</td>
          <td>
            <a href=".base_url().'kategori_pinjaman/edit_kategori/'.$view->id_pinjaman_kategori." title='Edit'>Edit</a>
            <a href=".base_url().'kategori_pinjaman/delete_kategori/'.$view->id_pinjaman_kategori." title='Delete'>Delete</a>
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