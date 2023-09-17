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
    header('location: forums.php');
 }

 //Code for creating new user
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
        <link rel="stylesheet" type="text/css" href="../js/DataTables/datatables.min.css"/>
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><!--ICONS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"></script><!--Charts-->
        
        <link rel="stylesheet" href="../css/dash1.css"><!--Dashboard design-->
        <link rel="stylesheet" href="../css/topnavbar.css"><!--nav design-->
        <link rel="stylesheet" type="text/css" href="../css/popup.css"/>

       
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
    

    <div class="panel-body p-20">
                            
                            <section id="product1" class="section-p1">
                                <div class="pro-container">
                                    <div class="pro">
                                        <div class="pro1"></div>
                                        <div style="padding: 10px;">
                                            <div class="des">
                                                <span class="number counter">
                                                    <a href="" style="font-size: 18px;">
                                                    <?php
                                                        $results = mysqli_query($conn, "SELECT COUNT(id) from users WHERE user_type='Member'") or die(mysqli_error());
                                                        while($rows = mysqli_fetch_array($results)){?>
                                                        <?php echo $rows['COUNT(id)'];
                                                        ?>
                                                        <?php
                                                        }
                                                    ?>
                                                    </a><br>
                                                </span>
                                                <br>
                                                <a href="dashboard.php" style="font-size: 20px;"><i class="fa fa-users" style="font-size: 20px;"></i> Manage Students</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="pro">
                                        <div class="pro1"></div>
                                        <div style="padding: 10px;">
                                            <div class="des">
                                                <span class="number counter">
                                                    <a href="" style="font-size: 18px;">
                                                    <?php
                                                        $results = mysqli_query($conn, "SELECT COUNT(id) from users WHERE user_type='Admin'") or die(mysqli_error());
                                                        while($rows = mysqli_fetch_array($results)){?>
                                                        <?php echo $rows['COUNT(id)'];
                                                        ?>
                                                        <?php
                                                        }
                                                    ?>
                                                    </a><br>
                                                </span>
                                                <br>
                                                <a href="" style="font-size: 20px;"><i class="fa fa-users" style="font-size: 20px;"></i> Manage Stuff</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="pro">
                                        <div class="pro1"></div>
                                        <div style="padding: 10px;">
                                            <div class="des">
                                                <span class="number counter">
                                                    <a href="" style="font-size: 18px;">
                                                    <?php
                                                        $results = mysqli_query($conn, "SELECT COUNT(id) from message WHERE type='student'") or die(mysqli_error());
                                                        while($rows = mysqli_fetch_array($results)){?>
                                                        <?php echo $rows['COUNT(id)'];
                                                        ?>
                                                        <?php
                                                        }
                                                    ?>
                                                    </a><br>
                                                </span>
                                                <br>
                                                <a href="forums.php" style="font-size: 20px;"><i class="fa fa-comment-o" style="font-size: 20px;"></i> Forums</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="pro">
                                        <div class="pro1"></div>
                                        <div style="padding: 10px;">
                                            <div class="des">
                                                <span class="number counter">
                                                    <a href="" style="font-size: 18px;">
                                                    <?php
                                                        $results = mysqli_query($conn, "SELECT COUNT(id) from message WHERE email='admin@post'") or die(mysqli_error());
                                                        while($rows = mysqli_fetch_array($results)){?>
                                                        <?php echo $rows['COUNT(id)'];
                                                        ?>
                                                        <?php
                                                        }
                                                    ?>
                                                    </a><br>
                                                </span>
                                                <br>
                                                <a href="admin-posts.php" style="font-size: 20px;"><i class="fa fa-sliders" style="font-size: 20px;"></i> Admin Post</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                      
                            </section>
                            <!--End section -->

                            <div class="panel" style="margin-left: 10px; margin-right: 10px;">
                                <div style="width: 100%;"> 
                                    <h4 style="font-weight: bold">
                                        <li class="fa fa-comment-o"></li> Manage Forums
                                   
                                        <a href="student-posts.php" class="btn btn-default" style="float: right;  margin-right: 0px;">
                                            <i class="fa fa-plus"> Repond Post</i>
                                        </a>
                                    </h4>
                                </div>
                                <br>
                                <!--Success messages--->
                                <?php
                                    if(isset($success)){
                                        foreach($success as $success){
                                        echo '
                                            <div class="message">
                                                <span>
                                                    <strong>
                                                        <i class="fa fa-check" style=""></i> 
                                                    </strong>
                                                    '.$success.'
                                                </span>
                                                <i class="fa fa-times" onclick="this.parentElement.remove();"></i>
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
                                            <div class="message" style="background-color: red;">
                                                <span>
                                                    <strong>
                                                        <i class="fa fa-warning" style=""></i> 
                                                    </strong>
                                                    '.$fail.'
                                                </span>
                                                <i class="fa fa-times" onclick="this.parentElement.remove();"></i>
                                            </div>
                                        ';
                                        }
                                    }
                                ?>
                                
                                <div style="border: 1px solid powderblue; padding: 10px;">
                                    <!--Student Registration display table--->
                                    <table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Title</th>
                                                <th>Names</th>
                                                <th hidden>Type</th>
                                                <th>Date Created</th>
                                                <th>Email</th>
                                                <th>Message</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>#</th>
                                                <th>Title</th>
                                                <th>Names</th>
                                                <th hidden>Type</th>
                                                <th>Date Created</th>
                                                <th>Email</th>
                                                <th>Message</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php
                                                $query = mysqli_query($conn, "SELECT * FROM `message` WHERE type='student'") or die(mysqli_error());
                                                $rowcount=1;
                                                while($fetch = mysqli_fetch_array($query)){
                                                
                                            ?>
                                               
                                            <tr>
                                                <td><?php echo htmlentities($rowcount);?></td>
                                                <td><?php echo $fetch['title']?></td>
                                                <td><?php echo $fetch['names']?></td>
                                                <td hidden><?php echo $fetch['type']?></td>
                                                <td><?php echo $fetch['date']?></td>
                                                <td><?php echo $fetch['email']?></td>
                                                <td><?php echo $fetch['message']?></td>
                                                <td style="word-spacing:20px;font-size: 1.5rem; color: blue;  ">
                                                    <a href="forums.php?delete=<?php echo $fetch['id']; ?>" title="Delete Post" onclick="return confirm('Are you sure to DELETE this user details ?');" >
                                                        <i class="fa fa-trash" style="color: red;"></i> 
                                                    </a> 
                                                </td>
                                            </tr> 
                                            <?php
                                            $rowcount=$rowcount+1;
					                            }
				                            ?>
                                        </tbody>
                                    </table>
                                </div>
                                    <hr>
                                    <p style="color: red">*** NOTICE! UNAUTHORISED ACCESS IS PROHIBITED</p><br> 
                                    


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



<!--JS FILES -->
<script src="../js/jquery/jquery-2.2.4.min.js"></script>
<script src="../js/bootstrap/bootstrap.min.js"></script>
<script src="../js/lobipanel/lobipanel.min.js"></script>

<script src="../js/prism/prism.js"></script>
<script src="../js/DataTables/datatables.min.js"></script>

<script src="../js/main.js"></script>

<script>
            $(function($) {
                $('#example').DataTable();

                $('#example2').DataTable( {
                    "scrollY":        "300px",
                    "scrollCollapse": true,
                    "paging":         false
                } );

                $('#example3').DataTable();
            });
</script>

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