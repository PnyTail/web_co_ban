<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Đây là trang chủ</h1>

    <?php 
        include 'connect.php';

        $tim_kiem = '';

        if (isset($_GET['tim_kiem'])) {
            $tim_kiem = $_GET['tim_kiem'];
        }
        
        $sql = "select * from tin_tuc
        where tieu_de like '%$tim_kiem%'";

        $ket_qua = mysqli_query($ket_noi, $sql);
    ?>

    <a href="./form_insert.php">Thêm bài viết</a>
    <a href="index.php">Trang chủ</a>

    <table border="1" width="100%">
        <caption>
            <form action="">
                <input type="search" name="tim_kiem" value="<?php echo $tim_kiem ?>">
            </form>
        </caption>
        <tr>
            <th>Mã</th>
            <th>Tiêu đề</th>
            <th>Ảnh</th>
            <th>Sửa</th>
            <th>Xoá</th>
        </tr>
        <?php foreach($ket_qua as $each): ?>
            <tr>
                <td><?php echo $each['ma'] ?></td>
                <td>
                    <a href="show.php?ma=<?php echo $each['ma'] ?>">
                        <?php echo $each['tieu_de'] ?>
                    </a>
                </td>
                <td>
                    <img src="<?php echo $each['anh'] ?>" alt="" height="150px">
                </td>
                <td>
                    <a href="form_update.php?ma=<?php echo $each['ma'] ?>">
                        Sửa
                    </a>
                </td>
                <td>
                    <a href="delete.php?ma=<?php echo $each['ma'] ?>">
                        Xoá
                    </a>
                </td>
            </tr>
        <?php endforeach ?>
    </table>

    <?php mysqli_close($ket_noi) ?>

</body>
</html>