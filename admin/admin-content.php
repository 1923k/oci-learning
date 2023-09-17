<?php 
//error_reporting(0);
	//accessing session applied
	session_start();
    
	//Database connection
	include '../database/config.php';
	
	//Redirecting user back to login if not logged in
	$email = $_SESSION['email'];

    if(!isset($email)){
        header('location:../login.php');
    }

//Code for deleting message
if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM `message` WHERE id = '$id'") or die('query failed');
    header('location: threads.php');
 }

 //Code for creating new thread
 if(isset($_POST['create_thread'])){
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);
    $title = mysqli_real_escape_string($conn, $_POST['title']);
 
    $select_messages = mysqli_query($conn, "SELECT * FROM `message` WHERE message = '$message'") or die('query failed');
 
    if(mysqli_num_rows($select_messages) > 0){
       $fail[] = 'Sorry, thread already exist!';
    }else{
          mysqli_query($conn, "INSERT INTO `message`(title, email, message) VALUES('$title', '$email', '$message')") or die('query failed');
          $success[] = 'Your thread was created successful';
       }
    }

//Update admin post
if(isset($_POST['update'])){

    $id = $_POST['id'];
    $title = $_POST['title'];
    $message = $_POST['message'];
  
    mysqli_query($conn, "UPDATE `message` SET title = '$title', message = '$message' WHERE id = '$id'") or die('query failed');
} 
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Administrator Portal | Dashboard > Forums</title>
        <link rel="shortcut icon" href="icons/icons8-windows-xp-30.png">
        <link rel="stylesheet" href="../css/bootstrap.min.css" media="screen" ><!--FRAMEWORK-->
        
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><!--ICONS-->
       
        <link rel="stylesheet" href="../css/dash1.css"><!--Dashboard design-->
        <link rel="stylesheet" href="../css/topnavbar.css"><!--nav design-->

        <!-- Custom styles for this template -->
        <link href="../css-forums/dashboard-main.css" rel="stylesheet">
        <link href="../css-forums/messages.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../css-forums/popup_form.css"/>

       
    <style>

    </style>
<body>
    <!--Start of navbar -->
    <div class="nav">
        <input type="checkbox" id="nav-check">
        <div class="nav-header">
            <div class="nav-title">
                Admin Panel
            </div>
        </div>
        <div class="nav-btn">
            <label for="nav-check">
                <span></span>
                <span></span>
                <span></span>
            </label>
        </div>
  
        <div class="nav-links">
            <a href="student-posts.php">Student Threads</a>
            <a href="../logout.php"><i class="fa fa-sign-out"></i> Logout</a>
           
            
        </div>
    </div>
    

        <section class="dashboard" >
            <div style="padding: 10px; background: powderblue;">
                <p><h3>Admin Posts || 
                    <a href="admin-posts.php" class="btn btn-default" style="float: right;  margin-right: 0px;">
                        <i class="fa fa-arrow-left"> Back</i>
                    </a>
                    <a href="#divOne" class="btn btn-default" style="float:right;"><i class="fa fa-plus"></i> Create Thread</a> </h3></p>
            </div>
            <div class="box-container">

                <?php
                    $select_messages = mysqli_query($conn, "SELECT * FROM `message` WHERE email='admin@post'") or die('query failed');
                    if(mysqli_num_rows($select_messages) > 0){
                        while($fetch = mysqli_fetch_assoc($select_messages)){
                ?>
                <div class="box"  style="border-radius: 2px;">
                    <button class="collapsible"><i class="fa fa-user"></i> 
                        <span style=""> : <?php echo $fetch['title']; ?></span>    
                    </button>
         
                    <div class="content">
                      <div style="margin-left: 20px; margin-right: 10px; float:left; text-align:left; font-size: 14px;">
                        <font>From : <span><?php echo $fetch['names']; ?></span> </font><br>
                        <font>Date : <span><?php echo $fetch['date']; ?></span> </font><br>
                        <font>Email : <span><?php echo $fetch['email']; ?></span> </font><br>
                        <font><b style="float:left;">Message </b>:
                            <br>
                            <span><?php echo $fetch['message']; ?></span> <br><br>
                        </font>
                        
                        <div style="word-spacing: 30px; font-size: 18px;">
                            <p style="word-spacing: 30px;">
                                <a href="admin-posts.php?update=<?php echo $fetch['id']; ?>" title="Edit Admin Post" class="btn btn-primary" name="update_admin_post">Update </a>
                                <a href="threads.php?delete=<?php echo $fetch['id']; ?>" title="Delete Record" class="btn btn-warning" style="margin-left: 10px; " onclick="return confirm('Are you sure to DELETE this Thread ?');" >Delete</a>
                                <a href="" style="" title="Close" class="btn btn-default"><i class="fa fa-times"></i></a> 
                            </p><br>
                        </div>
                      </div>
                      
                    </div>
                     
                </div>
                
                <?php
                        }
                    }else{
                        echo '<p class="empty">Currently there are no messages yet</p>';
                    }
                ?>
            </div>
        </section>
     

 <!-- THREAD CREATION FORM -->
<div class="overlay" id="divOne">
	<div class="" style="margin-top: 50px;">
            <div class="container" style="padding: 20px;">
                <!--Success messages--->
                <?php
                                    if(isset($success)){
                                        foreach($success as $success){
                                        echo '
                                            <div style="background-color: blue; padding: 6px; color: white;font-size: 16px;">
                                                <span>
                                                    <strong>
                                                        <i class="fa fa-check" style=""></i> 
                                                    </strong>
                                                    '.$success.'
                                                </span>
                                                <i class="fa fa-times" style="float: right;cursor:pointer;" title="Close" onclick="this.parentElement.remove();"></i>
                                            </div>
                                        ';
                                        }
                                    }
                                ?>

                                <!--Fail messages--->
                                <?php
                                    if(isset($fail)){
                                        foreach($fail as $fail){
                                        echo '
                                            <div style="background-color: red; padding: 6px; color: white;font-size: 16px;">
                                                <span>
                                                    <strong>
                                                        <i class="fa fa-warning" style=""></i> 
                                                    </strong>
                                                    '.$fail.'
                                                </span>
                                                <i class="fa fa-times" style="float: right;cursor:pointer;" title="Close" onclick="this.parentElement.remove();"></i>
                                            </div>
                                        ';
                                        }
                                    }
                                ?>

            <h2>Create New Thread <a href="" style="float: right;"><i class="fa fa-times"></i></a></h2>
                <form action="" method="post" enctype="multipart/form-data">
                    <label style="margin-top: 20px; font-size: 15px;">Title / Heading</label>
                    <input type="text" name="title" class="form-control" required/>

                    <label style="margin-top: 20px; font-size: 15px;">Admin</label>
                    <select type="text" name="email" class="form-control" required>
                        <option value="admin@post">Admin</option>
                    </select>

                    <label style="margin-top: 20px; font-size: 15px;">New Thread Message</label>
					<textarea  type="textarea" class="form-control" name="message"  required="required"/>
    
                    </textarea>

                    <br><br><br>
                    <input type="submit" value="Submit" name="create_thread" > 
                </form>
                <br><br><br>
            </div>
		
	</div>
</div>


<!--EDIT ADMIN POST FORM -->
<div class="modal fade" id="form_modal" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
            <?php
                if(isset($_GET['edit'])){
                    $id = $_GET['edit'];
                    $update_query = mysqli_query($conn, "SELECT * FROM `message` WHERE id = '$id'") or die('query failed');
                    if(mysqli_num_rows($update_query) > 0){
                      while($fetch_update = mysqli_fetch_assoc($update_query)){
              ?>

			<form method="POST" action=" ">
				<div class="modal-header" style="background-color: powderblue;">
					<h3 class="modal-title">UPDATE ADMIN POST</h3>
				</div>
				<div class="modal-body">
					<div class="col-md-12">
						<div class="form-group">
							<label>Edit Title</label>
							<input type="email" class="form-control" name="email" value="<?php echo $fetch_update['email']; ?>" placeholder="Enter recepient email" required="required"/>
						</div>
						
                        <div class="form-group">
							<label>Edit Message</label>
							<textarea  type="textarea" class="form-control" name="message" value="<?php echo $fetch_update['message']; ?>" required="required"/>
              
                            </textarea>
						</div>
            
					</div>
				</div>
				<br style="clear:both;"/>
				<div class="modal-footer">
					<button type="button" data-dismiss="modal" class="btn btn-danger"><span class="fa fa-remove"></span> Cancel</button>
					<button class="btn btn-primary" name="save"><span class="fa fa-send-o"></span> Forward</button>
				</div>
			</form>
            <?php
                  }
                }
              }else{
                    echo '<script>document.querySelector(".edit-product-form").style.display = "none";</script>';
                }
              ?> 
		</div>
	</div>
</div>	
<!--END OF MESSAGE RESPONSE-->



<script src="../js/bootstrap.bundle.min.js"></script>
<script src="../js/jquery-3.2.1.min.js"></script>	
<script src="../js/jquery/jquery-2.2.4.min.js"></script>
<script src="../js/bootstrap/bootstrap.min.js"></script><!--Pop up form-->


<!--Collapse div content-->
<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}
</script>	
</body>
</html>