<?php include 'cek_session.php'; ?>

<?php 
    $id = $_GET['id'];

    include 'koneksi.php';

    $sql = "SELECT id,name FROM barang WHERE id = '$id';";
    $result = mysqli_query($koneksi, $sql);

    $data = mysqli_fetch_assoc($result);
?>


<form action="" method="post">
    <h2>Form Edit Barang</h2>
    
    <input type="hidden" name="id" value="<?php echo $data['id'];  ?>">

    Nama Barang <br>
    <input type="text" name="name" value="<?php echo $data['name'] ?>">

    <br><br>

    <button type="submit" name="submit">Simpan</button>
    <a href="barang.php">Kembali</a>

</form>

<?php 

    if (isset($_POST['submit'])) {

        $id = $_POST['id'];
        $name = $_POST['name'];

        include 'koneksi.php';
        
        $sql = "UPDATE barang SET name='$name' WHERE id = '$id';";
        $result = mysqli_query($koneksi, $sql);

        if ($result) {
            $_SESSION['success'] = "Berhasil ubah barang";
            header('location: barang.php');  
        } else {
            $_SESSION['error'] = "Gagal hapus barang";
            header('location: barang.php');  
        }


    }

?>