<?php include 'cek_session.php'; ?>

<style>
    table {
        width: 500px;
    }
</style>

<h2>Data Barang</h2>

<a href="tambah_barang.php">Tambah Barang</a> | 
<a href="logout.php">Logout</a>

<br><br>

<h3>Selamat Datang <?php echo $_SESSION['user']; ?></h3>

<p>
    <?php 
        if (isset($_SESSION['error'])) {
            echo "<span style='color:#811a1a'>".$_SESSION['error']."</label>";
            unset($_SESSION['error']);
        }

        if (isset($_SESSION['success'])) {
            echo "<span style='color:green'>".$_SESSION['success']."</label>";
            unset($_SESSION['success']);
        }
    ?>
</p>

<table cellspacing="0" cellpadding="8px" border="1">
    <tr>
        <th>ID Barang</th>
        <th>Nama Barang</th>
        <th>Aksi</th>
    </tr>

    <?php   
        include 'koneksi.php';

        $sql = "SELECT id,name FROM barang";
        $query = mysqli_query($koneksi, $sql);
    ?>

    <?php while ($row = mysqli_fetch_assoc($query)) : ?>
        <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['name'] ?></td>
            <td>
                <a href="edit_barang.php?id=<?php echo $row['id'] ?>">Edit</a>
                <a href="hapus_barang.php?id=<?php echo $row['id'] ?>">Hapus</a>
            </td>
        </tr>
    <?php endwhile; ?>

</table>