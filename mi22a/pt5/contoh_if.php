<h2>Contoh IF</h2>

<form action="" method="get">
    Nilai <br>
    <input type="text" name="nilai">
    
    <h4>Nilai Lulus Minimal : <b>65</b></h4>

    <button type="submit">Cek Nilai</button>
</form>

<?php 

    if (isset($_GET['nilai'])) { 

        $nilai = $_GET['nilai'];
        $minimal = 65;

        if ($nilai >= $minimal) { ?>

            <h2 style="color:green">Selamat, Kamu Lulus !</h2>

        <?php } else { ?>
            
            <h2 style="color:red">Mohon maaf, kamu belum lulus.</h2>

        <?php }

    }
?>