<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <h1>Array</h1>
    <?php 
        //$배열 이름 = array();
        // $fruits = array();
        // $fruits[0] = 'apple';
        // $fruits[1] = 'banana';
        // $fruits[2] = 'orange';

        //echo $fruits[0];


        //자바스크립트에서는 전체의 길이를 length 라고 하지만 php 에서는 count 라고 한다 
     
        if(isset($fruits[3])){
            echo $fruits[3];
        } else {
            echo '과일 배열에는 세번째 값이 없다';
        }
        //isset(변수명, 변수명) 변수명이 있다면 그리고 변수값이 있다면 true , false를 반환한다

    
    ?>
<hr>
<h2>for 반복문</h2>
    <?php
   $fruits = array( 'apple' , 'banana' , 'orange');

   for( $i=0; $i < count($fruits); $i++){
       echo $fruits[$i].'<br />';
   }
    ?>

<h2>forEach 반복문</h2>
<?php 
    foreach($fruits as $item){
        echo $item.'<br/>';
    }

?>
<h2>연관 배열 Associative array</h2>
<?php 
    // $prices = array();
    // $prices['apple'] = 1000;
    // $prices['banana'] = 2000;
    // $prices['orange'] = 3000;

    $prices = array('apple' => 1000 , 'banana' => 2000, 'orange' => 3000);
    
    foreach($prices as $key => $price){
        echo $key. " _ ".$price."<br/>";
    }

?>


</body>
</html>