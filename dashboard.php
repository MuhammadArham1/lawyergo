<?php
include('db.php');
session_start();    



if (isset($_SESSION['user'])){
  if($_SESSION['user'] == 'lawyer'){}
  else{
    header('location:home.php');
  }
}else{  
        header('location:lawyerlogin.php');
}
  if (isset($_POST['logout']))
{
  session_destroy();
  header('location:lawyerlogin.php');  
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Dashboard | LAWYERGO</title>
  <link rel="icon" 
      type="image/png" 
      href="./images/logo.png" />
  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan|Poppins:400,600,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />


  <style>
.logout{
    padding: 8px 65px;
    outline: none;
    border: none;
    border-radius: 30px;
    color: #fff;
    background: -webkit-gradient(linear, left top, left bottom, from(#f5e47b), to(#fb930a));
    background: linear-gradient(to bottom, #f5e47b, #fb930a);
    text-transform: uppercase;
}
.container{
  min-height:600px;
}
.subject{
  font-size:50px
}
.subject::first-letter{
  text-transform:uppercase;
}
.case::first-letter{
  text-transform:uppercase;
}
.case{
  font-weight:normal;
}
.decline{
  border:1px solid white;
  background:black;
  color:white;
  padding:10px;
}
.decline:hover{
  border:1px solid black;
  background:white;
  color:black;
}
  </style>
</head>
<body class="sub_page">  



<div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.php">
            <img src="images/logo.png" alt="">
            <span>
              LawyerGo
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <?php


include('db.php');

$user = $_SESSION['email'];
$querys = "SELECT * FROM lawyer_tb where email = '$user';";
$rows = mysqli_query($con,$querys);
$totalrows = mysqli_num_rows($rows);
$data = mysqli_fetch_assoc($rows);
$lawyerid = $data['id'];



                echo'
                <li class="nav-item">
                  <a class="nav-link">'.$data['name'].'</a>
                </li>
                <li class="nav-item">
                </li>
                <li class="nav-item">
                  <img class="nav-link" href="#" style="width:100px; object-fit: cover; height:60px" src="'.$data['picture'].'">
                </li>

                <li class="nav-item">
                  <a class="nav-link" ><form action="" method="post"><input type="submit" class="logout" name="logout" value="Log Out"></form></a>
                </li>'
                ?>
              </ul>

            </div>

          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>

  <!-- contact section -->

  <section class="contact_section layout_padding">
    <div class="design-box">
      <img src="images/design-2.png" alt="">
    </div>
         

    <div class="container">
      <h1>Your Cases</h1>
      <br>
      <hr>
      <div class="row">
        
          
        </div>

    <?php
		
    include('db.php');
    
    $query = "SELECT * FROM case_tb where lawyerid = '$lawyerid';";
    $row = mysqli_query($con,$query);
    $totalrow = mysqli_num_rows($row);
    
    if ($totalrow != 0)
      {
    
        while($data = mysqli_fetch_assoc($row))
        {
          echo "
          <div class='col-md-12'>
          <div class='box'>
          <h5 class='subject'  style='font-weight:bold; '>
          "
          . $data["subject"].
          "
        </h5>
          <div class='detail-box'>
            <p class='case'  >
              "
              . $data["case"].
              "
            </p>
                    <a href='deletecase.php?case=$data[case]'>
                    <buttton class='decline'>Decline Case</button></a>
          </div>
        </div>
        </div><hr>"
    
        
              
                ;
    
          }
        }
        else
        {
          echo"No Case Found";
          }
    ?> 
    

    <?php
if (isset($_POST['DECLINE']))
{
	$case = $_POST['DECLINE'];
}
?>  
    
          <div class="d-flex justify-content-center">
          </div>
        </div>
  </section>

  <!-- end contact section -->

  <!-- info section -->
  <section class="info_section ">
    <div class="container">
      <div class="info_container">
        <div class="row">
          <div class="col-md-3">
            <div class="info_logo">
              <a href="">
                <img src="images/logo.png" alt="">
                <span>
                  LawyerGo
                </span>
              </a>
            </div>
          </div>
          <div class="col-md-3">
            <div class="info_contact">
              <a href="">
                <img src="images/location.png" alt="">
                <span>
                  Address
                </span>
              </a>
            </div>
          </div>
          <div class="col-md-3">
            <div class="info_contact">
              <a href="">
                <img src="images/phone.png" alt="">
                <span>
                  +01 1234567890
                </span>
              </a>
            </div>
          </div>
          <div class="col-md-3">
            <div class="info_contact">
              <a href="">
                <img src="images/mail.png" alt="">
                <span>
                  demo@gmail.com
                </span>
              </a>
            </div>
          </div>
        </div>
        <div class="info_form">
          <div class="d-flex justify-content-center">
            <h5 class="info_heading">
              Newsletter
            </h5>
          </div>
          <form action="">
            <div class="email_box">
              <label for="email2">Enter Your Email</label>
              <input type="text" id="email2">
            </div>
            <div>
              <button>
                subscribe
              </button>
            </div>
          </form>
        </div>
        <div class="info_social">
          <div class="d-flex justify-content-center">
            <h5 class="info_heading">
              Follow Us
            </h5>
          </div>
          <div class="social_box">
            <a href="">
              <img src="images/fb.png" alt="">
            </a>
            <a href="">
              <img src="images/twitter.png" alt="">
            </a>
            <a href="">
              <img src="images/linkedin.png" alt="">
            </a>
            <a href="">
              <img src="images/insta.png" alt="">
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info_section -->

  <!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
      &copy; <span id="displayYear"></span> All Rights Reserved
    </p>
  </section>
  <!-- footer section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/custom.js"></script>
</body>
</html>