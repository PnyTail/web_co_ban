<?php
    session_start();
    // unset($_SESSION['cart']);
    $id = $_GET['id'];

    if (empty($_SESSION['cart'])) {
        $_SESSION['cart'][$id] = 1;
    } else {
        if (!empty($_SESSION['cart'][$id])) {
            $_SESSION['cart'][$id]++;
        } else {
            $_SESSION['cart'][$id] = 1;
        }
    }

    print_r(($_SESSION['cart']));
