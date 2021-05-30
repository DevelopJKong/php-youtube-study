<?php
    $title = 'home';
    include('inc/header.php');  //오류가 있더라도 뒤에 있는 코드를 실행한다 사용처는 치명적인 오류가 아닐때 뒤에 있는 코드를 실행할때
    
    //include_once는 한번만 출력한다
    
    require('inc/functions.php'); //에러가 나면 치명적인 오류가 나타날때 사용한다

    //required는 두번 선언할수없다
    //reuqire__oncee도 한번만 사용할수있게 한다

?>


    <?php 
   
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


  
        output($fruits);
    ?>
  
    <h2>정적변수</h2>
    <?php 
    
        increment();
    
    ?>
<?php 
    include('inc/footer.php');

?>