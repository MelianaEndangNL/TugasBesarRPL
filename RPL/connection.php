<?php

$db_host="localhost";
$db_user="root";
$db_pass="";
$db_name= "sewabaju";
$connection=mysqli_connect($db_host, $db_user, $db_pass, $db_name);
// $connection=mysqli_connect("localhost","root","sewabaju");

if(!$connection){
    die ("koneksi gagal : ".mysqli_connect_error());
}
?>