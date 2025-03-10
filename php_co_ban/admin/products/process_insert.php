<?php
    require '../check_admin_login.php';

    $name = $_POST['name'];
    $photo = $_FILES['photo'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $manufacturer_id = $_POST['manufacturer_id'];

    $folder = 'img/';

    // tránh trường hợp gửi file bị ghi đè nếu trùng tên
    $file_extension = explode('.', $photo['name'])[1];
    $file_name = time() . '.' . $file_extension;
    $file_path = $folder . $file_name;

    // die($target_file);
    move_uploaded_file($photo["tmp_name"], $file_path);

    require '../connect.php';
    $sql = "insert into products (name, photo, price, description, manufacturer_id) 
    values ('$name', '$file_name', '$price', '$description', '$manufacturer_id')";

    mysqli_query($connect, $sql);
    mysqli_close($connect);




