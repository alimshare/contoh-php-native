<?php 
    session_start();
    include 'cek_session.php';
?>

<form action="" method="post">
    
    <h2>Tambah Barang</h2>

    Nama Barang<br>
    <input type="text" name="name" id="name">

    <br><br>

    Harga Barang<br>
    <input type="number" name="harga" id="harga">

    <br><br>

    <button type="submit" name="simpan">Simpan</button>
    <a href="barang.php">Kembali</a>
    
</form>

<?php 
    if (isset($_POST['simpan'])) {
        
        include 'koneksi.php';

        $nama = $_POST['name'];
        $harga = $_POST['harga'];

        $sql = "INSERT INTO barang (name, harga) VALUES('$nama', '$harga');";
        $result = mysqli_query($koneksi, $sql);

        if ($result) {
            $_SESSION['success'] = "Barang berhasil ditambah";
            header('location: barang.php'); // berpindah ke halaman barang.php
        } else {
            $_SESSION['error'] = "Barang Gagal ditambah";
            header('location: barang.php'); // berpindah ke halaman barang.php
        }
        
    }
?>
