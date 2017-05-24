<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Koperasi</title>
        <style>
            ul, li {
                display: inline;
            }
            nav, footer {
                text-align: center;
            }
        </style>
    </head>
    <body>
        <nav>
            <h2>Koperasi Simpan Pinjam</h2>
            <ul>
                <li>
                    <a href="<?php echo base_url();?>anggota">Anggota</a>
                </li>
                |
                <li>
                    <a href="<?php echo base_url();?>petugas">Petugas</a>
                </li>
                |
                <li>
                    <a href="<?php echo base_url();?>simpanan">Simpanan</a>
                </li>
                |
                <li>
                    <a href="<?php echo base_url();?>kategori_pinjaman">Kategori Pinjaman</a>
                </li>
                |
                <li>
                    <a href="<?php echo base_url();?>pinjaman">Pinjaman</a>
                </li>
                |
                <li>
                    <a href="<?php echo base_url();?>angsuran">Angsuran</a>
                </li>
            </ul>
        </nav>
        <?php echo $contents; ?>
        <footer>
            Copyright &copy <?php echo date('Y'); ?>
        </footer>
    </body>
</html>
