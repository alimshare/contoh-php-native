<h2>Profil Saya</h2>

<?php
$profil = [
    "nama" => "Andi",
    "jenkel" => "Laki-laki",
    "umur" => 19,
    "kontak" => [
        "hp" => "089076541234",
        "email" => "andi@gmail.com"
    ]
];
?>

<table cellspacing="0" cellpadding="10px" border="1">
    <tr>
        <td>Nama</td>
        <td>
            <?php echo $profil["nama"]; ?>
        </td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td>
            <?php echo $profil["jenkel"]; ?>
        </td>
    </tr>
    <tr>
        <td>Umur</td>
        <td>
            <?php echo $profil["umur"]; ?>
        </td>
    </tr>
    <tr>
        <td>Email</td>
        <td>
            <?php echo $profil["kontak"]["email"]; ?>
        </td>
    </tr>
    <tr>
        <td>Nomor HP</td>
        <td>
            <?php echo $profil["kontak"]["hp"]; ?>
        </td>
    </tr>
</table>