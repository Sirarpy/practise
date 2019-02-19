<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include_once "db.php";

if($_POST['password'] != $_POST['rep_password'] && count($_POST['password']) <= 5 ){
    header("Location:registration.php?msg=Password isn't correct");
    die();
}

$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$email = $_POST['email'];
$password = md5($_POST['password']);

if(!filter_var($email, FILTER_VALIDATE_EMAIL) && $rows['email'] === $email) {
    header("Location:registration.php?msg=Email isn't correct");
    die();
}

$connect = connect_db();

$query = "INSERT INTO `registration`(`id`,`first_name`, `last_name`, `picture`,`email`, `password`) VALUES (null,'$first_name','$last_name','account.png','$email','$password')";
$result = mysqli_query($connect, $query);

if (!$result) {
    die(mysqli_error($connect));
}

$rows = mysqli_fetch_assoc($result);


header("Location:login.php?reg=Your registration have been done successfully , please login :) ");
