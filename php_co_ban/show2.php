<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $ma = $_GET['ma'];
        $ket_noi = mysqli_connect('localhost', 'root', '', 'j2school_wcb');
        mysqli_set_charset($ket_noi, 'utf8');

        $sql = "select * from tin_tuc
        where ma = $ma";
        $ket_qua = mysqli_query($ket_noi, $sql);
    ?>

    <?php foreach($ket_qua as $each) { ?>
        <h1>
            <?php echo $each['tieu_de'] ?>
        </h1>

        <p>
            <?php echo nl2br($each['noi_dung']) ?>
        </p>

        <img src="<?php echo $each['anh'] ?>" alt="" height="150px">
    <?php } ?>


    <?php mysqli_close($ket_noi) ?>
</body>
</html>


