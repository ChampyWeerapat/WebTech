<?php
class Database {
  private $hostname = 'localhost';
  private $username = 'root';
  private $password = '';
  private $dbname = 'test';
  private $connection;

   public function __construct(){
    try{
      $this->connection = new PDO("mysql:host={$this->hostname};dbname={$this->dbname}", $this->username, $this->password);
      $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (Exception $e){
      die ('Database Connection Error : '.$e->getMessage());
    }
  }
public function getPassword($username, $password) {
    try {
      $sql = "SELECT password FROM user WHERE username = '$username' and password = '$password'";
      $stmt = $this->connection->query($sql);
      $count = $stmt->rowCount();
      $pass = false;
      if ($count == 1) {
        $row = $stmt->fetch();
        $pass = true;
      }
    } catch (Exception $e) {
      die($e->getMessage());
    }
    return $pass;
  }
  public function getProfile($username) {
    try {
      $sql = "SELECT username, fname, lname, role, path_pic, email FROM user WHERE username = '$username'";
      $stmt = $this->connection->query($sql);
    } catch (Exception $e) {
      die($e->getMessage());
    }
    return $stmt->fetch();
  }
  public function getAccount() {
    try {
      $sql = 'SELECT * FROM user';
      $stmt = $this->connection->query($sql);
    } catch (Exception $e) {
      die($e->getMessage());
    }
    return $stmt->fetchAll(PDO::FETCH_OBJ);
  }
	public function getMaxQrID(){
	$sql = "SELECT max(qrcode_id)+1 AS new_id FROM `qrcode`";
	$stmt = $this->connection->query($sql);
	$count = $stmt->rowCount();
      $id = '';
      if ($count == 1) {
        $row = $stmt->fetch();
        $id = $row["new_id"];
      }
	return $id;
  } 
  public function getEmail($username){
	  
    try {
      $sql = "SELECT email FROM user WHERE username = '$username' ";
      $stmt = $this->connection->query($sql);
      $count = $stmt->rowCount();
      $email = '';
      if ($count == 1) {
        $row = $stmt->fetch();
        $email = $row["email"];
      }
    }  catch (Exception $e) {
      die($e->getMessage());
    }
    return $email;
  } 
  // public function getRole($username, $password) {
  //   try {
  //     $sql = "SELECT role FROM user WHERE username = '$username' and password = '$password'";
  //     $stmt = $this->connection->query($sql);
  //     $count = $stmt->rowCount();
  //     $role = 'Wrong';
  //     if ($count == 1) {
  //       $row = $stmt->fetch();
  //       $role = $row["role"];
  //     }
  //   }  catch (Exception $e) {
  //     die($e->getMessage());
  //   }
  //   return $role;
  // }

  public function getEXP($qrcodeID) {
    try {
      $sql = "SELECT exp FROM qrcode WHERE qrcode_id = '$qrcodeID' ";
      $stmt = $this->connection->query($sql);
      $count = $stmt->rowCount();
      $exp = '';
      if ($count == 1) {
        $row = $stmt->fetch();
        $exp = $row["exp"];
      }
    } catch (Exception $e) {
      die($e->getMessage());
    }
    return $exp;
  }

  public function loginAutentication($username, $password) {
    $users = $this->getAccount();
    $role = $this->getRole($username, $password);
    foreach($users as $user) {
      if($user->username == $username && $user->password == $password) {
        return $role;
      } else {
        return $role;
      }
    }
  }
  
  public function insertUser($username,$password,$fname,$lname,$role,$path_pic,$email){
	try {
	 $sql = "INSERT INTO user (username,password,fname,lname,role,path_pic,email)
    VALUES ('$username','$password','$fname','$lname','$role','$path_pic','$email')";
	$stmt = $this->connection->query($sql);
	//echo "New record created successfully";
    }
	catch(PDOException $e){
    echo $e->getMessage();
    }
  }
  
  public function insertTeachCourse($role,$username,$sec_id){
	  try {
	 $sql = "INSERT INTO teachcourse (role,username,sec_id)
    VALUES ('$role','$username','$sec_id')";
	$stmt = $this->connection->query($sql);
	//echo "New record created successfully";
    }
	catch(PDOException $e){
    echo $e->getMessage();
    }
  }
  
  public function insertTakeCourse($username,$sec_id,$sub_id,$year,$semester){
	  try {
	 $sql = "INSERT INTO takecourse (username,sec_id,sub_id,year,semester)
    VALUES ('$username','$sec_id','$sub_id','$year','$semester')";
	$stmt = $this->connection->query($sql);
	//echo "New record created successfully";
    }
	catch(PDOException $e){
    echo $e->getMessage();
    }
  }
  
  public function insertTakeClass($date,$status,$username,$qrcode_id){
	  try {
	 $sql = "INSERT INTO takeclass (date,status,username,qrcode_id)
    VALUES ('$date','$status','$username','$qrcode_id')";
	$stmt = $this->connection->query($sql);
	//echo "New record created successfully";
    }
	catch(PDOException $e){
    echo $e->getMessage();
    }
  }
  
  public function insertSubject($sub_id,$name,$credit,$time){
	  try {
	 $sql = "INSERT INTO subject (sub_id,name,credit,time)
    VALUES ('$sub_id','$name','$credit','$time')";
	$stmt = $this->connection->query($sql);
	//echo "New record created successfully";
    }
	catch(PDOException $e){
    echo $e->getMessage();
    }
  }
 
 public function insertSection($sec_id,$sub_id,$year,$semester,$description){
	  try {
	 $sql = "INSERT INTO section (sec_id,sub_id,year,semester,description)
    VALUES ('$sec_id','$sub_id','$year','$semester','$description')";
	$stmt = $this->connection->query($sql);
	//echo "New record created successfully";
    }
	catch(PDOException $e){
    echo $e->getMessage();
    }
  }
  
  public function insertQr($qrcode_id,$sec_id,$sub_id,$exp,$date){
	 try {
	 $sql = "INSERT INTO qrcode (qrcode_id,sec_id,sub_id,exp,date)
    VALUES ('$qrcode_id','$sec_id','$sub_id','$exp','$date')";
	$stmt = $this->connection->query($sql);
	//echo "New record created successfully";
    }
	catch(PDOException $e){
    echo $e->getMessage();
    } 
  }
  
  public function insertGrade($grade,$username,$sub_id){
	 try {
	 $sql = "INSERT INTO grade (grade,username,sub_id)
    VALUES ('$grade','$username','$sub_id')";
	$stmt = $this->connection->query($sql);
	//echo "New record created successfully";
    }
	catch(PDOException $e){
    echo $e->getMessage();
    } 
  }
  
  public function insertComment($date,$text,$username,$sec_id){
	 try {
	 $sql = "INSERT INTO comment (date,text,username,sec_id)
    VALUES ('$date','$text','$username','$sec_id')";
	$stmt = $this->connection->query($sql);
	//echo "New record created successfully";
    }
	catch(PDOException $e){
    echo $e->getMessage();
    } 
  }
  

  
  public function updateUser($username,$password,$fname,$lname,$role,$path_pic,$email){
	 try{
  	$sql = "UPDATE user SET password='$password',fname='$fname',lname='$lname',role='$role',path_pic='$path_pic',email='$email' WHERE username='$username'";
	$stmt = $this->connection->query($sql);
	//echo "update";
     }
	catch(PDOException $e){
    echo $e->getMessage();
    }
  }
  
   public function updateSubject($sub_id,$name,$credit,$time){
	 try{
  	$sql = "UPDATE subject SET name='$name',credit='$credit',time='$time' WHERE sub_id='$sub_id'";
	$stmt = $this->connection->query($sql);
	//echo "update";
     }
	catch(PDOException $e){
    echo $e->getMessage();
    }
  }
  
  public function updateSection($sec_id,$sub_id,$year,$semester,$description){
	  try{
  	$sql = "UPDATE section SET year='$year',semester='$semester',description='$description' WHERE sub_id='$sub_id' and sec_id='$sec_id'";
	$stmt = $this->connection->query($sql);
	//echo "update";
     }
	catch(PDOException $e){
    echo $e->getMessage();
    }
  }
  
  public function updateGrade($grade,$username,$sub_id){
	  try{
  	$sql = "UPDATE grade SET grade='$grade' WHERE sub_id='$sub_id' and username='$username'";
	$stmt = $this->connection->query($sql);
	//echo "update";
     }
	catch(PDOException $e){
    echo $e->getMessage();
    }
  }
  
  public function updateComment($text,$username,$sec_id){
	 try{
  	$sql = "UPDATE comment SET text='$text' WHERE sec_id='$sec_id' and username='$username'";
	$stmt = $this->connection->query($sql);
	//echo "update";
     }
	catch(PDOException $e){
    echo $e->getMessage();
    }
  }
  
  public function updatePass($username,$passOld,$passNew){
	  try{
  	$sql = "UPDATE user SET  password='$passNew' WHERE password='$passOld' and username='$username'";
	$stmt = $this->connection->query($sql);
	//echo "update";
     }
	catch(PDOException $e){
    echo $e->getMessage();
    }
	  
  }
  
  
  public function updateFName($username,$password,$fname){
	  try{
  	$sql = "UPDATE fname SET  fname='$fname' WHERE password = '$password' and username='$username'";
	$stmt = $this->connection->query($sql);
	//echo "update";
     }
	catch(PDOException $e){
    echo $e->getMessage();
    }
	  
  }
  
  
  public function updateLName($username,$password,$lname){
	  try{
  	$sql = "UPDATE lname SET  lname='$lname' WHERE password = '$password' and username='$username'";
	$stmt = $this->connection->query($sql);
	//echo "update";
     }
	catch(PDOException $e){
    echo $e->getMessage();
    }
	  
  }
  
  public function updatePic($username,$password,$path_pic){
	  try{
  	$sql = "UPDATE path_pic SET  path_pic='$path_pic' WHERE password = '$password' and username='$username'";
	$stmt = $this->connection->query($sql);
	//echo "update";
     }
	catch(PDOException $e){
    echo $e->getMessage();
    }
	  
  }
}
?>