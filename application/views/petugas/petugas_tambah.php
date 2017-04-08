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
    <h1>Formulir Tambah Petugas</h1>

    <div id="body">
        <form action="<?php echo base_url().'petugas/add_petugas' ?>" method="post">
            <label>Username</label>
            <input type="text" name="username" required><br>
            <label>Password</label>
            <input type="password" name="password" required><br>
            <hr>
            <label>Nama Lengkap</label>
            <input type="text" name="nama_petugas" required><br>
            <label>Alamat Petugas</label>
            <input type="text" name="alamat_petugas" required><br>
            <label>No Telepon Petugas</label>
            <input type="number" name="no_telp_petugas" required><br>
            <label>Tempat Lahir Petugas</label>
            <input type="text" name="tempat_lahir_petugas" required><br>
            <label>Tanggal Lahir Petugas</label>
            <input type="date" name="tgl_lahir_petugas" required><br>
            <label>Keterangan Petugas</label>
            <input type="text" name="ket_petugas" required><br>
            <input type="submit" name="submit">
        </form>
    </div>

    <p class="footer"></p>
</div>

</body>
</html>

