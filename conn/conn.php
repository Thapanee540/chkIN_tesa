<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "plearnja_tgr2019";

$conn = mysqli_connect($servername, $username ,$password ,$dbname);
mysqli_set_charset($conn, "utf8");

if(!$conn){
    die("connection failed : ".mysqli_connect_errno());
}
?>