<?php 

    function tambah($a, $b) {
        return $a + $b;
    }

    function kurang($a, $b) {
        return $a - $b;
    }

    function bagi($a, $b) {
        return $a / $b;
    }

    function kali($a, $b) {
        return $a * $b;
    }

    $input1 = 20;
    $input2 = 4;
    $hasil_tambah = tambah($input1, $input2);
    $hasil_kurang = kurang($input1, $input2);

    echo "Hasil Penjumlahan : ". $hasil_tambah. "<br>";
    echo "Hasil Pengurangan : " . $hasil_kurang . "<br>";

?>