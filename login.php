<?php
//Database connection file
include 'database/config.php';
//Sessions applied
session_start();

if(isset($_POST['submit'])){
    //variables
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = mysqli_real_escape_string($conn, $_POST['password']);

    //Accessing login variables to from the database
    $select_users = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email' AND password = '$pass'") or die('query failed');

    if(mysqli_num_rows($select_users) > 0){

        $row = mysqli_fetch_assoc($select_users);
        //If login details matches admin,
        //it will redirect the user to admin page
        if($row['user_type'] == 'Admin'){

            $_SESSION['email'] = $row['email'];
            $_SESSION['names'] = $row['names'];
            $_SESSION['user_type'] = $row['user_type'];
            $_SESSION['contacts'] = $row['contacts'];
            $_SESSION['country'] = $row['country'];
            $_SESSION['address'] = $row['address'];
            $_SESSION['password'] = $row['password'];
            $_SESSION['datecreated'] = $row['datecreated'];
            header('location:admin/dashboard.php');

        }
        //If login details matches member,
        //it will redirect the user to members pages
        elseif($row['user_type'] == 'Member'){

            $_SESSION['email'] = $row['email'];
            $_SESSION['names'] = $row['names'];
            $_SESSION['user_type'] = $row['user_type'];
            $_SESSION['contacts'] = $row['contacts'];
            $_SESSION['country'] = $row['country'];
            $_SESSION['address'] = $row['address'];
            $_SESSION['password'] = $row['password'];
            $_SESSION['datecreated'] = $row['datecreated'];
            header('location:forums/discussions.php');
        }
    }
    //If login details do not matches any user,
    //it will display incorrect login message
    else{
      $message[] = 'Sorry, Incorrect email or password!';
    }

}

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oracle Getes Lesotho - Sign In</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <link rel="stylesheet" href="css/login.css">
<style>

</style>
</head>
<body>
<!--Message pop-up for login-->

<!--Container start-->
<div class="form-container">
    <!--Form start-->
    <form action="" method="post">
        <a href="index.php" style="font-size: 20px;"><i class="fa fa-arrow-left"></i> Back</a><br><br>
        <h3><i class="fa fa-user"></i> Login Form</h3>
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
        <input type="email" name="email" placeholder="Enter your email" required class="box">
        <input type="password" name="password" placeholder="Enter your password" required class="box">
        <input type="submit" name="submit" value="login now" class="btn">
        <p>Don't have an account? <a href="register.php">Register now</a></p>
    </form>
    <!--Form End-->
</div>
<!--Container End-->
</body>
</html>