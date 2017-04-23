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
    <h1>Formulir Edit Pinjaman</h1>

    <div id="body">
      <form action="<?php echo base_url().'pinjaman/update_pinjaman' ?>" method="post">
        <input type="hidden" name="id_pinjaman" value="<?php echo $record->id_pinjaman;?>">
        <label>Kategori Pinjaman</label>
        <select name="id_pinjaman_kategori" required>
          <option value="">-- Pilih Kategori Pinjaman --</option>
          <?php
            foreach ($kategori as $view) {
              echo "<option value='$view->id_pinjaman_kategori'";
              if($view->id_pinjaman_kategori == $record->id_pinjaman_kategori) {
                echo 'selected';
              }
              echo ">$view->nama_pinjaman</option>";
            }
          ?>
        </select>
        <br>
          <label>Anggota</label>
          <select name="id_anggota" required>
            <option value="">-- Pilih Anggota --</option>
            <?php
              foreach ($anggota as $view) {
                echo "<option value='$view->id_anggota'";
                if ($view->id_anggota == $record->id_anggota) {
                  echo 'selected';
                }
                echo">$view->nama_anggota</option>";
              }
            ?>
          </select>
          <br>
          <label>Besar Pinjaman</label>
          <input type="number" name="besar_pinjaman" value="<?php echo $record->besar_pinjaman;?>" required><br>
          <label>Keterangan Pinjaman</label>
          <input type="text" name="keterangan_pinjaman" value="<?php echo $record->keterangan_pinjaman;?>" required><br>
          <input type="submit" name="submit">
      </form>
    </div>

    <p class="footer"></p>
</div>

</body>
</html>
