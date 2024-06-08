<h2>Contoh Foreach PHP</h2>

<?php 

    $mobil = [
        "Xenia", "Avanza", "Yaris",
        "Fortuner", "Pajero", "Agya",
        "Ayla", "Jazz", "Jimy"
    ];

    foreach($mobil as $m) {
        echo "Mobil ". $m . "<br>";
    }


?>