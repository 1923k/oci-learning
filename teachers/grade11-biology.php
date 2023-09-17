
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin Portal | Dashboard</title>
        <link rel="shortcut icon" href="../icons/icons8-windows-xp-30.png">
        <link rel="stylesheet" href="../css/bootstrap.min.css" media="screen" ><!--FRAMEWORK-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><!--ICONS-->
        <link rel="stylesheet" href="../css/main.css" media="screen" ><!--MAIN STYLE-->
        <link rel="stylesheet" type="text/css" href="../js/DataTables/datatables.min.css"/>
        
        <link rel="stylesheet" href="../css/dash1.css"><!--Dashboard design-->
        <link rel="stylesheet" href="../css/nav.css"><!--nav design-->
        <link rel="stylesheet" href="../css/popup.css" media="screen" ><!--popup forms-->
       
    <style>
.errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
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
    </style>
</head>
<body >
            <!--Start of navbar -->
            <header >
                <div class="wrapper">
                    <div class="logo">
                        <a href="#">
                            <b style="font-size: 18px">Admin Panel</b>
                        </a>
                    </div>
                    
                    <div class="navbar">
                        <div class="close-nav"><button>×</button></div>
                        <nav>
                            <ul>
                                <li><a href="" class="btn btn-default"><i class="fa fa-sign-out"></i> Sign out</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="menu-bar" style="background-color: #111111;">
                        <button><i></i></button>
                    </div>
                </div>
            </header>
            


            <div style="padding: 20px;" style="background-color: green;">
            
                <div>
                    <section id="product1" class="section-p1">
                        <div class="msg1">Dashboard /Grade 11 / Biology</div>
                      
                            <div class="pro-container">
                                <div class="pro">
                                    <div class="pro1"></div>
                                    <div style="padding: 10px;">
                                        <div class="des">
                                            <h4><li class="fa fa-folder-o"></li> Learning Resources</h4>
                                            <div class="b1">
							                    <p class="paragraph2">
                                                    Count: 20
                                                    <br>
                                                    <button class="open-button" onclick="openForm1()">
                                                        <i class="fa fa-arrow-right"> View Contents</i>
                                                    </button>
                                                </p>
						                    </div>
                                      </div>
                                    </div>
                                </div>
                                
                                <div class="pro">
                                    <div class="pro1"></div>
                                    <div style="padding: 10px;">
                                        <div class="des">
                                            <h4><li class="fa fa-balance-scale"></li> Practicals</h4>
                                            <div class="b1">
							                    <p class="paragraph2">
                                                    Count: 20
                                                    <br>
                                                    <button class="open-button" onclick="openForm2()">
                                                        <i class="fa fa-arrow-right">Continue</i>
                                                    </button>
                                                </p>
						                    </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pro">
                                    <div class="pro1"></div>
                                    <div style="padding: 10px;">
                                        <div class="des">
                                            <h4><li class="fa fa-tasks"></li> Quizes</h4>
                                            <div class="b1">
							                    <p class="paragraph2">
                                                    Count: 20
                                                    <br>
                                                    <button class="open-button" onclick="openForm3()">
                                                        <i class="fa fa-arrow-right">Continue</i>
                                                    </button>
                                                </p>
						                    </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pro">
                                    <div class="pro1"></div>
                                    <div style="padding: 10px;">
                                        <div class="des">
                                            <h4><li class="fa fa-commenting-o"></li> Discussion Forums</h4>
                                            <div class="b1">
							                    <p class="paragraph2">
                                                    Count: 20
                                                    <br> 
                                                    <button class="open-button" onclick="openForm4()">
                                                        <i class="fa fa-arrow-right">Continue</i>
                                                    </button>
                                                </p>
						                    </div>
                                        </div>
                                    </div>
                                </div>  
                              </div>
                          <!-- /.row -->
                          
                      </section>
                      <!-- /.section -->
                      <div class="bx1">
                        <div class="bx3" >
                            <div > 
                                          <h5 style="font-weight: bold;padding: 1px; margin-left: 5px;" >
                                              <li class="fa fa-folder-o"></li> Learning Resources
                                              <a href="" style="float: right; margin-right: 3px;" class="btn btn-default"> 
                                                <li class="fa fa-upload"> Upload Sillabus</li> 
                                              </a>
                                              <a href="" style="float: right; margin-right: 3px;" class="btn btn-default"> 
                                                <li class="fa fa-upload"> Upload Resources</li> 
                                              </a>
                                              
                                          </h5>
                                      </div><hr>
                                      <!--Displaying data-->
                                  
                                  <table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                          <th>Id</th>
                                          <th>School Name</th>
                                          <th>Full Names</th>
                                          <th>UserID</th>
                                          <th>Gender</th>
                                          <th>Type</th>
                                          <th>StudentEmail</th>
                                          <th>Password</th>
                                          <th>Reg. Date</th>
                                          <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Id</th>
                                          <th>School Name</th>
                                          <th>Full Names</th>
                                          <th>UserID</th>
                                          <th>Gender</th>
                                          <th>Type</th>
                                          <th>StudentEmail</th>
                                          <th>Password</th>
                                          <th>Reg. Date</th>
                                          <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                      <tr style="font-size: 12px;">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td style="word-spacing: 40px;">
                                          <a href="" class='fa fa-edit' title="Edit Student Results"></a>
                                          <a href="" class='fa fa-trash' title="Delete Student Results"></a>
                                        </td>
                                      </tr>
                            
                                  </tbody>
                                </table>
                        </div>  
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
            
                    
         <br><hr>
         <p style="color: red;text-align: center;">copyrite@E-Learning - 2023</p>
         <br>

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
