<?php
    session_start();

    //nên kiểm tra nếu có session giỏ hàng trước hay không
    $cart = $_SESSION['cart'];
    $sum = 0;
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
                    <?php
                        $result = $each['price'] * $each['quantity'];
                        echo $result;
                        $sum += $result;
                    ?>
                </td>
                <td>
                    <a href="delete_product_in_cart.php?id=<?php echo $id ?>">
                        Xoá
                    </a>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
    <h1>
        Tổng tiền:
        $<?php echo $sum ?>
    </h1>

    <?php
        $id = $_SESSION['id'];
        require './admin/connect.php';
        $sql = "SELECT * FROM customers WHERE id = '$id'";
        $result = mysqli_query($connect, $sql);
        $each = mysqli_fetch_array($result);
    ?>

    <form action="process_checkout.php" method="post">
        Tên người nhận
        <input type="text" name="name_receiver" value="<?php echo $each['name'] ?>">
        <br>
        Số điện thoại người nhận
        <input type="text" name="phone_receiver" value="<?php echo $each['phone_number'] ?>">
        <br>
        Địa chỉ người nhận
        <input type="text" name="address_receiver" value="<?php echo $each['address'] ?>">
        <br>
        <button type="submit">Đặt hàng</button>
    </form>

    <?php mysqli_close($connect); ?>
</body>
</html>