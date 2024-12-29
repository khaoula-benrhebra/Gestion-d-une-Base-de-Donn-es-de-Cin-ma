<?php

include('config/app.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinema Navbar</title>
    <link rel="stylesheet" href="assets/styles.css">
</head>
<body>
    <nav class="navbar">
        <div class="navbar-brand">
            <a href="#">Cinema</a>
        </div>
        <ul class="navbar-menu">
            <li><a href="<?= base_url('index.php')?>">Home</a></li>
            <li><a href="#">Movies</a></li>
            <li><a href="#">Showtimes</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
        <div class="navbar-auth">
            <a href="<?= base_url('register.php')?>" class="register">Register</a>
            <a href="<?= base_url('login.php')?>" class="login">Login</a>
        </div>
    </nav>
</body>
</html>

