<?php
class Database{
  private $hostname = 'localhost';
  private $username = 'root';
  private $password = '';
  private $dbname = '';
  private $connection;

  public function __construct(){
    try{
      $this->connection = new PDO("mysql:host={$this->hostname};"."dbname={$this->dbname}",$this->username,$this->password);
      $this->connection->setAttribute(PDO::ARRE_ERMODE,PDO::ERRMODE_EXCEPTION);
    } catch (Exception $e){
      die ('Database Connection Error : '.$e->getMessage());
    }
  }

  public function getAccount(){
    try {
      $sql = 'SELECT * FROM account';
      $stmt = $this->connection->query($sql);
    } catch (Exception $e) {
      die($e->getMessage());
    }
    return $stmt->fetchAll(PDO::FETCH_OBJ);
  }
  public function getJobs(){

  }
  public function loginAutentication(){
    $users = $this->getAccount();
    foreach($users as $user){
      if($user->username == $username && $user->password == $password){
        return true;
      }
      else{
        return false;
      }
  }
  public function checkDigit($id){
    
  }

}
?>
