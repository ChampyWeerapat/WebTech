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

  public function getAccount() {
    try {
      $sql = 'SELECT * FROM user';
      $stmt = $this->connection->query($sql);
    } catch (Exception $e) {
      die($e->getMessage());
    }
    return $stmt->fetchAll(PDO::FETCH_OBJ);
  }

  public function getRole($username, $password) {
    try {
      $sql = "SELECT role FROM user WHERE username = '$username' and password = '$password'";
      $stmt = $this->connection->query($sql);
      $count = $stmt->rowCount();
      $role = 'Wrong';
      if ($count == 1) {
        $row = $stmt->fetch();
        $role = $row["role"];
      }
    }  catch (Exception $e) {
      die($e->getMessage());
    }
    return $role;
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
  
  public function insertUser($username,$password,$fname,$lname,$role,$path_pic){
	try {
	 $sql = "INSERT INTO user (username,password,fname,lname,role,path_pic)
    VALUES ('$username','$password','$fname','$lname','$role','$path_pic')";
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
  
  public function insertTakeCourse($username,$sec_id){
	  try {
	 $sql = "INSERT INTO takecourse (username,sec_id)
    VALUES ('$username','$sec_id')";
	$stmt = $this->connection->query($sql);
	//echo "New record created successfully";
    }
	catch(PDOException $e){
    echo $e->getMessage();
    }
  }
  
  public function insertTakeClass($date,$username,$qrcode_id){
	  try {
	 $sql = "INSERT INTO takeclass (date,username,qrcode_id)
    VALUES ('$date','$username','$qrcode_id')";
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
 
 public function insertSection($sec_id,$sub_id,$year,$semester,$time,$description){
	  try {
	 $sql = "INSERT INTO section (sec_id,sub_id,year,semester,time,description)
    VALUES ('$sec_id','$sub_id','$year','$semester','$time','$description')";
	$stmt = $this->connection->query($sql);
	//echo "New record created successfully";
    }
	catch(PDOException $e){
    echo $e->getMessage();
    }
  }
  
  public function insertQr($qrcode_id,$sec_id,$mfd,$exp){
	 try {
	 $sql = "INSERT INTO qrcode (qrcode_id,sec_id,mfd,exp)
    VALUES ('$qrcode_id','$sec_id','$mfd','$exp')";
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
  
  public function updateUser($username,$password,$fname,$lname,$role,$path_pic){
	 try{
  	$sql = "UPDATE user SET password='$password',fname='$fname',lname='$lname',role='$role',path_pic='$path_pic' WHERE username='$username'";
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
  
  public function updateSection($sec_id,$sub_id,$year,$semester,$time,$description){
	  try{
  	$sql = "UPDATE section SET year='$year',semester='$semester',time='$time',description='$description' WHERE sub_id='$sub_id' and sec_id='$sec_id'";
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
}
?>