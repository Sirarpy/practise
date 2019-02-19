<?php
function connect_db(){
    $server = 'localhost';
    $login= 'root';
    $pass = "root";
    $base = "sys";

    $connect = mysqli_connect($server,$login, $pass, $base);

    if (!$connect) {
        echo "error".mysqli_connect_error();
    }
    return $connect;
}