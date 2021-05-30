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
    // $result = 1 < 3; // true 1 false 기본 0 하지만 php에서는 아무것도 들어가지 않는다
    // echo $result; 


    $first_name = 'jeongbin';
    $last_name = 'park';

    if($first_name == 'jeongbin' && $last_name == 'park'){
        echo '조건은 참입니다';
    } else {
        echo '조건은 거짓입니다';
    }


    ?>
</body>
</html>