<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Koperasi Simpan Pinjam</title>
    </head>
    <body>
        <h1>Login Koperasi Simpan Pinjam</h1>
        <form action="<?php echo base_url().'auth/login' ?>" method="post">
            <label>Username : </label><input type="text" name="username" required /><br>
            <label>Password : </label><input type="password" name="password" required /><br>
            <button type="submit" name="submit">Login</button>
        </form>

        <p>
            <b>Catatan : </b>
            <br>Petugas => fakhrifauzan, password
            <br>Anggota => test, test
        </p>
    </body>
</html>
