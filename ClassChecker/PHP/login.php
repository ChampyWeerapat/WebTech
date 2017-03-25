<?php 

include("config.php");
// session_start();
   
if($_SERVER["REQUEST_METHOD"] == "POST") {
	// username and password sent from form
    if (isset($_POST["login-name"]) && !empty($_POST["login-name"]) && isset($_POST["login-pass"]) && !empty($_POST["login-pass"])) {
        $myusername = mysqli_real_escape_string($db, $_POST['login-name']);
        $mypassword = mysqli_real_escape_string($db, $_POST['login-pass']); 
    }

    $sql = "SELECT role FROM user WHERE username = '$myusername' and password = '$mypassword'";
    $result = $db->query($sql);
    $count = $result->num_rows;
    if ($count == 1) {
        $row = $result->fetch_assoc();
        $role = $row["role"];
        echo $role;
    } else {
        echo "Your Login Name or Password is invalid.";
    }
    

    // If result matched $myusername and $mypassword, table row must be 1 row
    // if ($count == 1) {
    //     $role = '';
        
        // output data of each row
        // while($row = $result->fetch_assoc()) {
        //     $role .= $row["role"] . "<br>";
            // $count++;
        // }
        // echo $count;
        // if($count == 1) {
        //     session_register("myusername");
        //     $_SESSION['login_user'] = $myusername;
             
        //     header("location: welcome.php");
        //     echo $myusername;
        //     echo $output;
        // } else {
        //     $error = "Your Login Name or Password is invalid";
        //     echo $error;
        //     echo "Your Login Name or Password is invalid";
        // }
    // }
    // echo $count;

    $db->close();
}

?>