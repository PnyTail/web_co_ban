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

        $trang = 1;
        if (isset($_GET['trang'])) {
            $trang = $_GET['trang'];
        }

        $tim_kiem = '';

        if (isset($_GET['tim_kiem'])) {
            $tim_kiem = $_GET['tim_kiem'];
        }

        $sql_so_tin_tuc = "select count(*) from tin_tuc
        where tieu_de like '%$tim_kiem%'";
        $mang_so_tin_tuc = mysqli_query($ket_noi, $sql_so_tin_tuc);
        $ket_qua_so_tin_tuc = mysqli_fetch_array($mang_so_tin_tuc);
        $so_tin_tuc = $ket_qua_so_tin_tuc['count(*)'];

        $so_tin_tuc_tren_mot_trang = 1;

        $so_trang = ceil($so_tin_tuc / $so_tin_tuc_tren_mot_trang);
        //die($so_trang);

        $bo_qua = $so_tin_tuc_tren_mot_trang * ($trang - 1);

        
        $sql = "select * from tin_tuc
        where tieu_de like '%$tim_kiem%'
        limit $so_tin_tuc_tren_mot_trang offset $bo_qua";

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
    <?php for($i = 1; $i <= $so_trang; $i++) { ?>
        <a href="?trang=<?php echo $i ?>&tim_kiem=<?php echo $tim_kiem ?>">
            <?php echo $i ?>
        </a>
    <?php } ?>

    <?php mysqli_close($ket_noi) ?>

</body>
</html>