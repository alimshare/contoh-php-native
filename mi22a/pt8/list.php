<?php

$peserta = [
    "Andi", "Siti", "Jihan", "Dedi", "Momon",
    "Sofie", "Aldi", "Artha", "Wili", "Jeje",
    "Muti", "Arkam", "Mudir", "Senna", "Yogi",
    "Ade", "Joni", "Anna", "Sinta"
];

?>

<style>
    .odd {
        color: white;
        background-color: black;
    }

    .even {
        color: black;
        background-color: white;
    }

    ul {
        margin: 0;
        padding: 0;
    }

    li {
        list-style: none;
        padding: 5px;
        margin-bottom: 5px;
        width: 220px;
        border: 1px solid gray;
    }
    
    li:hover {
        background-color: blue;
        color: white;
    }
</style>

<h2>Daftar Peserta</h2>
<ul>
    <?php foreach ($peserta as $index => $p) : ?>
        <li class="<?= ($index % 2 == 0 ? 'even' : 'odd')  ?>">
            Mr/Mrs. <?= $p ?>
        </li>
    <?php endforeach; ?>
</ul>