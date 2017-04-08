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
    <h1>Formulir Edit Anggota</h1>

    <div id="body">
        <form action="<?php echo base_url().'anggota/update_anggota' ?>" method="post">
            <input type="hidden" name="id_anggota" value="<?php echo $record->id_anggota;?>">
            <label>Username</label>
            <input type="text" name="username" value="<?php echo $record->username;?>" required><br>
            <hr>
            <label>Nama Lengkap</label>
            <input type="text" name="nama_anggota" value="<?php echo $record->nama_anggota;?>" required><br>
            <label>Alamat</label>
            <input type="text" name="alamat_anggota" value="<?php echo $record->alamat_anggota;?>" required><br>
            <label>Jenis Kelamin</label>
            <input type="radio" name="jenis_kelamin_anggota" value="Pria" <?php if ($record->jenis_kelamin_anggota == "Pria") { echo "checked"; } ?> required> Pria
            <input type="radio" name="jenis_kelamin_anggota" value="Wanita" <?php if ($record->jenis_kelamin_anggota == "Wanita") { echo "Checked"; } ?>> Wanita
            <br>
            <label>Tempat Lahir</label>
            <input type="text" name="tempat_lahir_anggota" value="<?php echo $record->tempat_lahir_anggota;?>" required><br>
            <label>Tanggal Lahir</label>
            <input type="date" name="tgl_lahir_anggota" value="<?php echo $record->tgl_lahir_anggota;?>" required><br>
            <label>No Telepon</label>
            <input type="number" name="no_telp_anggota" value="<?php echo $record->no_telp_anggota;?>" required><br>
            <label>Status Anggota</label>
            <select name="status_anggota" required>
                <option value="">-- Silakan Pilih --</option>
                <option value="Aktif" <?php if ($record->status_anggota == "Aktif") { echo "selected"; } ?>>Anggota Aktif</option>
                <option value="Pasif" <?php if ($record->status_anggota == "Pasif") { echo "selected"; } ?>>Anggota Pasif</option>
            </select>
            <br>
            <label>Keterangan Anggota</label>
            <input type="text" name="keterangan_anggota" value="<?php echo $record->keterangan_anggota;?>" required><br>
            <input type="submit" name="submit">
        </form>
    </div>

    <p class="footer"></p>
</div>

</body>
</html>