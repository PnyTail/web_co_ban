<?php
    session_start();

    //nên kiểm tra nếu có session giỏ hàng trước hay không
    $cart = $_SESSION['cart'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="index.php">Trang chủ</a>
    <table border="1" width="100%">
        <tr>
            <th>Ảnh</th>
            <th>Tên sản phẩm</th>
            <th>Giá</th>
            <th>Số lượng</th>
            <th>Tổng tiền</th>
            <th>Xoá</th>
        </tr>
        <?php foreach ($cart as $id => $each):  ?>
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
                    <!-- cần validate thêm đoạn id, nếu user nhập id không tồn tại sẽ lỗi -->
                    <a href="update_quantity_in_cart.php?id=<?php echo $id ?>&type=decrease">
                        -
                    </a>
                    <?php echo $each['quantity'] ?>
                    <a href="update_quantity_in_cart.php?id=<?php echo $id ?>&type=increase">
                        +
                    </a>
                </td>
                <td>
                    <?php echo $each['price'] * $each['quantity'] ?>
                </td>
                <td>
                    <a href="delete_product_in_cart.php?id=<?php echo $id ?>">
                        Xoá
                    </a>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
</body>
</html>