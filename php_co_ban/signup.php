<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        session_start();
        if (isset($_SESSION['error'])) {
            echo '<p style="color:red">'.$_SESSION['error'].'</p>';
            unset($_SESSION['error']); //in ra 1 lần rồi xoá nó đi
        }
    ?>

    <a href="index.php">Trang chủ</a>
    <a href="signin.php">Đăng nhập</a>
    <form action="process_signup.php" method="post">
        <h1>Form đăng ký</h1>
        Tên
        <input type="text" name="name">
        <br>
        Email
        <input type="email" name="email">
        <br>
        Mật khẩu
        <input type="password" name="password">
        <br>
        <button type="submit">Đăng ký</button>
    </form>
</body>
</html>