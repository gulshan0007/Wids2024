<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">

    
    <!-- Custom CSS -->
    <link href="css/agency.css" rel="stylesheet">
    <!--link href="css/table.css" rel="stylesheet"-->
    <link href="css/scroll_nav.css" rel="stylesheet">
    
    
    <!-- <link rel="stylesheet" href="style.css"> -->


    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>ML Booklet | WIDS </title>
    <link rel="icon" href="assets/img/logo2.ico" type="image/x-icon" />


    <style>
        .course-content{
            margin:0 auto;
        }
        .carousel-inner>.item>a>img,
        .carousel-inner>.item>img,
        .img-responsive,
        .thumbnail a>img,
        .thumbnail>img {
            display: block;
            max-width: 60%;
            height: auto;
        }

        @media(min-width:768px) {
            section {
                padding: 120px 0;
            }
            
        }
        section {
            padding: 50px 0;
        }

        #team {
            margin-top: 0%;
        }
        #issaemail:hover{
            color: #323B75;
        }
        #issafb:hover{
            background-color: #323B75;
        }
        footer{
            padding-bottom: 1.5rem!important;
            padding-top: 1.5rem!important;
            margin-top: 3rem!important;
            width: 100%!important;
            flex-shrink: 0!important;
            display: block;
            box-sizing: border-box;
            line-height: 1.5;
            background: #f8f9fa !important;
            font-family: "Open Sans", sans-serif;
        }
        .coming-soon {
            padding: 100px 20px;
            background-color: #f4f4f4;
            color: #333;
        }
        .coming-soon h1 {
            font-size: 48px;
            margin-bottom: 20px;
        }
    .coming-soon p {
            font-size: 18px;
    }
    </style>
    
</head>


<body>

  

  <!-- Navigation -->
  <nav class="navbar navbar-default navbar-dark" style="background-color:#222222 !important;border-radius: 0px;">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-bs-toggle="collapse" data-bs-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class=" page-scroll" href="#page-top"><img src="img/ugac.png" style="width: 110px; height: 75px; padding-right: 25px;" alt=""></a>
                <a class=" page-scroll" href="#page-top"><img src="img/loooo.jpg" style="width: 87px; height: 75px;" alt=""></a>

            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right" style="margin-top: 10px;">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" style="color:#ffffff !important;" href="index.php#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" style="color:#ffffff !important;" href="browse.php" >Projects</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="ml_booklet.php">ML Booklet</a>
                    </li>
                    <!-- <li>
                        <a class="page-scroll" href="#team">Contact</a>
                    </li> -->
                    <li>
                        <a class="page-scroll" style="color:#ffffff !important;" href="index.php#faqs">FAQ</a>
                    </li>
                    <li>
                        <a class="page-scroll" style="color:#ffffff !important;" href="team.php">Contact Us</a>
                    </li>
                    <?php if (!isset($_SESSION['ldap'])) { ?>
		            <li class="nav-item">
		                <a class="btn btn-dark mx-2 my-md-0 my-1 dotted-border"
		                    href="https://gymkhana.iitb.ac.in/profiles/oauth/authorize/?client_id=JjLXbgsU4Au7Dz89tKOXPxnIpOruAa8zKs0ZvwFq&amp;scope=basic ldap profile secondary_emails program phone&amp;response_type=code"
		                    target="_parent">Login via SSO</a>
		            </li>
		            <?php } else { ?>
                        <li>
                        <a href="https://docs.google.com/forms/d/e/1FAIpQLScHiu4iXVZtmX_KeFeErmxqRohjedErSNFGvqdRnIfrqTsWdg/viewform?pli=1" target="_blank">Apply Now</a>
                    </li>
		            <li class="nav-item">
		                <form method="POST" action="logout.php">
		                    <button type="submit" class="btn btn-dark mx-3 my-md-0  dotted-border"
		                        name="Logout" style="margin-top: 2px; margin-left: 10px; width: 100px; height: 40px;">
		                        LogOut <i class="fas fa-sign-out-alt"></i></button>
		                </form>
		            </li>
		            <?php } ?>
                    <li>
                        <!--<a href="https://docs.google.com/forms/d/e/1FAIpQLSfknMUQsNWHckIDk06zBle1qHMY8Y4nVBLekWxg6EpdqVdu5Q/viewform?usp=sf_link"  style="color:#ffffff !important;" target="_blank">Apply Now</a>-->
                        <!-- <a href="over.html" target = "_blank">Apply Now</a> -->
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    <div class="coming-soon" style="align-items:center; text-align:center; justify-content:center;">
    <h1>Coming Soon !</h1>
    <p>We're working on the ML Booklet. Stay tuned for more updates !</p>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

  </div>





    <div id="preloader"></div>

<footer class="bg-light py-4 mt-5 w-90 flex-shrink-0 my-5 " 
    style="background: #eee !important; width: 90%; margin-top: 40px; margin: auto; position:fixed; bottom:0" id="temp" >
    <div class="container py-4" style="padding-bottom: 0px !important; max-width: 1400px; " data-aos="zoom-in">
        <div class="row gy-4 gx-5" style="margin-left: 52px;">
            <div class="col-lg-4 col-md-6" style="flex: 0 0  55%; max-width: 80%;">
                <br>
                <h5 class="mb-3">Contact us <i class="fa fa-phone"></i></h5>
                <ul class="list-unstyled text-muted">
                    <li class="small text-muted">
                        <strong style="color: #11163d; font-size: 1.25em">Pradyuman Agarwal
                        </strong>
                    </li>
                    <li class="small text-muted">
                        Manager, Analytics Club  
                    </li>
                    <li class="small text-muted">
                        Email:
                        <a style="font-weight: bold; color: #151582"
                            href="mailto:isaa.enpower.iitb@gmail.com">manager.analytics.iitb@gmail.com</a>
                    </li>
                    <li class="small text-muted">
                        Phone number:
                        <strong style="color: #11163d">8777015253</strong>
                    </li>
                </ul>
                <!-- <p class="small text-muted mb-0">&copy; Copyrights. All rights reserved. <a class="text-primary" href="#">Bootstrapious.com</a></p> -->
            </div>


            <div class="col-lg-5 col-md-6" style="float: right; flex:0 0 45%">
                <br>
                <h5 class="mb-3">WIDS 2023</h5>
                <p class="small text-muted">
                    Dive deep in the realm of Academic and Industry related research
                    projects
                </p>
                Created with &#10084;&#65039; by UGAC Web Team, 2023-2024
            </div>
        </div>
        <!--Copyright-->
        <div class="text-center my-md-0 my-1">
            &#169; 2023 Copyright
            <b class="font-weight-normal" style="color: #151582">UGAC, IIT Bombay</b>
        </div>
        <br>
    </div>
</footer>
    </body>

</html>