<?php require '../check_admin_login.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require '../connect.php';
        $sql = "select 
        orders.*,
        customers.name,
        customers.phone_number,
        customers.address
        from orders
        join customers
        on customers.id = orders.customer_id";
        $result = mysqli_query($connect, $sql);
    ?>
    <table border="1" width="100%">
        <tr>
            <th>Mã</th>
            <th>Thời gian đặt</th>
            <th>Thông tin người nhận</th>
            <th>Thông tin người đặt</th>
            <th>Trạng thái</th>
            <th>Tổng tiền</th>
            <th>Xem</th>
            <th>Sửa</th>
        </tr>
        <?php foreach ($result as $each): ?>
            <tr>
                <td><?php echo $each['id'] ?></td>
                <td><?php echo $each['created_at'] ?></td>
                <td>
                    <?php echo $each['name_receiver'] ?><br>
                    <?php echo $each['phone_receiver'] ?><br>
                    <?php echo $each['address_receiver'] ?>
                </td>
                <td>
                    <?php echo $each['name'] ?><br>
                    <?php echo $each['phone_number'] ?><br>
                    <?php echo $each['address'] ?>
                </td>
                <td>
                    <?php
                        switch ($each['status']) {
                            case '0':
                                echo "Mới đặt";
                                break;
                            case '1':
                                echo "Đã duyệt";
                                break;
                            case '2':
                                echo "Đã huỷ";
                                break;
                        }
                    ?>
                </td>
                <td><?php echo $each['total_price'] ?></td>
                <td>
                    <a href="detail.php?id=<?php echo $each['id'] ?>">
                        Xem
                    </a>
                </td>
                <td>
                    <!-- cần kiểm tra nếu status đã duyệt thì ẩn nút duyệt, tương tự với nút huỷ -->
                    <a href="upadate.php?id=<?php echo $each['id'] ?>&status=1">
                        Duyệt
                    </a>
                    <br>
                    <a href="upadate.php?id=<?php echo $each['id'] ?>&status=2">
                        Huỷ
                    </a>
                </td>
            </tr>
        <?php endforeach ?>
    </table>

    <?php mysqli_close($connect) ?>
</body>
</html>