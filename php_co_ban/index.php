<?php
    session_start();
    // echo $_SESSION['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        #tong {
            width: 100%;
            height: 500px;
            background-color: black;
        }
        #tren {
            width: 100%;
            height: 20%;
            background-color: pink;
        }
        #giua {
            width: 100%;
            height: 70%;
            background-color: red;
        }
        #duoi {
            width: 100%;
            height: 10%;
            background-color: purple;
        }
    </style>

</head>
<body>
    <div id="tong">
        <?php include 'menu.php' ?>
        <?php include 'products.php' ?>
        <?php include 'footer.php' ?>
    </div>
</body>
</html>