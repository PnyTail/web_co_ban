<?php

$ma = $_POST['ma'];
$tieude = $_POST['title'];
$noi_dung = $_POST['content'];
$anh = $_POST['image'];

include 'connect.php';

$truy_van = "update tin_tuc
set
tieu_de = '$tieude',
noi_dung = '$noi_dung',
anh = '$anh'
where ma = '$ma'";

mysqli_query($ket_noi, $truy_van);
mysqli_close($ket_noi);

header('location: index.php');
