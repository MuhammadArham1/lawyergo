<?php
include('db.php');
session_start();    
if (isset($_SESSION['user'])){
    header('location:dashboard.php');  
}
?>



<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>LAWYERGO</title>


  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />


  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />


  <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan|Poppins:400,600,700&display=swap" rel="stylesheet">

  <link href="css/style.css" rel="stylesheet" />
  <link rel="icon" 
      type="image/png" 
      href="./images/logo.png" />
  <link href="css/responsive.css" rel="stylesheet" />
  <style>
  
  #navbarSupportedContent > div.d-flex.ml-auto.flex-column.flex-lg-row.align-items-center > ul > li:nth-child(5) > a > form > input{
  background:none ;
  color: white;  
  border:none;
background:black;
padding:3px;
padding-inline:10px;
border:1px solid white;


  
}
#navbarSupportedContent > div.d-flex.ml-auto.flex-column.flex-lg-row.align-items-center > ul > li:nth-child(5) > a > form > input:hover{

  background:white;
    color:black;
    border:1px solid black;
  }
  
  .booknow{
    background:black;
    padding:15px;
    color:white;
    border:1px solid white;
      }
  .booknow:hover{
    background:white;
    color:black;
    border:1px solid black;
      }    


    .detail_box p{
      margin-block:10px;
      padding-block:10px

    }
    .img-box{
      margin-block:30px
    }
  </style>
</head>

<body>

  <div class="hero_area">

    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          
          <a class="navbar-brand" style="display:block; width:100%;" href="Home.php">
          <center>
            <img src="images/logo.png" alt="">
            <span>
              LawyerGo
            </span>
            </center>
          </a>
          
        </nav>
      </div>
    </header>


    <section class=" slider_section position-relative">
      <div class="design-box">
        <img src="images/design-1.png" alt="">
      </div>

      <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row">
                <div class="col-md-6">


                  <div class="detail_box">
                    <!-- <h1>
                     Login
                    </h1> -->
                    <form action="" method="post">
                    <label for="useremail">
                      Email
                    </label><br>
                    <input type="email" name="useremail" id="useremail" required>
                    <br><br>
                    <label for="password">
                      Password
                    </label>
                    <br>
                    <input type="password" name="password" id="password" required><br>
                    <?php
if (isset($_POST['login']))
{
	$email = $_POST['useremail'];
	$password = $_POST['password'];
	
	$query = "select * from customer_tb where email = '$email'
	and
	password = '$password'";
	
	$run = mysqli_query($con,$query);
	$totalrows = mysqli_num_rows($run);
	
	if($totalrows == 1)
	{
		$_SESSION['email'] = $email;
    $_SESSION['user'] = 'customer'; 

        echo"login successfully";
        echo $_SESSION['user'];
        
    echo"<script>location.replace('Home.php');</script>";
    }
	
	else
	{
		echo'<p style="color:red">Email or Password is incorrect</p>';	
	}
}
?>   
                    
                      <input id="login" type="submit" name="login" value="Login" class="login-button">
                      <br>
                      </form>

                    <a href="signup.php">Don't have an account? Sign Up</a>
                  </div>


                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="images/slider-img.png" id="loginimage" alt="">
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>

    </section>

  </div>

<a href="lawyerlogin.php" class="law-log-link">Are you a lawyer? Login here</a>




  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/custom.js"></script>

</body>

</html>