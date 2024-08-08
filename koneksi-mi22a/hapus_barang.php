<?php
    session_start();

    $id = $_GET['id'];

    include 'koneksi.php';
    
    $sql = "DELETE FROM barang WHERE id = '$id';";
    $result = mysqli_query($koneksi, $sql);

    if ($result) {
        $_SESSION['success'] = "Barang berhasil dihapus";
        header('location: barang.php');
    } else {
        $_SESSION['error'] = "Barang gagal dihapus";
        header('location: barang.php');
    }

?>