<?php
    require '../check_Sadmin_login.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Đây là khu vực quản lý nhà sản xuất</h1>
    <a href="form_insert.php">
        Thêm
    </a>
    <?php
        include '../menu.php';
    ?>

    <?php
        require '../connect.php';
        $sql = "SELECT * FROM manufacturers";
        $result = mysqli_query($connect, $sql);
    ?>

    <table border="1" width="100%">
        <tr>
            <th>ID</th>
            <th>Tên</th>
            <th>Địa chỉ</th>
            <th>Điện thoại</th>
            <th>Ảnh</th>
            <th>Sửa</th>
            <th>Xoá</th>
        <?php foreach ($result as $each): ?>
            <tr>
                <td><?php echo $each['id'] ?></td>
                <td><?php echo $each['name'] ?></td>
                <td><?php echo $each['address'] ?></td>
                <td><?php echo $each['phone'] ?></td>
                <td>
                    <img src="<?php echo $each['photo'] ?>" alt="" height="100px">
                </td>
                <td>
                    <a href="form_update.php?id=<?php echo $each['id'] ?>">
                        Sửa
                    </a>
                </td>
                <td>
                    <a href="delete.php?id=<?php echo $each['id'] ?>">
                        Xoá
                    </a>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
    
    <?php
        mysqli_close($connect);
    ?>

</body>
</html>