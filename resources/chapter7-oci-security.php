
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Student Portal | Dashboard</title>
        <link rel="shortcut icon" href="icons/icons8-windows-xp-30.png">
        <link rel="stylesheet" href="../css/bootstrap.min.css" media="screen" ><!--FRAMEWORK-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><!--ICONS-->
        <link rel="stylesheet" href="../css/main.css" media="screen" ><!--MAIN STYLE-->
        <link rel="stylesheet" type="text/css" href="../js/DataTables/datatables.min.css"/>
        
        <link rel="stylesheet" href="../css/dash1.css"><!--Dashboard design-->
        <link rel="stylesheet" href="../css/button.css"><!--Dropdown button-->
        <link rel="stylesheet" href="../css/topnavbar.css"><!--nav design-->
       
    <style>
body {
  background: #F2F2F2;
  padding: 0;
  margin: 0;
} 
.msg1{
  background-color: #b6eb79;
  color:#fff;
  padding: 10px;
}
.box-1,
.box-2{
  margin-top: 15px;
  padding: 10px;
  border: 1px solid powderblue;
  font-size: 17px;
  border-radius: 5px;
}
.box-3{
  margin-top: 25px;
  padding: 0px;
  font-size: 17px;
}
.p-1{
  margin-top: 10px;
  padding: 10px;
}
.p-2{
  margin-top: 4px;
}
    </style>
</head>
<body >
  <!--navigation bar  -->
  <?php 
      include 'navbar2.php';
    ?>
            
                        <div class="bx1">
                             <div class="bx3" >
                                <font>
                                    <label class="dropdown">

                                        <div class="dd-button">
                                            Learning Objectives
                                        </div>

                                        <input type="checkbox" class="dd-input" id="test">

                                        <ul class="dd-menu">
                                            <li><a href="#"> Welcome to OCI Free Learning</a></li>
                                            <li class="divider"></li>
                                            <li><a href="chapter1-oci-introduction.php">1. OCI Introduction</a></li>
                                            <li><a href="chapter2-oci-identity-access-management.php">2. Identity and Access Management</a></li>
                                            <li><a href="chapter3-oci-networking.php">3. Networking</a></li>
                                            <li><a href="chapter4-oci-compute.php">4. Compute</a></li>
                                            <li><a href="chapter5-oci-storage.php">5. Storage</a></li>
                                            <li><a href="chapter6-oci-database.php">6. Database</a></li>
                                            <li><a href="chapter7-oci-security.php">7. Security</a></li>
                                            <li><a href="chapter8-oci-governance-administration.php">8. Governance and Administration</a></li>
                                            
                                            <li><a href="../examination/exam-dashboard.php"><i class="fa fa-graduation-cap"></i> Certification Exam Preparation</a></li>
                                            <li class="divider"></li>
                                            <li>
                                                <a href="">References</a>
                                            </li>
                                        </ul>

                                    </label>
                                </font>

                                <div class="box-1">
                                  <h3>Chapter 7. Security</h3>
                                  <hr>
                                  <div class="box-2">
                                    <br>
                                    <img src="../images/b1.png">
                                    
                                  </div>
                                  
                                  <div class="box-2">
                                    welcome1
                                  </div>

                                  <div class="box-2">
                                    welcome2
                                  </div>

                                  <div class="box-2">
                                    welcome3
                                  </div>

                                  <div class="box-2">
                                    welcome4
                                  </div>
                                  
                                  <div class="box-3">
                                    <span style="font-size: 18px;">
                                      <a href="chapter6-oci-database.php" class="previous"><i class="fa fa-arrow-left"></i> Previous</a> || 
                                      <a href="chapter8-oci-governance-administration.php" style="color: blue;">8. Governance and Administration</a>
                                    <span>
                                  </div>
                                  <br><br>
                                  <section id="product1" class="section-p1" style="text-align:center;">
                                        
                                  </section>
                                </div>
                            </div>  
            
            </div>

            <script>
                const theBody = document.querySelector('body');
                const openNav = document.querySelector('.menu-bar button');
                const closeNav = document.querySelector('.close-nav button');
                const Navbar = document.querySelector('.navbar');
        
                function bodyScroll(){
                    if(Navbar.classList.contains('show')){
                        theBody.classList.add('hide-scroll');
                    }
                    else if(theBody.classList.contains('hide-scroll')){
                        theBody.classList.remove('hide-scroll');
                    }
                }
        
                function showHide(){
                    Navbar.classList.toggle('show');
                    bodyScroll();
                }
        
                openNav.onclick = showHide;
                closeNav.onclick = showHide;
            </script>
            <!--End of navbar-->
            
                    
            <div style="background-color: #555555; color: white;text-align: center;">
              <br>
              <p >copyrite@Oracle Gates Lesotho - 2023</p>
              <br>
            </div>

         <!-- ========== COMMON JS FILES ========== -->
         <script src="../js/jquery/jquery-2.2.4.min.js"></script><!--FRAME WORK-->
        <script src="../js/bootstrap/bootstrap.min.js"></script><!--FRAME WORK-->
        <script src="../js/lobipanel/lobipanel.min.js"></script><!--ANIMATIONS + SIDE-NAV BAR -->

        <!-- ========== PAGE JS FILES ========== -->
        <script src="../js/prism/prism.js"></script>
        <script src="../js/DataTables/datatables.min.js"></script>

        <!-- ========== THEME JS ========== -->
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
</body>
</html>
