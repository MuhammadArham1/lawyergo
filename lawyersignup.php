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
  <style>
    .detail_box input{
      width: 70%;
    }
    #bio{
      height:150px
    }
  </style>
</head>

<body>


<?php
include('db.php');

if(isset($_POST['lawyersignup']))

{
  $imagename= $_FILES["picture"]["name"]; 
  $targetDir = "images/";
  $fileName = basename($_FILES["picture"]["name"]);
  $targetFilePath = $targetDir . $fileName;
  move_uploaded_file($_FILES["picture"]["tmp_name"], $targetFilePath);
  $picturelink = './' . $targetFilePath;

	$lawyername = $_POST['lawyername'];
	$password = $_POST['password'];
  $email = $_POST['lawyeremail'];
  $city = $_POST['city'];
  $timings = $_POST['timings'];
  $speciality = $_POST['speciality'];
  $bio = $_POST['bio'];
	
	$query = "INSERT INTO `lawyer_tb` (`name`, `email`, `password`, `city`, `timings`, `speciality`, `bio`, `picture`) VALUES
	('$lawyername','$email','$password','$city','$timings','$speciality','$bio','$picturelink')";
	$run = mysqli_query($con,$query);
	if($run)
	{
		echo"<script>location.replace('lawyerlogin.php');</script>";
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
                <div class="col-md-12">                  
                  <div class="detail_box row">

                    <div class="col-md-6">
                    <h1 style="font-size:30px">
                     Lawyer Sign Up
                    </h1>
                    <form action="" method="post" enctype="multipart/form-data">
                    <label for="lawyername">
                      Name
                    </label><br>
                    <input type="text" name="lawyername" id="lawyername" required>
                    <br><br>
                    <label for="lawyeremail">
                      Email
                    </label><br>
                    <input type="email" name="lawyeremail" id="lawyeremail" required >
                    <br><br>
                    <label for="password">
                      Password
                    </label>
                    <br>
                    <input type="password" name="password" id="password" required>
                    <br><br>
                    <label for="speciality">
                      Speciality
                    </label><br>
                    <input type="text" name="speciality" id="speciality" placeholder = "Enter your expertise" required >
                    <br><br>
                    


                    <input id="lawyersignup" type="submit" name="lawyersignup" value="Signup" class="login-button">
                      <br>
                    </div>















                    <div class="col-md-6">
                    <label for="city">
                      City
                    </label><br>
                    <input type="text" name="city" id="city" required >
                    <br><br>
                    <label for="timings">
                      Timings
                    </label><br>
                    <select name="timings" id="timings">
                      <option value="12 - 10">12 - 10</option>
                      <option value="8-6">8-6</option>
                      <option value="9-5">9-5</option>
                      <option value="10-8">10-8</option>
                      <option value="11-7">11-7</option>
                      <option valu e="11-9">11-9</option>
                      <option value="9-8">9-8</option>
                    </select>
                    <br><br>
                    
                    <label for="bio">
                      Bio
                    </label><br>
                    <input type="text" name="bio" id="bio" required >
                    <br><br>
                    <label for="picture">
                      Upload your image
                    </label><br>
                    
                    <input type="file" name="picture" id="picture" accept="image/png, image/gif, image/jpeg" required/><br>
                    </div>
                    
                    
                    
                    
                    
                    
                    
                      
                      </form>
                  </div>


                </div>
                
              </div>
            </div>
            
          </div>
        </div>
      </div>

    </section>

  </div>

<a href="lawyerlogin.php" class="law-log-link">Already a lawyer? Login here!</a>




  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/custom.js"></script>

</body>

</html>