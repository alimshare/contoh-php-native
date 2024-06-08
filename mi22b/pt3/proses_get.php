<?php
    if (isset($_GET['login'])) { # cek apakah tombol login sudah di klik ?
        echo "Username:" . $_GET['username'] . "<br>"; # cetak: Username: data dari url
        echo "Password:" . $_GET['password']; # cetak: Password: data dari url
    }
?>