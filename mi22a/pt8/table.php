<?php
$peserta = [
    ["Andi", "Laki-laki"],
    ["Siti", "Perempuan"],
    ["Joni", "Laki-laki"],
    ["Jihan", "Perempuan"],
    ["Dedi", "Laki-laki"],
    ["Aldi", "Laki-laki"],
    ["Dede", "Perempuan"],
    ["Astri", "Perempuan"]
];
?>

<style>
    table {
        border: 1px solid grey;
        padding: 0;
    }
    tr {
        padding: 0;
        margin: 0;
    }

    td, th {
        padding: 8px;
        border: 1px solid grey;
        margin: 0;
    }
    td:hover {
        background-color: grey;
    }
</style>

<table>
    <tr>
        <th>Title</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
    </tr>

    <?php foreach ($peserta as $p) : ?>
        <tr>
            <td>
                <?php 
                    if ($p[1] == "Laki-laki") {
                        echo "Bapak";
                    } else {
                        echo "Ibu";
                    }
                ?>
            </td>
            <td><?= $p[0] ?></td>
            <td><?= $p[1] ?></td>
        </tr>
    <?php endforeach; ?>

</table>