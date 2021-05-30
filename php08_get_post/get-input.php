<?php 
 //$product_id =$_GET['productid'];
 $product_id = filter_input(INPUT_GET,'productid',FILTER_VALIDATE_INT);
 //$limit = $_GET['limit']; 
 $limit =  filter_input(INPUT_GET,'limit',FILTER_VALIDATE_INT);

//  if( $product_id === false|| $limit === false){
//     die();
//  }
    if($product_id === false){
        $product_id = 10;
    }

    
    if($limit === false){
        $limit =10;
    }


?>

<h1>get input</h1>
<p>Showing category <?=$product_id;?>-limit <?=$limit;?></p>