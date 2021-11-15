<?php

$server = "localhost";
$username = "root";
$db = "phpdb";
$pw = "";

$conn = mysqli_connect($server,$username,$pw,$db);

if($conn){
}else{
    echo " Koneksi Gagal";
    die();
}

?>
