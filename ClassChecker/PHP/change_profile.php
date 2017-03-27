<?php  

	session_start();
	require('database.php');
	$database = new Database();

	$username = $_SESSION['username'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	// $path_pic = $_POST['path_pic'];
	$email = $_POST['email'];
	$pwd = $_POST['confirm-pass'];


	$check = $database->loginAutentication($username, $pwd);
	if ($check != "Wrong") {
		$database->updateProfile($username, $fname, $lname, $email);
		$_SESSION["fname"] = $fname;
		$_SESSION["lname"] = $lname;
		$_SESSION["email"] = $email;
		echo 'yes';
	} else {
		echo 'no';
	}

	function uploadPic($username) {
		$target_dir = "uploads/";
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
		    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
		    if($check !== false) {
		        $uploadOk = 1;
		    } else {
		        $uploadOk = 0;
		    }
		}
		// Check if file already exists
		if (file_exists($target_file)) {
		    $uploadOk = 0;
		}
		if (file_exists($target_file)) {
	      $temp = explode(".", basename($_FILES["fileToUpload"]["name"]));
	      $fileName = $temp[0]."1.".$temp[1];
	      $target_file = $target_dir.$fileName;
	      $uploadOk = 1;
		}
		// Check file size
		if ($_FILES["fileToUpload"]["size"] > 500000) {
		    $uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		    return false;
		// if everything is ok, try to upload file
		} else {
		    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		    	$database->updatePic($username, $target_file);
          		return true;
		    } else {
		        return false;
		    }
		}
	}

?>