<?php

    session_start();

    // kiểm tra super admin

    // !isset($_SESSION['level']) || $_SESSION['level'] !== 1
    if (empty($_SESSION['level'])) {
        header('Location: ../index.php');
        exit;
    }