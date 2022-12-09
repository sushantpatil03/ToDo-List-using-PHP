<html>
<body>
<?php

  $servername = "localhost";
  $username = "root"; // For MYSQL the predifined username is root
  $password = ""; // For MYSQL the predifined password is " "(blank)

  $id = $_POST['id1'];
  $pass = $_POST['id2'];

  // Creating connection
  $conn = new mysqli($servername, $username, $password,"todolist_db");
  $result = mysqli_query($conn,"select * from admin1 where id='$id' and pass='$pass'");
  var_dump(mysqli_num_rows($result));
  if(mysqli_num_rows($result)>0){

      header("location:index.php");
  }  else
  {
      header("location:login.php?msg=fail");
  }
  // var_dump($result);
  // $row = mysqli_fetch_row($result);
  // echo "<pre>";
  // echo $row[0]." ".$row[1];
  // echo "</pre>";
  
  // Checking connection

  if ($conn->connect_error) {

      die("Connection failed: " . $conn->connect_error);
  }

  echo "Connected successfully";

  ?>
</body>
</html>