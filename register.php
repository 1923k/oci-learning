<?php

include 'database/config.php';

if(isset($_POST['submit'])){

   $names = mysqli_real_escape_string($conn, $_POST['names']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, $_POST['password']);
   $cpass = mysqli_real_escape_string($conn, $_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select_users = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select_users) > 0){
      $message[] = 'Sorry, user email already exist!';
   }else{
      if($pass != $cpass){
         $message[] = 'Sorry, passwords entered do not matched!';
      }else{
         mysqli_query($conn, "INSERT INTO `users`(names, email, password, user_type) VALUES('$names', '$email', '$cpass', '$user_type')") or die('query failed');
         $message[] = 'Your registration was successful!';
      }
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
   <title> Oracle Getes Lesotho - Registration Form</title>
   <link rel="stylesheet" href="css/login.css">

<style>

</style>
</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
   <a href="index.php" style="font-size: 20px;"><i class="fa fa-arrow-left"></i> Back</a><br><br>
      <h3>registeration</h3>
      <?php
         if(isset($message)){
            foreach($message as $message){
               echo '
                  <div class="message">
                     <span>'.$message.'</span>
                     <i class="fa fa-times" onclick="this.parentElement.remove();"></i>
                  </div>
               ';
            }
         }
      ?>
      <input type="text" name="names" placeholder="Enter your full names" required class="box">
      <input type="email" name="email" placeholder="Enter your email" required class="box">
      <input type="password" name="password" placeholder="Enter you r password" required class="box">
      <input type="password" name="cpassword" placeholder="Confirm your password" required class="box">
      <select name="user_type" class="box">
         <option value="Member">Please Select Your status</option>
         <option value="Member">User</option>
      </select>
      <input type="submit" name="submit" value="register" class="btn">
      <p>Already have an account? <a href="login.php">Login now</a></p>
   </form>

</div>

</body>
</html>