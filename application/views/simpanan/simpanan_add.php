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
    <h1>Formulir Tambah Simpanan</h1>
    <div id="body">
        <form action="<?php echo base_url().'simpanan/add_simpanan' ?>" method="post">
            <label>Nama Simpanan</label>
            <input type="text" name="nama_simpanan" required><br>
            <label>Anggota</label>
            <select name="id_anggota" required>
              <option value="">-- Pilih Anggota</option>
              <?php
                foreach ($anggota as $view) {
                  echo "<option value='$view->id_anggota'>$view->nama_anggota</option>";
                }
              ?>
            </select>
            <br>
            <label>Tanggal Simpanan</label>
            <input type="date" name="tgl_simpanan" required>
            <br>
            <label>Besar Simpanan</label>
            <input type="number" name="besar_simpanan" required><br>
            <label>Keterangan Simpanan</label>
            <input type="text" name="keterangan_simpanan" required><br>
            <input type="submit" name="submit">
        </form>
    </div>
    <p class="footer"></p>
</div>

</body>
</html>
