<?php

	session_start();
	require('database.php');
	$database = new Database();

	$old_password = $_POST['current-pass'];
	$new_password = $_POST['new-pass'];
	$confirm_password = $_POST['new-confirm-pass'];

	$username = $_SESSION['username'];
	$state_password = $database->getPassword($username, $old_password);

	if ($new_password == $confirm_password) {
		if ($state_password) {
			echo "Succesfully change password";
		} else {
			echo "Current password doesn't match";
		}
	} else {
		echo 'Incorrect New password or Confirm password';
	}
 ?>