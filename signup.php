<?php
include('db.php');
session_start();    
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

  <link rel="icon" 
      type="image/png" 
      href="./images/logo.png" />
  <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan|Poppins:400,600,700&display=swap" rel="stylesheet">

  <link href="css/style.css" rel="stylesheet" />

  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>


<?php
include('db.php');

if(isset($_POST['signup']))

{
	$username = $_POST['username'];
	$password = $_POST['password'];
  $email = $_POST['useremail'];
	
	$query = "INSERT INTO customer_tb (name,password,email)
	VALUES
	('$username','$password','$email')";
	$run = mysqli_query($con,$query);
	if($run)
	{
		echo"<script>location.replace('index.php');</script>";
	}
	else
	{
		echo"Opps SomeThing Is Wrong::::";
	} 
	
	
	
}

?>







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
                    <h1>
                     Sign Up
                    </h1>
                    <form action="" method="post">
                    <label for="username">
                      Name
                    </label><br>
                    <input type="text" name="username" id="username" required>
                    <br><br>
                    <label for="useremail">
                      Email
                    </label><br>
                    <input type="email" name="useremail" id="useremail" required >
                    <br><br>
                    <label for="password">
                      Password
                    </label>
                    <br>
                    <input type="password" name="password" id="password" required><br>
                    
                      <input id="signup" type="submit" name="signup" value="Signup" class="login-button">
                      <br>
                      </form>
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

  </div>

<a href="lawyerlogin.php" class="law-log-link">Are you a lawyer? Login here</a>




  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/custom.js"></script>

</body>

</html>