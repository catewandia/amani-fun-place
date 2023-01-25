<?php 
 
 session_start();
  
  include("connection.php");
  include("functions.php");

  $user_data = check_login($con);


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
      <h2>Pay via mpesa</h2>
    <p>Number</p>
    <input type="text" name="phone_number" placeholder="Enter number">
    <p>Amount</p>
    <input type="text"  name="amount" placeholder="ksh">
    
    <input type="submit" name="" value="Pay">
    
    
  </form>
         
  </div>       
  </body>
  </html>