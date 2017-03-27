<?php
include 'config.php';

if(isset($_POST['export'])){
	$user = $_POST['export'];
	$sql = "SELECT username,password,fname,lname,role FROM user WHERE username='$user'";
	$result = $db->query($sql);
	if ($result->num_rows > 0) {
     echo "<table><tr><th>ID</th><th>password</th><th>fname</th><th>lname</th><th>role</th></tr>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<tr>
		<td>".$row["username"]."</td>
		<td>".$row["password"]."</td>
		<td>".$row["fname"]."</td>
		<td>".$row["lname"]."</td>
		<td>".$row["role"]."</td>
		</td>
		</tr>";	
     }
     echo "</table>";
} else {
     echo "0 results";
}
$db->close();
}


if(isset($_POST['exportAll'])){
	$sql = "SELECT username,password,fname,lname,role FROM user ";
	$result = $db->query($sql);
	if ($result->num_rows > 0) {
     echo "<table><tr><th>ID</th><th>password</th><th>fname</th><th>lname</th><th>role</th></tr>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<tr>
		<td>".$row["username"]."</td>
		<td>".$row["password"]."</td>
		<td>".$row["fname"]."</td>
		<td>".$row["lname"]."</td>
		<td>".$row["role"]."</td>
		</td>
		</tr>";	
     }
     echo "</table>";
} else {
     echo "0 results";
}
$db->close();
}
?>