<?php

    $host       = "localhost"; // 127.0.0.1
    $user       = "root";
    $password   = "";
    $dbname     = "db_mi22a";

    $koneksi = mysqli_connect($host, $user, $password, $dbname);

    if (mysqli_connect_errno()) {
        die("Koneksi Gagal karena : ". mysqli_connect_error());
    }

?>