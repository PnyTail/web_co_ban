<?php

$tieude = $_POST['title'];
$noi_dung = $_POST['content'];
$anh = $_POST['image'];

include 'connect.php';

$sql = "insert into tin_tuc (tieu_de, noi_dung, anh)
        values ('$tieude', '$noi_dung', '$anh')";
//die($sql); //dừng chương trình và in ra câu lệnh sql


mysqli_query($ket_noi, $sql);

//in ra lỗi nếu có
$loi = mysqli_error($ket_noi);
echo $loi;

//nên đóng kết nối khi thực hiện xong câu truy vấn
mysqli_close($ket_noi);

header('location: index.php');



