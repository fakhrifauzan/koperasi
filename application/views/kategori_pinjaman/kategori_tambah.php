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
    <h1>Formulir Tambah Kategori Pinjaman</h1>

    <div id="body">
        <form action="<?php echo base_url().'kategori_pinjaman/add_kategori' ?>" method="post">
            <label>Nama Kategori</label>
            <input type="text" name="nama_pinjaman" required><br>
            <input type="submit" name="submit">
        </form>
    </div>

    <p class="footer"></p>
</div>

</body>
</html>