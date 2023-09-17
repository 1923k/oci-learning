
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
        <link rel="stylesheet" href="../css/button.css"><!--Dropdown button-->
        <link rel="stylesheet" href="../css/topnavbar.css"><!--nav design-->
        <link rel="stylesheet" href="exami.css">
       
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
  margin-top: 0px;
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
.oracle5{
    padding: 10px;
    min-height: 87vh;
    display: flex;
    flex-flow: column;
    width: 100%;
    align-items: center;
    justify-content: center;
    gap:1rem;
    background: url(../images/oracle5.png) no-repeat;
    background-size: cover;
    background-position: center;
    
 }
 .oracle6{
    background: #007bff;
    width: 100%;
    text-align: center;
    padding: 5px;
    font-weight: bold;
    color: white;
 }
    </style>
</head>
<body>
    <!--Start of navbar -->
    <div class="nav">
        <input type="checkbox" id="nav-check">
        <div class="nav-header">
            <div class="nav-title">
                ORACLE GATES
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
            <a href="../index.php">Home</a>
            <a href="../about.php">About</a>
            <a href="../contact.php">Contact</a>
            <a href="../login.php">Login</a>
            <a href="../forums/discussions.php" style="float: right"> <i class="fa fa-send-o"> Discussions</i></a>
        </div>
    </div>
    <div class="oracle5">
        <div style="background: powderblue; padding: 20px; border-radius: 50%; text-align: center; justify-content: center; ">
            <h3 style="color: #ff4411; font-size: 26px; font-family: 'Signika', sans-serif; padding-bottom: 10px;">
                Welcome to OCI 2023 Foundation Associate Prepation
            </h3>
        </div>

        <img src="../images/oracle-logo.png" width="300px" heigh="300px">
    <!-- start Quiz button -->
    <div class="start_btn">
        <button>Begin Your Examination</button>
    </div>

    <!-- Info Box -->
    <div class="info_box">
        <h3><i class="fa fa-graduation-cap"></i> Certification Exam Preparation</h3>
        <hr>
        <div class="box-2">
            <p class="p-1">
                <b>Oracle Cloud Infrastructure 2023 Foundations Associate (1Z0-1085-23)</b><br><br>
                <b style="color: red;">PLEASE READ CAREFULLY THE EXAMINATION RULES BELOW.</b><br><br>
                <u>NB: This is not a certification exam.</u>
            </p>
                                  
        </div>
        <p class="p-2">  
            <ol>
                <li>The exam consist of 35 questions</li>
                <li> You will have only <span style="font-weight: bold">60 seconds</span> per each question.</li>
                <li> Once you select your answer, it can't be undone.</li>
                <li> You can't select any option once time goes off.</li>
                <li> You'll get points on the basis of your correct answers at the end of the exam</li>
                <br>
                <li>You are allowed to have as many attempts as you want</li>
            </ol>
        </p>
        <div class="btn-btn">
            <button class="quit"><i class="fa fa-times"></i> Exit</button>
            <button class="restart"><i class="fa fa-arrow-right"></i> Continue</button>
        </div>
    </div>

    <!-- Quiz Box -->
    <div class="quiz_box">
        <header>
            <div class="title">OCI Foundations 2023 Associate Examinantion (1Z0-1085-23)</div>
            <div class="timer">
                <div class="time_left_txt">Seconds</div>
                <div class="timer_sec"> 60</div>
            </div>
            <!-- <div class="time_line"></div> -->
        
        </header>
        
        <section>
            <div class="que_text">
                <!-- Here I've inserted question from JavaScript -->
            </div>
            <div class="option_list">
                <!-- Here I've inserted options from JavaScript -->
            </div>
        </section>

        <!-- footer of Quiz Box -->
        <footer>
            <div class="total_que">
                <!-- Here I've inserted Question Count Number from JavaScript -->
            </div>
            <a href="" class="btn btn-default"><i class="fa fa-times"></i> Close</a>
            <button class="next_btn"><i class="fa fa-arrow-right"></i> Next</button>
        </footer>
    </div>

    <!-- Result Box -->
    <div class="result_box">
        <div class="icon" >
    
        </div>
        <div class="complete_text">
            <div><b>OCI Foundations 2023 Associate Examinantion (1Z0-1085-23)</b></div>
            <hr>
            You've completed (1Z0-1085-23) preparation exam.
        </div>
        <div class="score_text" style="width: 100%;">
            <!-- Here I've inserted Score Result from JavaScript -->
        </div>
        <div class="btn-btn">
            <button class="restart">Restart</button>
            <button class="quit">Quit</button>
        </div>
    </div>

    <!-- Inside this JavaScript file I've inserted Questions and Options only -->
    <script src="js/questionss-bank.js"></script>

    <!-- Inside this JavaScript file I've coded all Quiz Codes -->
    <script src="js/scriptss.js"></script>

    
    </div>
    <!--Ending background--->

    <!--Footer--->
    <div class="oracle6">
        <p><img src="../images/icons8-lesotho-20.png"> Oracle Gates Lesotho</p>
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