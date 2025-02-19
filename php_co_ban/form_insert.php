<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="index.php">Trang chủ</a>
    <form method="post" action="process_insert.php">
        Tiêu đề
        <input type="text" name="title">
        <br>
        Nội dung
        <textarea name="content" id=""></textarea>
        <br>
        Link ảnh
        <input type="text" name="image">
        <br>
        <button>Thêm</button>
    </form>
</body>
</html>