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
        <h1>Formulir Tambah Pinjaman</h1>
        <div id="body">
            <form action="<?php echo base_url().'pinjaman/add_pinjaman' ?>" method="post">
                <label>Kategori Pinjaman</label>
                <select name="id_pinjaman_kategori" required>
                    <option value="">-- Pilih Kategori Pinjaman --</option>
                    <?php
                        foreach ($kategori as $view) {
                            echo "<option value='$view->id_pinjaman_kategori'>$view->nama_pinjaman</option>";
                        }
                    ?>
                </select>
                <br>
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
                <label>Besar Pinjaman</label>
                <input type="number" id="besar_pinjaman" name="besar_pinjaman" required><br>
                <label>Jumlah Angsuran</label>
                <select name="jml_angsuran" id="jml_angsuran">
                    <option value="">-- Silakan Pilih --</option>
                    <?php
                        $angsuran = [2,4,6,8,10,12,14,18,22];
                        foreach ($angsuran as $key => $value) {
                            echo "<option value='$value'>$value</option>";
                        }
                    ?>
                </select>
                <br>
                <label>Angsuran per Bulan : </label>
                <p id="cicilan"></p>
                <label>Keterangan Pinjaman</label>
                <input type="text" name="keterangan_pinjaman" required><br>
                <input type="submit" name="submit">
            </form>
        </div>
        <p class="footer"></p>
    </div>
</body>
<!-- <script>
    document.getElementById("besar_pinjaman").addEventListener("keyup",myFunction);
    document.getElementById("angsuran").addEventListener("change",myFunction);

    function myFunction(){
        var x = document.getElementById("besar_pinjaman").value;
        var y = document.getElementById("angsuran").value;
        document.getElementById("cicilan").value = (x/y).toFixed(0);
    }
</script> -->
<script src="<?php echo base_url('asset/js/jquery-3.2.0.min.js')?>"></script>
<script>
    $(document).ready(function() {
        var x, y;

        function cekCicilan(){
            x = $('#besar_pinjaman').val();
            y = $('#jml_angsuran option:selected').val();
            $('#cicilan').html(Math.ceil(x/y));
        }
        $('#besar_pinjaman').keyup(cekCicilan);
        $('#jml_angsuran').change(cekCicilan);

        // $('#angsuran').change(function() {
        //     cekCicilan();
        // });
    });
</script>
</html>
