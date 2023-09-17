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
    mysqli_query($conn, "DELETE FROM `users` WHERE id = '$id'") or die('query failed');
    header('location: dashboard.php');
 }

 //Code for creating new user
 if(isset($_POST['submit'])){

    $names = mysqli_real_escape_string($conn, $_POST['names']);
    $contacts = mysqli_real_escape_string($conn, $_POST['contacts']);
    $country = mysqli_real_escape_string($conn, $_POST['country']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $user_type = mysqli_real_escape_string($conn, $_POST['user_type']);
 
    $select_users = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email' AND password = '$password'") or die('query failed');
 
    if(mysqli_num_rows($select_users) > 0){
       $fail[] = 'Sorry, user email already exist!';
    }else{
        mysqli_query($conn, "INSERT INTO `users`(names, user_type, email, contacts, country, address, password) VALUES('$names', '$user_type', '$email',  '$contacts', '$country', '$address', '$password')") or die('query failed');
        $success[] = 'User registration was successful!';
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
                                        <li class="fa fa-users"></li> Manage Students
                                   
                                        <button class="btn btn-default" style="float: right;  margin-right: 0px;" data-toggle="modal" data-target="#form_modal">
                                            <i class="fa fa-plus"> </i> Add Student
                                        </button>
                                    </h4>
                                </div>
                                <br>
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
                                
                                <div style="border: 1px solid powderblue; padding: 10px;">
                                    <!--Student Registration display table--->
                                    <table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Names</th>
                                                <th>Type</th>
                                                <th>Email</th>
                                                <th>Contacts</th>
                                                <th>Country</th>
                                                <th>Address</th>
                                                <th>Password</th>
                                                <th>Date Created</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>#</th>
                                                <th>Names</th>
                                                <th>Type</th>
                                                <th>Email</th>
                                                <th>Contacts</th>
                                                <th>Country</th>
                                                <th>Address</th>
                                                <th>Password</th>
                                                <th>Date Created</th>
                                                <th>Action</th>            
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php
                                                $query = mysqli_query($conn, "SELECT * FROM `users`") or die(mysqli_error());
                                                $rowcount=1;
                                                while($fetch = mysqli_fetch_array($query)){
                                                
                                            ?>
                                               
                                            <tr>
                                                <td><?php echo htmlentities($rowcount);?></td>
                                                <td><?php echo $fetch['names']?></td>
                                                <td><?php echo $fetch['user_type']?></td>
                                                <td><?php echo $fetch['email']?></td>
                                                <td><?php echo $fetch['contacts']?></td>
                                                <td><?php echo $fetch['country']?></td>
                                                <td><?php echo $fetch['address']?></td>
                                                <td><?php echo $fetch['password']?></td>  
                                                <td><?php echo $fetch['datecreated']?></td>          
                                                <td style="word-spacing:20px;font-size: 1.5rem; color: blue;  ">
                                                    <?php echo '<a href="#dashboard.php?id='. $fetch['id'] .'" class="mr-3" title="Edit User" style="margin-left:20px; " ><i class="fa fa-edit"></i></a>' ?>
                                                    <a href="dashboard.php?delete=<?php echo $fetch['id']; ?>" title="Delete Record" onclick="return confirm('Are you sure to DELETE this user details ?');" >
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


<!--MESSAGE RESPONSE FORM -->
<div class="modal fade" id="form_modal" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="POST">
				<div class="modal-header" style="background-color: powderblue;">
					<h3 class="modal-title">CREATE NEW USER</h3>
				</div>
				<div class="modal-body">
					<div class="col-md-12">
						<div class="form-group">
							<label>Full Names</label>
							<input type="text" class="form-control" name="names" placeholder="Enter user fullnames" required="required"/>
						</div>
                        
                        <div class="form-group">
                            <select name="user_type" class="form-control" required="required"/>
                                <option value="Member">Please Select Your status</option>
                                <option value="Member">Students</option>
                                <option value="Staff">Staff</option>
                            </select>
                        </div>

                        <div class="form-group">
							<label>Email Address</label>
							<input type="email" class="form-control" name="email" placeholder="Enter user email" required="required"/>
						</div>

                        <div class="form-group">
							<label>Contacts</label>
							<input type="text" class="form-control" name="contacts" placeholder="Enter user contacts"/>
						</div>

                        <div class="form-group">
							<label>Country</label>
							<input type="text" class="form-control" name="country" placeholder="Enter user country"/>
						</div>

                        <div class="form-group">
							<label>Physical Address</label>
							<input type="text" class="form-control" name="address" placeholder="Enter user physical address"/>
						</div>

                        <div class="form-group">
							<label>Password</label>
							<input type="password" class="form-control" name="password" placeholder="Enter user physical address" required="required"/>
						</div>
            
					</div>
				</div>
				<br style="clear:both;"/>
				<div class="modal-footer">
					<button type="button" data-dismiss="modal" class="btn btn-danger"><span class="fa fa-remove"></span> Cancel</button>
					<button class="btn btn-primary" name="submit"><span class="fa fa-send-o"></span> Forward</button>
				</div>
			</form>
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