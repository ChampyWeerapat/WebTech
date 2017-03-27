<?php 

session_start();
require('database.php');
$database = new Database();

$username = $_POST['login-name'];
$password = $_POST['login-pass'];

$check = $database->loginAutentication($username, $password);
if ($check) {
	$role = $database->getRole($username, $password);
	//create session
	$_SESSION["login"] = true;
	$_SESSION["username"] = $username;
	$_SESSION["role"] = $role;
    
    date_default_timezone_set("Asia/Bangkok");
    $date=date("Y-m-d H:i:s");
    $qrcode_id=$_POST['qr'];
    
    $database->insertTakeClass($date,$username,$qrcode_id);
	echo $role;
} else {
	echo "wrong account";
}

?>