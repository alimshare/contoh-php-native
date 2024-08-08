<link rel="stylesheet" href="style.css">

<?php 
    session_start();

    include 'cek_session.php';
    include 'koneksi.php';

    $sql = "SELECT id,name,harga FROM barang";
    $query = mysqli_query($koneksi, $sql); // jalankan perintah SQL
?>

<div style="margin-bottom: 10px;">
    <a href="tambah_barang.php" >Tambah Barang</a>
    <a href="logout.php">Logout</a>
</div>

<h2>Hallo <?php echo $_SESSION['user']; ?></h2>

<p>
    <?php 
        if (isset($_SESSION['error'])) {
            echo "<span style='color:red'>". $_SESSION['error'] ."</span>";
            unset($_SESSION['error']);
        }
         
        if (isset($_SESSION['success'])) {
            echo "<span style='color:green'>". $_SESSION['success'] ."</span>";
            unset($_SESSION['success']);
        }
    ?>
</p>

<table cellspacing="0" cellpadding="10px">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Action</th>
    </tr>

    <?php while($row = mysqli_fetch_assoc($query)) : ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo number_format($row['harga']); ?></td>
            <td>
                <a href="edit_barang.php?id=<?php echo $row['id'] ?>">Edit</a>
                <a href="hapus_barang.php?id=<?php echo $row['id']; ?>">Hapus</a>
            </td>
        </tr>
    <?php endwhile; ?>

</table>
