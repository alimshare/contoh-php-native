<h2>Contoh Foreach</h2>

<?php 

$kolam = [ "Lele", "Nila", "Gurame","Gabus", "Bawal", "Cupang"];

foreach ($kolam as $ikan) {
    echo $ikan . "<br>";
}

?>

<hr>

<?php 

$mahasiswa = [
    ["Rina", 100], 
    ["Dodi", 89], 
    ["Ujang", 65],
    ["Noni", 77]
];

foreach ($mahasiswa as $m) {
    echo "Nama : $m[0] <br>";
    echo "Nilai : $m[1] <br><br>";
}

?>