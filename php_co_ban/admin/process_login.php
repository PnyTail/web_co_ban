<?php

    $email = $_POST['email'];
    $password = $_POST['password'];

    require 'connect.php';

    $sql = "SELECT * FROM admin WHERE email = '$email' AND password = '$password'";

    $result = mysqli_query($connect, $sql);
    if (mysqli_num_rows($result) == 1) {
        $each = mysqli_fetch_array($result);
        session_start();

        $_SESSION['id'] = $each['id'];
        $_SESSION['name'] = $each['name'];
        $_SESSION['level'] = $each['level'];

        header('Location: root/index.php');
        exit;
    }

    mysqli_close($connect);
    header('Location: index.php');