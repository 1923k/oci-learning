<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Contact || Sole</title>
    <link rel="stylesheet" href="css/about-contact.css">
    <link rel="stylesheet" href="css/topnavbar.css"><!--nav design-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><!--ICONS-->
    <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" ><!--FRAMEWORK-->
    
    <style>
  .pic1{
        padding: 10px;
    min-height: 30vh;
    display: flex;
    flex-flow: column;
    width: 100%;
    align-items: center;
    justify-content: center;
    gap:1rem;
    background: url(images/about.jpg) no-repeat;
    background-size: cover;
    background-position: center;
    
 }
    </style>

<body>
   <!--navigation bar  -->
   <?php 
      include 'navbar1.php';
    ?>

    <div class="pic1">
      <h2 style="text-align:center; color: blue;"></h2>
    </div>

    <!-- Blog Page Content -->
    <section class="blog-content">
    
        <div class="row">
         
            <div class="blog-right">
                <div class="comment-box">

                    <h3>CONTACT US</h3>
    
                    <form class="comment-form">
                        <input type="text" placeholder="Enter Names">
                        <input type="email" placeholder="Enter Email">
                        <textarea name="" rows="5" placeholder="Your message"></textarea>
                        <button type="submit" class="hero-btn red-btn"><i class="fa fa-send-o"></i> FORWARD</button>
    
                    </form>
    
                </div>

                <br><br><br>
            </div>
            
        </div>
        
    </section>
    
    <div style="background-color: #555555; color: white;text-align: center;">
        <br>
        <p style="color: white;">copyrite@Oracle Gates Lesotho - 2023</p>
        <br>
    </div>


</body>

</html>