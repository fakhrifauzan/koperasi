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
    <h1>Formulir Tambah Anggota</h1>

    <div id="body">
        <form action="<?php echo base_url().'anggota/add_anggota' ?>" method="post">
            <label>Username</label>
            <input type="text" name="username" required><br>
            <label>Password</label>
            <input type="password" name="password" required><br>
            <hr>
            <label>Nama Lengkap</label>
            <input type="text" name="nama_anggota" required><br>
            <label>Alamat</label>
            <input type="text" name="alamat_anggota" required><br>
            <label>Jenis Kelamin</label>
            <input type="radio" name="jenis_kelamin_anggota" value="Pria" required> Pria
            <input type="radio" name="jenis_kelamin_anggota" value="Wanita"> Wanita
            <br>
            <label>Tempat Lahir</label>
            <input type="text" name="tempat_lahir_anggota" required><br>
            <label>Tanggal Lahir</label>
            <input type="date" name="tgl_lahir_anggota" required><br>
            <label>No Telepon</label>
            <input type="number" name="no_telp_anggota" required><br>
            <label>Status Anggota</label>
            <select name="status_anggota" required>
                <option value="">-- Silakan Pilih --</option>
                <option value="Aktif">Anggota Aktif</option>
                <option value="Pasif">Anggota Pasif</option>
            </select>
            <br>
            <label>Keterangan Anggota</label>
            <input type="text" name="keterangan_anggota" required><br>
            <input type="submit" name="submit">
        </form>
    </div>

    <p class="footer"></p>
</div>

</body>
</html>

