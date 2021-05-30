<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>function</title>
</head>
<body>
    <h1>function</h1>
    <pre>
        function 함수이름(매개변수1,매개변수2) {
            ...할일 ..
        }
        함수이름();
            function class_total(){
        }
    </pre>

    <?php 
        function sum($x,$y){
            $result =  $x + $y; //local variable
            return $result;
        }
        $result = sum(10,20); //global variable
        echo $result;
    ?>

    <h2>배열 값 출력하기</h2>

    <?php 
        $fruits = [
            'apple',
            'mango',
            'banana',
            'orange'
        ];
        // echo '<pre>';
        // print_r($fruits);
        // echo '</pre>';


        function output($value){
        echo '<pre>';
        print_r($value);
        echo '</pre>';

        }
        output($fruits);
    ?>
    <h2>지역변수 vs 전역변수</h2>
    <?php 
        function myfunc(){
            $var = 10;
            echo "{$var}";
        }
    
        myfunc();
    ?>
    <hr>
    <?php 
        $var2 = 20;
        function myfunc2(){
       
            global $var2;
            echo "{$var2}";
            echo "{$GLOBALS['var2']}"
        }
        myfunc2();
 
    ?>

    <h2>정적변수</h2>
    <?php 
        function increment(){
            static $count = 0;
            echo "{$count}";
            $count++;

        }
        increment();
    
    ?>
</body>
</html>