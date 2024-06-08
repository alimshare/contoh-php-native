<form action="" method="POST">
    <h2>Form Login</h2>

    Username:
    <input type="text" name="username">
    <br><br>

    Password:
    <input type="password" name="password">
    <br><br>

    <input type="submit" value="Login" name="login">

</form>

<?php 

    if (isset($_POST['login'])) {
        echo "Username:" . $_POST['username'] . "<br>";
        echo "Password:" . $_POST['password'];
    }

?>