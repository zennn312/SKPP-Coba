<?php
session_start();
include "koneksi.php";

// Kalau sudah login, jangan boleh akses login lagi
if (isset($_SESSION['username'])) {
    header("Location: index.php");
    exit;
}

if (isset($_POST['login'])) {

    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    $result = mysqli_query($conn, 
        "SELECT * FROM user WHERE username = '$username'");

    if (mysqli_num_rows($result) === 1) {

        $row = mysqli_fetch_assoc($result);

        if (password_verify($password, $row['password'])) {

            $_SESSION['username'] = $username;
            header("Location: index.php");
            exit;
        }
    }

    echo "<script>alert('Username atau password salah!');</script>";
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>

    <?php


    ?>
    <form action="" method="post">
        <ul>
            <li>
                <label for="username">Username : </label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Password : </label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <button type="submit" name="login">Login</button>
                <a href="regis.php">Registrasi</a>
            </li>
        </ul>
    </form>
</body>

</html>