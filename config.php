<?php 

session_start();

$server = "localhost:3306";
$user = "root";
$pass = "";
$database = "gym";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>