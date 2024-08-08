<?php 
    session_start();
    include 'cek_session.php';

    include 'koneksi.php';
    $id = $_GET['id'];
    
    $sql = "SELECT id, name, harga FROM barang WHERE id = '$id'";
    $result = mysqli_query($koneksi, $sql);

    if (!$result) {
        // kembali ke halaman barang, jika ada error
        header('location: barang.php'); 
    }
    
    // ambil data barang dari database
    $barang = mysqli_fetch_assoc($result);

    // jika barang tidak ditemukan / kosong
    if (!$barang) {
        $_SESSION['error'] = "Barang tidak ditemukan";
        header('location: barang.php'); 
    }

?>

<form action="" method="post">
    
    <h2>Edit Barang</h2>

    Nama Barang<br>
    <input type="text" name="name" id="name" value="<?php echo $barang['name']; ?>">

    <br><br>

    Harga Barang<br>
    <input type="number" name="harga" id="harga" value="<?php echo $barang['harga']; ?>">

    <br><br>

    <button type="submit" name="ubah">Ubah</button>
    <a href="barang.php">Kembali</a>
    
</form>

<?php 

    if (isset($_POST['ubah'])) {

        include 'koneksi.php';
    
        $nama = $_POST['name'];
        $harga = $_POST['harga'];

        $sql = "UPDATE barang SET name = '$nama', harga = '$harga' WHERE id = '$id'; ";
        $result = mysqli_query($koneksi, $sql);

        if ($result) {
            $_SESSION['success'] = "Barang berhasil diubah";
            header('location: barang.php');
        } else {
            $_SESSION['error'] = "Barang gagal diubah";
            header('location: barang.php');
        }
        

    }

?>