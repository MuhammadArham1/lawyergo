<?php
include('db.php');
session_start(); 
if (isset($_POST['login']))
{
	$email = $_POST['useremail'];
	$password = $_POST['password'];
	
	$query = "select * from lawyer_tb where email = '$email'
	and
	password = '$password'";
	
	$run = mysqli_query($con,$query);
	$totalrows = mysqli_num_rows($run);
	
	if($totalrows == 1)
	{
		$_SESSION['email'] = $email;
    $_SESSION['user'] = 'lawyer';      
        echo"login successfully";
        echo $_SESSION['user'];
        
    echo"<script>location.replace('dashboard.php');</script>";
    }
	
	else
	{
		echo'<h2 style="color:red"> email OR PASSWORD IS INCORRECT</h2>';	
	}
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

  <title>Lawyer Login | LAWYERGO</title>


  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />


  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <link rel="icon" 
      type="image/png" 
      href="./images/logo.png" />

  <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan|Poppins:400,600,700&display=swap" rel="stylesheet">

  <link href="css/style.css" rel="stylesheet" />

  <link href="css/responsive.css" rel="stylesheet" />
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
                    <h1 style="font-size:60px;">
                     Lawyer Login
                    </h1>
                    <form action="" method="post">
                    <label for="useremail">
                      Email
                    </label><br>
                    <input type="email" name="useremail" id="useremail">
                    <br><br>
                    <label for="password">
                      Password
                    </label>
                    <br>
                    <input type="password" name="password" id="password"><br>
                    
                      <input id="login" type="submit" name="login" value="Login" class="login-button">
                      <br>
                      </form>

                      
                    <a href="lawyersignup.php">New to lawyergo? Sign-up as a lawyer!</a>
                  </div>


                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="images/slider-img.png" alt="">
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>

    </section>

    <a href="index.php" class="law-log-link">Not a Lawyer? Login here</a>

  </div>



  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/custom.js"></script>

</body>

</html>