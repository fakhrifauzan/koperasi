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
    <h1>Formulir Edit Petugas</h1>

    <div id="body">
        <form action="<?php echo base_url().'petugas/update_petugas' ?>" method="post">
            <input type="hidden" name="id_petugas" value="<?php echo $record->id_petugas;?>">
            <label>Username</label>
            <input type="text" name="username" value="<?php echo $record->username;?>" required><br>
            <hr>
            <label>Nama Lengkap</label>
            <input type="text" name="nama_petugas" value="<?php echo $record->nama_petugas;?>" required><br>
            <label>Alamat Petugas</label>
            <input type="text" name="alamat_petugas" value="<?php echo $record->alamat_petugas;?>" required><br>
            <label>No Telepon Petugas</label>
            <input type="number" name="no_telp_petugas" value="<?php echo $record->no_telp_petugas;?>" required><br>
            <label>Tempat Lahir Petugas</label>
            <input type="text" name="tempat_lahir_petugas" value="<?php echo $record->tempat_lahir_petugas;?>" required><br>
            <label>Tanggal Lahir Petugas</label>
            <input type="date" name="tgl_lahir_petugas" value="<?php echo $record->tgl_lahir_petugas;?>" required><br>
            <label>Keterangan Petugas</label>
            <input type="text" name="ket_petugas" value="<?php echo $record->ket_petugas;?>" required><br>
            <input type="submit" name="submit">
        </form>
    </div>

    <p class="footer"></p>
</div>

</body>
</html>

