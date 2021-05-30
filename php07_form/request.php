<?php 
    $title = 'login';
    include_once('../inc/header.php');
    require_once('../inc/functions.php');


?>

<?php 

$name= $_POST["username"];
$email= $_POST["useremail"];
    echo $name.'님이 입력한 이메일은'.$email.'입니다';
?>

<?php 
    include('../inc/footer.php');

?>