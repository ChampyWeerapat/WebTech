<?php
   // $DB_SERVER = 'localhost';
   // $DB_USERNAME = 'root';
   // $DB_PASSWORD = '';
   // $DB_DATABASE = 'test';
   // $db = new PDO("mysql:host=$DB_SERVER;dbname=$DB_DATABASE", $DB_USERNAME, $DB_PASSWORD);
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'test');
   $db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
?>