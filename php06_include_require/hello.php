<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $con=mysqli_connect("localhost","root","1234","") or die("MySQL 접속 실패!!");

        $sql = "CREATE DATABASE sqlDB";
        $ret = mysqli_query($con,$sql);

        if($ret){
            echo "sqlDB가 성공적으로 생성됨";
        } else {
            echo "sqlDB 생성 실패!!"."<br>";
            echo "실패 원인 : ".mysqli_error($con);
        }

        mysqli_close($con);



    ?>
</body>
</html>