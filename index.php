
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Student Portal | Dashboard</title>
        <link rel="shortcut icon" href="icons/icons8-windows-xp-30.png">
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" ><!--FRAMEWORK-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><!--ICONS-->
        <link rel="stylesheet" href="css/main.css" media="screen" ><!--MAIN STYLE-->
        <link rel="stylesheet" type="text/css" href="../js/DataTables/datatables.min.css"/>
        
        <link rel="stylesheet" href="css/dash1.css"><!--Dashboard design-->
        <link rel="stylesheet" href="css/topnavbar.css"><!--nav design-->
       
    <style>
    .pic{
        padding: 10px;
    min-height: 60vh;
    display: flex;
    flex-flow: column;
    width: 100%;
    align-items: center;
    justify-content: center;
    gap:1rem;
    background: url(images/oracle.png) no-repeat;
    background-size: cover;
    background-position: center;
    
 }
 
 
/* Campus */

.campus{
    width: 80%;
    margin: auto;
    text-align: center;
    padding-top: 0px;
}
.campus-col{
    flex-basis: 32%;
    border-radius: 10px;
    margin-bottom: 20px;
    position: relative;
    overflow: hidden;
    border: 1px solid powderblue;
}
.campus-col img{
    width: 100%;
    display: block;
}
.row{
    margin-top: 3%;
    display: flex;
    justify-content: space-between;
}

.layer{
    height: 100%;
    width: 100%;
    position: absolute;
    top: 0;
    left: 0;
    transition: 0.5s ease;
}
.layer:hover{
    background-color: powderblue;
    opacity: 0.8;
}
.layer h3{
    width: 100%;
    font-weight: 500;
    color: black;
    font-size: 26px;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    position: absolute;
    opacity: 0;
    transition: 0.5s ease;
    
}
.layer:hover h3{
    bottom: 49%;
    opacity: 1;
}

    </style>
<body>
    <!--navigation bar  -->
    <?php 
      include 'navbar1.php';
    ?>

    <div class="pic">
      <h3 style="text-align:center; color: #76a71b;">Welcome to ORACLE CLOUD INFRASTRUCTURE free Certification Learning</h3>
      <a href="resources/chapter1-oci-introduction.php" class="btn btn-primary" style="width: 170px;">Start Learning</a>
        <a href="register.php" class="btn btn-warning">Signup</a>
    </div>

    <section class="campus">
        <br><br>
    <h1>OCI Free Certification MAP</h1>
        <div class="row">
            <div class="campus-col">
                <img src="images/oracle1.png">
                <br> 
                <p style="color: black; font-size: 18px;">1. Start Learning</p>
                <div class="layer">
                    <h3>
                         <form action="resources/oci-foundations-introduction.php">
                            <input type="submit" value="Start Learning" class="btn btn-primary">
                        </form>
                    </h3>
                </div>
            </div>
            <div class="campus-col">
                <img src="images/oracle3.png" style="height: 175px;">
                <br><br>
                <p style="color: black; font-size: 18px;">2. Practice Exam</p>
                <div class="layer">
                    <h3>
                         <form action="examination/exam-dashboard.php">
                            <input type="submit" value="Start Practice Exam" class="btn btn-primary">
                        </form>
                    </h3>
                </div>
            </div>
            <div class="campus-col">
                <img  src="images/oracle2.png"  style="height: 175px;">
                <br><br>
                <p style="color: black; font-size: 18px;">3. Certification Exam</p>
                <div class="layer">
                    <h3>
                         <form action="https://mylearn.oracle.com/ou/learning-path/become-an-oci-foundations-associate-2023/122043">
                            <input type="submit" value="Start Certification Exam" class="btn btn-primary">
                        </form>
                    </h3>
                </div>
            </div>
        </div>

    </section>

    <!-- Call To Action -->

    <section class="cta">
        <h1>Get in contact with US anytime, anywhere<br> and learn ICT</h1>
        <a href="" class="btn btn-primary">CONTACT US</a>
    </section>
    <div style="background-color: #555555; color: white;text-align: center;">
        <br>
        <p >copyrite@Oracle Gates Lesotho - 2023</p>
        <br>
    </div>
</body>
</html>