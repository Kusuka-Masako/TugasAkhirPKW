<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "ucp2pkw_databukuwak";

$connect = mysqli_connect("$server", "$username","$password","$database");

if(mysqli_connect_errno()){
    echo 'Gagal menghubungkan ke database : ' .mysqli_connect_error();
}
?>