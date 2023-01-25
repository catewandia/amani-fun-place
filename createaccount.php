<?php
session_start();
  
  include("connection.php");
  include("functions.php");
  

  if ($_SERVER['REQUEST_METHOD'] == "POST") {
    
     $user_name = $_POST['user_name'];
     $password = $_POST['password'];
  }
 

  if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) 
  {
    $user_id = random_num(20);
    $query = "insert into customers (user_id, user_name, password) values ('$user_id', '$user_name', '$password')";

    mysqli_query($con,$query);

    header("Location: amani-login.php");
    die;

  }else
  {
    echo "Please enter valid information!";
  }


?>
<!DOCTYPE html> 
<html lang="en">
<head>
  
  <title>Amani Fun Place</title>
      
  <link rel="stylesheet" type="text/css" href="style.css">
  </head>

   <body>
    
   <h1> Amani Fun Place </h1> 

   <div class="box"> 
    <form method="post">
      <h2>Create Account</h2>
    <p>Username</p>
    <input type="text" name="user_name" placeholder="Enter username">
    <p>Password</p>
    <input type="Password"  name="password" placeholder="password">
     <!--<p>Confirm Password</p>
    <input type="Password"  name="password" placeholder="password">-->
    <input type="submit" name="" value="Create">
    
    
  </form>
         
  </div>       
  </body>
  </html>