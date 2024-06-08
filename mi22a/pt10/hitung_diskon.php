<?php

    function hitungDiskon($harga, $diskon)
    {
        $hargaDiskon = $diskon / 100 * $harga;
        return $hargaDiskon;
    }

    function hitungHargaSetelahDiskon($harga, $diskon)
    {
        $diskon = hitungDiskon($harga, $diskon);
        $hargaSetelahDiskon = $harga - $diskon;
        return $hargaSetelahDiskon;
    }

?>

<h2>Hitung Diskon</h2>

<form action="" method="post">
    Harga Barang : 
    <input type="text" name="harga" id="harga" value="100000"><br>

    Diskon : 
    <input type="text" name="diskon" value="0"> <br>

    <button type="submit" name="submit">Hitung</button>
</form>

<?php if (isset($_POST['submit'])) : ?>

    <?php
        $harga = $_POST['harga']; // ambil nilai inputan harga
        $diskon = $_POST['diskon']; // ambil nilai inputan diskon
    ?>

    Harga Barang : Rp. <?= number_format($harga); ?> <br>
    Diskon : <?php echo $diskon . "%"; ?> <br>
    Harga Diskon : Rp. <?= number_format(hitungDiskon($harga, $diskon)); ?> <br>
    Harga Setelah Diskon : <?= "Rp. " . number_format(hitungHargaSetelahDiskon($harga, $diskon)); ?>

<?php endif; ?>