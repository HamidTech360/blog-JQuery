<?php
// $host = "sql105.epizy.com";
// $username = "epiz_27866402";
// $password = "olamilekan2020";
// $db = "epiz_27866402_post";

$host = "localhost";
$username = "root";
$password = "";
$db = "posts";
$connect = mysqli_connect($host, $username, $password, $db);
session_start();
// if($connect){
//     echo 'connection successfully established';
// }else{
//     echo 'failed to connect successfully';
//     echo mysqli_error($connect);
// }
