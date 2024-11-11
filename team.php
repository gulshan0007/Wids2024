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
    <title>Team | WIDS </title>
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
                        <a class="page-scroll" href="https://drive.google.com/file/d/1gf96XHPY2BFSUMLaVHO4q7GTmt1I8wF8/view?usp=drive_link">ML Booklet</a>
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
		                    href="https://gymkhana.iitb.ac.in/profiles/oauth/authorize/?client_id=RFS6RiMchDIhMN3CIskA5HtMA1FRJnrjqk79DVaK&amp;scope=basic ldap profile secondary_emails program phone&amp;response_type=code"
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
    

  
    <!-- <a href="index.php"class="btn btn-info" role="button">Back</a> -->
    <section id="team" class="bg-light-gray" style="background-color: white;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading" style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;">MEET OUR TEAM</h2>
                    <h3 class="section-subheading text-muted">Contact us for any queries or problems whatsoever</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="team2022/pradyuman.png" style="width:330px;max-height:330px;" alt="">
                        <h3 style="font-family: 'Questrial', sans-serif; font-weight:800">Pradyuman Agarwal

</h3>
                        <p class="text-muted" style="font-family: 'Questrial', sans-serif;">Manager, Analytics Club
                            <br><a href="mailto:manager.analytics.iitb@gmail.com" id="issaemail">manager.analytics.iitb@gmail.com
</a>
                            <br></p>
                            <p class="text-muted" style="font-family: 'Questrial', sans-serif;">Contact:<strong style="color:#11163d"> 8777015253

                        </p>
                        
                    </div>
                </div>
                <div class="col-sm-offset-4">
                </div>
            </div>
        </div>
    </section>
    
    <div class="container">
        <div class="row">
            <div class="col-sm-3 d-flex align-items-stretch my-3 mx-auto">
                                    <div class="course-content" style="width:253px;height:410px">               
                                        <img style="width:250px;max-height:250px;"  src="team2023/WhatsApp Image 2023-12-01 at 23.39.56_6e62a093.jpg" class="card-img-top img-fluid" alt="..."> 
                                        <br/> <br/>      
                                        <h4 style="font-family: 'Questrial', sans-serif; font-weight:800">Aansh Samyani
</h4>
                                        <p class="text-muted" style="font-family: 'Questrial', sans-serif;">Convener, Analytics Club
                                            <br><a href="mailto:manager.analytics.iitb@gmail.com" id="issaemail">analytics.convener@gmail.com
                                            </a>
                                                                        <br>
                                        </p>
                                        <p class="text-muted" style="font-family: 'Questrial', sans-serif;">Contact:<strong style="color:#11163d"> 7021068263 </p>
                                    </div>
            </div>
            <div class="col-sm-3 d-flex align-items-stretch my-3 mx-auto">
                                    <div class="course-content" style="width:253px;height:410px">               
                                        <img style="width:250px;max-height:250px;"  src="team2023/aditi.jpg" class="card-img-top img-fluid" alt="..."> 
                                        <br/> <br/>   
                                                <h4 style="font-family: 'Questrial', sans-serif; font-weight:800">Aditi Agrawal</h4>
                                                <p class="text-muted" style="font-family: 'Questrial', sans-serif;">Convener, Analytics Club
                                                    <br><a href="mailto:manager.analytics.iitb@gmail.com" id="issaemail">analytics.convener@gmail.com
                                                </p>
                                                <p class="text-muted" style="font-family: 'Questrial', sans-serif;">Contact:<strong style="color:#11163d"> 9977104908</p>
                                    </div>
            </div>
            <div class="col-sm-3 d-flex align-items-stretch my-3 mx-auto">
                                    <div class="course-content" style="width:253px;height:410px">               
                                        <img style="width:250px;max-height:250px;"  src="team2023/keshav.jpg" class="card-img-top img-fluid" alt="..."> 
                                        <br/> <br/>   
                                        <h4 style="font-family: 'Questrial', sans-serif; font-weight:800">Keshav Maheshwari</h4>
                                        <p class="text-muted" style="font-family: 'Questrial', sans-serif;">Convener, Analytics Club
                                            <br><a href="mailto:manager.analytics.iitb@gmail.com" id="issaemail">analytics.convener@gmail.com
                                        </p>
                                        <p class="text-muted" style="font-family: 'Questrial', sans-serif;">Contact:<strong style="color:#11163d"> 6267123137 </p>  
                                    </div>
            </div>
            <div class="col-sm-3 d-flex align-items-stretch my-3 mx-auto">
                                    <div class="course-content" style="width:253px;height:410px">               
                                        <img style="width:250px;max-height:250px;"  src="team2023/yash.jpg" class="card-img-top img-fluid" alt="..."> 
                                        <br/> <br/>   
                                        <h4 style="font-family: 'Questrial', sans-serif; font-weight:800">Yash Sah</h4>
                                                <p class="text-muted" style="font-family: 'Questrial', sans-serif;">Convener, Analytics Club
                                                    <br><a href="mailto:manager.analytics.iitb@gmail.com" id="issaemail">analytics.convener@gmail.com
                                                </p>
                                                <p class="text-muted" style="font-family: 'Questrial', sans-serif;">Contact:<strong style="color:#11163d"> 7977312700 </p>
                                    </div>
            </div>
            
            

            
        </div>
    </div>
    
    <div class="container">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    
                    
                    <br>
                    <h2 class="section-heading" style="font-family: 'Anton', sans-serif; font-size: 40px;color: #323b75;">Web Team</h2>
                    <br>
                    <br>
                </div>
                <div class="col-sm-6 d-flex align-items-stretch my-3 mx-auto">
                                        <div class="course-content" style="width:253px;height:410px">               
                                            <img data-aos="zoom-in" style="width:250px;max-height:250px;"  src="team2023/darsh.jpeg" class="card-img-top img-fluid" alt="..."> 
                                            <br/> <br/>      
                                            <h4 class="text-center" style="font-family: 'Questrial', sans-serif; font-weight:800">Darshan Bitla</h4>
                                            <p class="text-muted text-center" style="font-family: 'Questrial', sans-serif;">Web Nominee</p>
                                            <p class="text-muted text-center" style="font-family: 'Questrial', sans-serif;">Contact:<strong style="color:#11163d"> 98204 89982 </p>
                                        </div>
                </div>
                <div class="col-sm-6 d-flex align-items-stretch my-3 mx-auto">
                                        <div class="course-content" style="width:253px;height:410px">               
                                            <img data-aos="zoom-in" style="width:250px;max-height:250px;"  src="team2023/rupak_webcon.jpg" class="card-img-top img-fluid" alt="..."> 
                                            <br/> <br/>   
                                            <h4 class="text-center" style="font-family: 'Questrial', sans-serif; font-weight:800">Challa Rupak Vardhan</h4>
                                            <p class="text-muted text-center" style="font-family: 'Questrial', sans-serif;">Web Nominee</p>
                                            <p class="text-muted text-center" style="font-family: 'Questrial', sans-serif;">Contact:<strong style="color:#11163d">  86395 06480 </p>
                                        </div>
                </div>
            </div>
        </div>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-3 d-flex align-items-stretch my-3 mx-auto">
                                                                    <div class="course-content" style="width:253px;height:410px">               
                                                                        <img data-aos="fade-in" style="width:250px;max-height:250px;"  src="team2023/gulshan.jpg" class="card-img-top img-fluid" alt="..."> 
                                                                        <br/> <br/>      
                                                                        <h4 class="text-center" style="font-family: 'Questrial', sans-serif; font-weight:800">Gulshan Kumar</h4>
                                                                                <p class="text-muted text-center" style="font-family: 'Questrial', sans-serif;">Web Convener</p>
                                                                                <p class="text-muted text-center" style="font-family: 'Questrial', sans-serif;">Contact:<strong style="color:#11163d"> 62027 12403 </p>
                                                                    </div>
                                            </div>
                                            <div class="col-sm-3 d-flex align-items-stretch my-3 mx-auto">
                                                                    <div class="course-content" style="width:253px;height:410px">               
                                                                        <img data-aos="fade-in" style="width:250px;max-height:250px;"  src="team2023/aman.jpg" class="card-img-top img-fluid" alt="..."> 
                                                                        <br/> <br/>   
                                                                        <h4 class="text-center" style="font-family: 'Questrial', sans-serif; font-weight:800">Aman Singh</h4>
                                                                        <p class="text-muted text-center" style="font-family: 'Questrial', sans-serif;">Web Convener</p>
                                                                        <p class="text-muted text-center" style="font-family: 'Questrial', sans-serif;">Contact:<strong style="color:#11163d"> 85818 79500 </p>
                                                                    </div>
                                            </div>
                                            <div class="col-sm-3 d-flex align-items-stretch my-3 mx-auto">
                                                                    <div class="course-content" style="width:253px;height:410px">               
                                                                        <img data-aos="fade-in" style="width:250px;max-height:250px;"  src="team2023/lina.jpg" class="card-img-top img-fluid" alt="..."> 
                                                                        <br/> <br/>   
                                                                        <h4 class="text-center" style="font-family: 'Questrial', sans-serif; font-weight:800">Leena Jagwani</h4>
                                                                                <p class="text-muted text-center" style="font-family: 'Questrial', sans-serif;">Web Convener</p>
                                                                                <p class="text-muted text-center" style="font-family: 'Questrial', sans-serif;">Contact:<strong style="color:#11163d"> 93993 59503 </p>
                                                                    </div>
                                            </div>
                                            <div class="col-sm-3 d-flex align-items-stretch my-3 mx-auto">
                                                                    <div class="course-content" style="width:253px;height:410px">               
                                                                        <img data-aos="fade-in" style="width:250px;max-height:250px;"  src="team2023/kavin.jpg" class="card-img-top img-fluid" alt="..."> 
                                                                        <br/> <br/>   
                                                                        <h4 class="text-center" class="text-center" style="font-family: 'Questrial', sans-serif; font-weight:800">Kavin Arvind</h4>
                                                                                <p class="text-muted text-center" style="font-family: 'Questrial', sans-serif;">Web Convener</p>
                                                                                <p class="text-muted text-center" style="font-family: 'Questrial', sans-serif;">Contact:<strong style="color:#11163d"> 94990 45990 </p>
                                                                    </div>
                                            </div>
                                            
                                            
                                
                                            
                                        </div>
                                    </div>
                                
                                    
            </div>
           
            

            
        </div>
    </div>

           

            
        </div>
    </div>


                <?php require 'footer.php'; ?>
        
    </div>
   
    <!--script src="main.js"></script-->
    <!--script src="js/scroll_nav.js"></script-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <!--script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js"></script-->
</body>

</html>