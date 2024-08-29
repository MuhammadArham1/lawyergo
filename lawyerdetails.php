<?php
include('db.php');
session_start();    

if (isset($_SESSION['user'])){
  if($_SESSION['user'] == 'customer'){}
  else{
    header('location:index.php');
  }
}else{  
        header('location:index.php');
}
?>
<?php 
  if (isset($_POST['logout']))
{
  session_destroy();
  header('location:index.php');  
}
?>
<!DOCTYPE html>
<html>

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

  <title>Lawyer | LAWYERGO</title>
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
  <link rel="stylesheet" href="css/lawyer.css">
  <style>
#lawyerbookform{
  
  margin-bottom:100px
}  #lawyerbookform input[type="text"]{
    width:100%;
    height:40px;
  }
  #lawyerbookform #case{
    height:200px;
  }
  #book{
    padding:15px;   
    background:black;
    border:1px solid white;
    color:white;
  }
  #book:hover{ 
    background:white;
    border:1px solid black;
    color:black;
  }
.order{
  margin-block:100px;
}
  </style>
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

<body class="sub_page">

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="Home.php">
            <img src="images/logo.png" alt="">
            <span>
            LawyerGO
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="Home.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.php"> About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="lawyers.php">Lawyers</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.php">Contact us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" ><form action="" method="post"><input type="submit" class="logout" name="logout" value="Log Out"></form></a>
                </li>
              </ul>

            </div>
            <div class="quote_btn-container ">
              
              <form class="form-inline">
                <a href="search.php"><div class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></div></a>
              </form>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>

  <section class=" slider_section position-relative">
      <div class="design-box">
        <img src="images/design-1.png" alt="">
      </div>

      <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row">

  <?php


$lawyerid = $_GET['lawyerid'] ;
$query = "SELECT * FROM lawyer_tb where id = ${lawyerid}";
$row = mysqli_query($con,$query);
$totalrow = mysqli_num_rows($row);

if ($totalrow != 0)
	{

?>
<?php
		
		while($data = mysqli_fetch_assoc($row))
		{
      
			echo "
      <div class='col-md-6'>

      
      <div class='img-box'>
        <img src='". $data["picture"]."'>
      </div>
      
 
        <h5 class =p>
          "
          . $data["speciality"].
          "
        </h5>
       



        
      </div>
    
    
    <div class='col-md-6'>
    <div class='name'>
    <h6>
      ". $data["name"].
      "
    </h6>

  </div>
  <br>
  <br>
  <div class='detail-box'>
 
  <P>
 <span> Timings: </span> " . $data["timings"]. "
  
  </P>
  
  <P>
  <span> City: </span>" . $data["city"]. "
  
  </P>
  
  <P>
  <span> Email: </span>" . $data["email"]. "
  
  </P>
    
  
  </div>

  </div>
  
  <div class='col-mds-12'>
  
  <P class = 'bio'>
  " . $data["bio"]. "
  
  </P>
  
  "
    
          
            ;

			}
		}
		else
		{
			echo"No Records Found";
			}
?> 
<form action="" method="post">
<button class ='order' name="book">Book</button>  
</form>


 
  </div>
</div>

</div>

</div>

</div>
</div>


  </section>

  <?php
if (isset($_POST['book']))
{	
		echo'<form method="POST" id="lawyerbookform" style="width:90%; margin-inline:auto">
    <label for="subject">Subject:</label><input required type="text" name="subject" id="subject" placeholder="Enter the Subject of your Case"><br><br>
    <label for="case">Case:</label><input required type="text" name="case" id="case" placeholder="Explain your case in detail"><br><br>
    <input type="submit" value="Book Now" id="book" name="booklawyer">
  </form>';		
}
?>  




<?php
if (isset($_POST['booklawyer']))
{	

  $subject = $_POST['subject'];
	$case = $_POST['case'];
  $useremail = $_SESSION['email'];

  $querygetcustomer = "SELECT * FROM customer_tb where email = '$useremail';";
  $rows = mysqli_query($con,$querygetcustomer);
  $datas = mysqli_fetch_assoc($rows);
  

  $querybook = "INSERT INTO `case_tb` (`customerid`, `lawyerid`, `subject`, `case`) 
  VALUES (".$datas["id"].",'$lawyerid', '$subject', '$case');";
    $run = mysqli_query($con,$querybook);
    
    if ($run)
      {
        }
        else
        {
          echo"No Records Found";
          }
}
?>  

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