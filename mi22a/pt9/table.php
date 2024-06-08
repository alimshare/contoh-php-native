<?php

$siswa = [
    ["Sari", "Perempuan"],
    ["Devi", "Perempuan"],
    ["Luis", "Laki-laki"],
    ["Jeje", "Laki-laki"],
    ["Budi", "Laki-laki"],
    ["Tina", "Perempuan"]
];

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body style="padding: 25px;">
    <table class="table table-bordered" style="width: 500px;">
        <tr style="background-color: black; color:whitesmoke">
            <th>Nama</th>
            <th>Jenis Kelamin</th>
        </tr>

        <?php foreach ($siswa as $s) : ?>
            <tr>
                <td><?php echo $s[0] ?></td>
                <td><?php echo $s[1] ?></td>
            </tr>
        <?php endforeach; ?>

    </table>
</body>

</html>