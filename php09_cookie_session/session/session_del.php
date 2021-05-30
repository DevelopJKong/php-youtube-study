<?php 
    session_start(); //세션 시작
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>세션</title>
</head>
<body>
    <?php
        session_unset(); //세션의 모든 변수를 해지
    ?>
</body>
</html>