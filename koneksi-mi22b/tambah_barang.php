<?php include 'cek_session.php'; ?>

<form action="" method="post">
    <h2>Form Tambah Barang</h2>

    Nama Barang <br>
    <input type="text" name="name">

    <br><br>

    <button type="submit" name="submit">Simpan</button>
    <a href="barang.php">Kembali</a>

</form>

<?php 

    if (isset($_POST['submit'])) {

        include 'koneksi.php';

        $nama = $_POST['name'];

        $sql = "INSERT INTO barang (name) VALUES ('$nama');";
        $query = mysqli_query($koneksi, $sql);

        if (!$query) {
            $_SESSION['error'] = "Gagal tambah barang";
            header('location: barang.php');
        }

        $_SESSION['success'] = "Berhasil tambah barang";
        header('location: barang.php'); // berpindah ke halaman barang.php

    }

?>