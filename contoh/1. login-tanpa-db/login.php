<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <style>
        form {
            width: 300px;
            margin: 5em auto;
            padding: 1.4em;
            border: 1px solid gray;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            box-sizing: border-box;
        }
        form input {
            width: 100%;
            margin-bottom: 1em;
            box-sizing: border-box;
            padding: 4px 8px;
        }
        form label {
            font-size: 0.9em;
        }
        form button {
            padding: 0.5em;
            background-color: blue;
            color: white;
            border: none;
        }
        form #alert {
            color: red;
            font-size: 0.9em;
        }
    </style>
  </head>
  <body>
    <form action="" method="post">
        <h2>Login</h2>
        
        <p class="alert" id="alert"></p>

        <div class="">
            <label for="username" class="">Username</label><br>
            <input type="text" name="username" id="username" placeholder="username" class="">
        </div>

        <div class="mt-2">
            <label for="password" class="">Password</label><br>
            <input type="password" name="password" id="password" placeholder="password" class="">
        </div>
        
        <button type="submit" name="submit" class="">Login</button>
    </form>
  </body>
</html>

<?php

    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($username == "admin" && $password == "password") {
            // session_start();
            // $_SESSION['username'] = 'admin';
            // header("Location: index.php");
            echo "Login Berhasil";
        } else {
            echo "Username/Password tidak sesuai";
        }

        // echo "<script>document.getElementById('alert').innerHTML = 'Username atau Password salah';</script>";
    }

?>