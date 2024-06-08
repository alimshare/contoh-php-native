<?php
$profil = [
    "nama"   => "Abdullah",
    "jenkel" => "Pria",
    "alamat" => "Tangerang Selatan, Indonesia",
    "kontak" => [
        "nohp"      => "088090765332",
        "email"     => "alimm.abdullah@gmail.com",
        "instagram" => "-"
    ]
];
?>

<h2>Profil Saya</h2>
<table>
    <tr>
        <td>Nama</td>
        <td>:</td>
        <td><?php echo $profil["nama"] ?></td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td>:</td>
        <td><?php echo $profil["jenkel"] ?></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>:</td>
        <td><?php echo $profil["alamat"] ?></td>
    </tr>
    <tr>
        <td>Nomor HP</td>
        <td>:</td>
        <td><?php echo $profil["kontak"]["nohp"] ?></td>
    </tr>
    <tr>
        <td>Email</td>
        <td>:</td>
        <td><?php echo $profil["kontak"]["email"] ?></td>
    </tr>
    <tr>
        <td>Instagram</td>
        <td>:</td>
        <td><?php echo $profil["kontak"]["instagram"] ?></td>
    </tr>
</table>