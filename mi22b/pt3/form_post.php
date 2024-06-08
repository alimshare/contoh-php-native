<form action="" method="post">
    <h2>Login</h2>

    Username:
    <input type="text" name="username">
    <br><br>

    Password:
    <input type="password" name="password">
    <br><br>

    <input type="submit" name="login" value="Login">

</form>
<?php
    if (isset($_POST['login'])) { # cek apakah tombol login sudah di klik ?
        echo "Username:" . $_POST['username'] . "<br>"; # cetak: Username: data dari form
        echo "Password:" . $_POST['password']; # cetak: Password: data dari form
    }
?>