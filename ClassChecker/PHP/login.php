<?php 

session_start();
require('database.php');
$database = new Database();

$username = $_POST['login-name'];
$password = $_POST['login-pass'];

$check = $database->loginAutentication($username,$password);
echo $check;

?>