<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        $ma = $_GET['ma'];
        require 'connect.php';  //những file quan trọng nên dùng require, không nên dùng include

        $sql = "select * from tin_tuc
        where ma = $ma";
        $ket_qua = mysqli_query($ket_noi, $sql);
        $tin_tuc = mysqli_fetch_array($ket_qua);
    ?>

    <form method="post" action="process_update.php">
        <input type="hidden" name="ma" value="<?php echo $tin_tuc['ma'] ?>">
        Tiêu đề
        <input type="text" name="title" value="<?php echo $tin_tuc['tieu_de'] ?>">
        <br>
        Nội dung
        <textarea name="content" id=""><?php echo $tin_tuc['noi_dung'] ?></textarea>
        <br>
        Link ảnh
        <input type="text" name="image" value="<?php echo $tin_tuc['anh'] ?>">
        <br>
        <button>Sửa</button>
    </form>

    <?php mysqli_close($ket_noi) ?>
</body>
</html>