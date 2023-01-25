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
    //read from db
    $query = "select * from customers where user_name = '$user_name' limit 1";

   $result = mysqli_query($con,$query);

    if($result){
      if($result && mysqli_num_rows($result) > 0)
     {

      $user_data = mysqli_fetch_assoc($result);
      if($user_data['password'] === $password)
       {

        $_SESSION['user_id'] = $user_data['user_id'];
        header("Location: amani-landing-page.php");
        die;

       }
     }
    }
    echo "You have entered a wrong username or password!";
    
  }else
  {
    echo "You have entered a wrong username or password!";
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
      <h2>Login here</h2>
    <p>Username</p>
    <input type="text" name="user_name" placeholder="Enter username">
    <p>Password</p>
    <input type="Password"  name="password" placeholder="password">
    <input type="submit" name="" value="login">
    <a href="#"> Forgot password?</a><br>
    <a href="createaccount.php"> Create Account</a><br>
    </form>
         
  </div>       
       
 </body>


 
</html>