<?php 

$sName = "localhost";
$uName = "root";
$pass = "";
$db_name = "todolist_db";

try {
    $conn = new PDO("mysql:host=$sName;dbname=$db_name", 
                    $uName, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // $conn=mysqli_connect("localhost","root","","todolist_db");
}catch(PDOException $e){
  echo "Connection failed : ". $e->getMessage();
}