<?php session_start(); ?>

<style>
    body {
        font-family:Arial, Helvetica, sans-serif;
    }
    #form-login {
        width: 300px;
        background-color: gray;
        padding: 8px;
        margin: 35px auto;
    }
    #form-login input {
        width: 100%;
    }
</style>

<form action="" method="post" id="form-login">
    <h3>Login</h3>

    <p id="error">
        <?php 
            if (isset($_SESSION['error'])) {
                echo "<span style='color:#811a1a'>".$_SESSION['error']."</label>";
                unset($_SESSION['error']);
            }
        ?>
    </p>

    Username <br>
    <input type="text" name="username" id="username">

    <br><br>

    Password <br>
    <input type="password" name="password" id="password">

    <br><br>

    <button type="submit" name="login">Login</button>
</form>

<?php 

    if (isset($_POST['login'])) {

        $username = $_POST['username'];
        $password = $_POST['password'];

        // if ($username == "admin" && $password == "123456") 
        // {
        //     $_SESSION['user'] = $username;
        //     header('location: barang.php');
        // } else {
        //     $_SESSION['error'] = "Username / Password tidak sesuai";
        //     header('location: login.php');
        // }

        $sql = "SELECT username, password FROM user 
                WHERE username = '$username' AND password = sha1('$password'); ";
        
        $koneksi = mysqli_connect("localhost", "root", "", "db_mi22b");
        $result = mysqli_query($koneksi, $sql);
        
        $user = mysqli_fetch_assoc($result); 
        if ($user) {            
            $_SESSION['user'] = $username;
            header('location: barang.php');
        } else {
            $_SESSION['error'] = "Username / Password tidak sesuai";
            header('location: login.php');
        }

    }

?>