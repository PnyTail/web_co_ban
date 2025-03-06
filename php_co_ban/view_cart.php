<?php
    session_start();
    $cart = $_SESSION['cart'];
    require './admin/connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" width="100%">
        <tr>
            <th>Ảnh</th>
            <th>Tên sản phẩm</th>
            <th>Giá</th>
            <th>Số lượng</th>
            <th>Tổng tiền</th>
            <th>Xoá</th>
        </tr>
        <?php foreach ($cart as $id => $quantity):  ?>
            <?php
                $sql = "select * from products
                where id = '$id'";
                $result = mysqli_query($connect, $sql);
                $each = mysqli_fetch_array($result);
            ?>
            <tr>
                <td>
                    <img src="./admin/products/img/<?php echo $each['photo'] ?>" height="100px">
                </td>
                <td>
                    <?php echo $each['name'] ?>
                </td>
                <td>
                    <?php echo $each['price'] ?>
                </td>
                <td>
                    <?php echo $quantity ?>
                </td>
                <td>
                    <?php echo $each['price'] * $quantity ?>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
</body>
</html>