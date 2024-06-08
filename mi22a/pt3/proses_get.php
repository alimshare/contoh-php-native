<?php

    if (isset($_GET['login'])) {
        echo "Username:" . $_GET['username'] . "<br>";
        echo "Password:" . $_GET['password'];
    }

?>