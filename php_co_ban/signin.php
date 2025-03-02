<?php
    session_start();

    if (isset($_COOKIE['remember'])) {
        $token = $_COOKIE['remember'];
        require './admin/connect.php';
        $sql = "select * from customers
        where token = '$token'
        limit 1";
        $result = mysqli_query($connect, $sql);
        $mumber_rows = mysqli_num_rows($result);
        if ($number_rows == 1) {
            $each = mysqli_fetch_array($result);
            $_SESSION['id'] = $each['id'];
            $_SESSION['name'] = $each['name'];
        }
    }

    if (isset($_SESSION['id'])) {
        header('location: user.php');
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p style="color:red">
        <?php
            if (isset($_GET['error'])) {
                echo $_GET['error'];
            }
        ?>
    </p>
    <a href="signup.php">Đăng ký</a>
    <a href="index.php">Trang chủ</a>
    <form action="process_signin.php" method="post">
        <h1>Form đăng nhập</h1>
        <br>
        Email
        <input type="email" name="email">
        <br>
        Mật khẩu
        <input type="password" name="password">
        <br>
        Ghi nhớ đăng nhập
        <input type="checkbox" name="remember">
        <br>
        <button type="submit">Đăng nhập</button>
    </form>
</body>
</html>