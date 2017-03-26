<?php 

session_start();
require('database.php');
$database = new Database();

$username = $_POST['login-name'];
$password = $_POST['login-pass'];

$check = $database->loginAutentication($username, $password);
if ($check) {
	$role = $database->getRole($username, $password);
	$_SESSION["login"] = true;
	$_SESSION["username"] = $username;
	$_SESSION["role"] = $role;
	echo $role;
} else {
	echo "wrong account";
}


?>