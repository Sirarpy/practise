<?php
session_start();
include_once "db.php";
$connect = connect_db();
$email =$_POST['email'];
$password = md5($_POST['password']);
$login_query = "SELECT  `email`, `password` FROM `registration` WHERE `email`='$email' and `password`='$password'";


$result_login = mysqli_query($connect, $login_query );
if(!$result_login){
    die(mysqli_error($connect));
}else{
    $user = $result_login->fetch_all(MYSQLI_ASSOC);
    if(count($user)){
        $_SESSION['user'] = (object)$user[0];
        header("Location:account.php");
    }else{
        header("Location:login.php?lms=email or password isn't correct");
    }
}


?>