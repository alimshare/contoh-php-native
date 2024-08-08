<?php

    define('DB_HOST', "127.0.0.1");
    define('DB_USER', 'root');
    define('DB_PASSWORD', 'password');
    define('DB_NAME', 'db_test');

    $koneksi = mysqli_connect($db_host, $db_user, $db_password, $db_name);
    if (mysqli_connect_errno() > 0) {
        die("Koneksi Gagal : ".mysqli_error($con));
    }

?>