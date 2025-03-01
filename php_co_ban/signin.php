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
    <form action="process_signin.php" method="post">
        <h1>Form đăng nhập</h1>
        <br>
        Email
        <input type="email" name="email">
        <br>
        Mật khẩu
        <input type="password" name="password">
        <br>
        <button type="submit">Đăng nhập</button>
    </form>
</body>
</html>