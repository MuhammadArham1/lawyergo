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

<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Home | LAWYERGO</title>


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

<!--this is the website password rC5>M1<gYNM\2VtB-->
<?php 
  if (isset($_POST['logout']))
{
  session_destroy();
  echo"<script>location.replace('index.php');</script>";
}
?>
  <div class="hero_area">

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
                    <h2>
                      <span>Lawyer a click away!</span>
                      <hr>
                    </h2>
                    <h1>
                      LawyerGO
                    </h1>
                    <p>
                    We are proactive in our approach to managing your needs and matter. We will work hard to achieve the best possible outcome for you.
                    </p>
                    <div>
                      <a href="lawyers.php" class="booknow">Book Now</a>
                    </div>
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







  <section class="about_section layout_padding2-top layout_padding-bottom">
    <div class="design-box">
      <img src="images/design-2.png" alt="">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                About Our Lawyers
              </h2>
            </div>
            <p style="font-weight:normal;">
            Our Lawyers has provided quality legal services to clients for over 20 years. We are approachable, modern and efficient.
<br>
We will help you understand and navigate legal challenges of every kind, ranging from family issues and conveyancing to business transactions.
            </p>
            <div>
              <a href="">
                Read More
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="img-box">
            <img src="images/section image.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>


  <?php

?>


  <section class="price_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Our Lawyers
        </h2>
      </div>
      <div class="price_container">

      <?php
		
include('db.php');

$query = "SELECT * FROM lawyer_tb LIMIT 3;";
$row = mysqli_query($con,$query);
$totalrow = mysqli_num_rows($row);

if ($totalrow != 0)
	{

		while($data = mysqli_fetch_assoc($row))
		{
			echo "<div class='box'>
      <div class='name'>
        <h6>
          ". $data["name"].
          "
        </h6>
      </div>
      <div class='img-box'>
        <img src='". $data["picture"]."' alt='' style='height:170px; width:170px; object-fit: cover; '>
      </div>
      <div class='detail-box'>
        <h5>
          "
          . $data["speciality"].
          "
        </h5>
        <a href='lawyerdetails.php?lawyerid=$data[id]'>Order</a>
      </div>
    </div>"

    
          
            ;

			}
		}
		else
		{
			echo"No Records Found";
			}
?> 


        
      </div>
      <div class="d-flex justify-content-center">
        <a href="lawyers.php" class="price_btn">
          See More
        </a>
      </div>
    </div>
  </section>





  <section class="ring_section layout_padding">
    <div class="design-box">
      <img src="images/design-1.png" alt="">
    </div>
    <div class="container">
      <div class="ring_container layout_padding2">
        <div class="row">
          <div class="col-md-5">
            <div class="detail-box">
              <h4>
                Holiday
              </h4>
              <h2>
                Lawyers available even in holidays!
              </h2>
              <a href="lawyers.php">
                Book Now
              </a>
            </div>
          </div>
          <div class="col-md-7">
            <div class="img-box">
              <img src="images/lawyerworking.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>






  <section class="contact_section layout_padding">
    <div class="design-box">
      <img src="images/design-2.png" alt="">
    </div>
    <div class="container ">
      <div class="">
        <h2 class="">
          Contact Us
        </h2>
      </div>

    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <form action="">
            <div>
              <input type="text" placeholder="Name" />
            </div>
            <div>
              <input type="email" placeholder="Email" />
            </div>
            <div>
              <input type="text" placeholder="Phone" />
            </div>
            <div>
              <input type="text" class="message-box" placeholder="Message" />
            </div>
            <div class="d-flex ">
              <button>
                SEND
              </button>
            </div>
          </form>
        </div>
        <div class="col-md-6">
          <div class="map_container">
            <div class="map-responsive">
              <iframe
                src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France"
                width="600" height="300" frameborder="0" style="border:0; width: 100%; height:100%"
                allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>




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
              <input type="email" id="email2">
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



  <section class="container-fluid footer_section">
    <p>
      &copy; <span id="displayYear"></span> All Rights Reserved

    </p>
  </section>


  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/custom.js"></script>
  
</body>

</html>