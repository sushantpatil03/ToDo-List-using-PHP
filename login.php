<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | To-Do Master by Group 7</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
</head>
<body>
  <?php
    
    count($_GET)==0?0:$msg = $_GET['msg'];
    if(isset($msg)){
      echo "<script>alert('Invalid ID/Password ! Please try again ')</script>";
    }
  ?>
  <nav class="bg-gray-700 text-white flex justify-between">

    <!-- <img src="pngegg.png" alt="Oops" class="h-10 pt-3 px-7"> -->
    <ul class="py-4 flex space-x-8 justify-end px-10">
        <li class="cursor-pointer">To-Do Master By Group 7</li>
        <!-- <a href="add_user.html"><li class="cursor-pointer">Add Students</li></a>
        <li class="cursor-pointer">View Students</li>
        <li class="cursor-pointer">About</li>
        <li class="cursor-pointer">Contact Us</li> -->
    </ul>
</nav>

      <!-- <div class="container my-3">
        <form action="main.html" id="form1" method="get" onsubmit="return submit1()">
            <div class="form-group">
              <label for="exampleInputEmail1">User Id</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Login ID">
              <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
            <!-- </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div> -->
            <!-- <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div> -->
            <!-- <button type="submit" class="btn btn-primary">Login</button>
          </form>
      </div> --> 
      <div class="flex justify-center my-20">
      <div class="w-full max-w-xs">
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="validate.php" id="form1" method="POST" >
          <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="username" id="exampleInputEmail1">
              Username
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" name="id1" type="text" placeholder="Username">
          </div>
          <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
              Password
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="exampleInputPassword1" name="id2" type="password" placeholder="">
            <p class="text-red-500 text-xs italic"></p>
          </div>
          <div class="flex items-center justify-between">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
              Sign In
            </button>
            <!-- <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="#">
              Forgot Password?
            </a> -->
          </div>
        </form>
        <p class="text-center text-gray-500 text-xs">
          &copy;2022 GPJ Group7. All rights reserved.
        </p>
      </div>
    </div>

    

    <script>
        function submit1(){

            if (document.getElementById("exampleInputEmail1").value == "Group 7" && document.getElementById("exampleInputPassword1").value == "Group 7") {
              document.getElementById("form1").submit1();
              return true
            } else{
              alert("Wrong Id or Password !");
              return false;
            }
        }
    </script>
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/app.js"></script> -->
</body>
</html>