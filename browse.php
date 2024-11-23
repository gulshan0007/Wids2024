<?php require 'db_connect.php'; ?>
<?php session_start(); ?>


<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>WiDS | Projects</title>
      <meta content="" name="description">
      <meta content="" name="keywords">
          <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>




      <style type="text/css">
          .color-blue{
            color: #2c2c96  !important;
          }
          .btn-outline-primary,
          .btn-outline-primary:hover,
         .btn-outline-primary:focus,
         .btn-outline-primary:active
          {
                color: #151582 !important;
              border-color: #151582 !important;
          }
          .btn-outline-primary:hover,
         .btn-outline-primary:focus,
         .btn-outline-primary:active
        {
            color: #fff !important;
            background-color: #151582 !important ;
        }
       
        .nav{
            padding:25px;
        }
        .navbar-brand{
            font-family:"Kaushan Script","Helvetica Neue",Helvetica,Arial,cursive;
        }
        .navbar-nav{
            font-family: Montserrat,"Helvetica Neue",Helvetica,Arial,sans-serif;
        }
        .navbar-dark .navbar-toggler {
    border-color: #323b75;
    background-color: #323b75;
}

.navbar-dark .navbar-toggler .navbar-toggler-icon {
    color: #ffffff;
}
.dropdown:hover .dropdown-menu {
  display: block;
  opacity: 1;
  visibility: visible;
  transition: all 0.3s ease-in-out;
  transform: translate(0, 0) !important;
  top: 100% !important;
}
.dropdown-menu {
  display: none;
  opacity: 0;
  visibility: hidden;
  transition: all 0.01s ease-in-out;
  position: absolute;
  z-index: 1000;
  transform: translate(0, -10px);
  top: 120%;
}

@media (min-width: 1200px) {
#mynav{
    width: 1400px;
  }
}

/* CSS for mobile view */
@media (min-width: 320px) and (max-width: 767px) {
  .mobile-only {
    display: block;
  }
  
}

/* CSS for non-mobile view (optional) */
@media (min-width: 768px) {
  #mobile-only {
    display: none;
  }

}

/* Hide dropdown on screens smaller than or equal to 767px */
@media (max-width: 767px) {
  #blockformobile{
    display: none;
  }
}


    </style>
      <?php require 'head_links.php';?>
    </head>


    <body id="page-top" class="index">
    <!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark "  style="min-height: 100px; background-color: black;
opacity: 0.85; color:white">
  <!-- <a class="navbar-brand" href="index2.php" style="font-size:1.5em;">WiDS</a> -->
  <div class="container">
  <a class=" page-scroll" href="#page-top"><img src="img/ugac.png" style="width: 110px; height: 75px; padding-right: 25px;" alt=""></a>
                <a class=" page-scroll" href="#page-top"><img src="img/loooo.jpg" style="width: 87px; height: 75px;" alt=""></a>
    <!-- <a class=" page-scroll" href="#page-top"><img src="img/schoollogo.jpg" style="width: 87px; height: 75px;" alt=""></a> -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarNavDropdown" >
      <ul class="navbar-nav ml-auto" style="letter-spacing: 1px; color: white;">
        <li class="nav-item">
          <a class="nav-link" href="index.php#about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="browse.php">Projects</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://drive.google.com/file/d/1gf96XHPY2BFSUMLaVHO4q7GTmt1I8wF8/view?usp=drive_link">ML Booklet</a>
        </li>
        <li>
        <div class="dropdown" id="blockformobile" >
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Resources
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="text-align: center;" >
                                <a class="dropdown-item" href="https://fuschia-hardboard-d83.notion.site/Natural-Language-Processing-NLP-11cbdcdb181f80748413da9c2951ba0c" style="color: black;">Natural Language Processing (NLP)</a>
                                <br>
                                <a class="dropdown-item" href="https://viridian-submarine-d74.notion.site/Computer-Vision-CV-11c6d54b585f80d18c38fb80b28b01af" style="color: black;">Computer Vision (CV)</a>
                            </div>
                        </div>
                    </li>
                    <li class="mobile-only" id="mobile-only" >    
                                 <a class="page-scroll" href="https://fuschia-hardboard-d83.notion.site/Natural-Language-Processing-NLP-11cbdcdb181f80748413da9c2951ba0c">Natural Language Processing (NLP)</a>
                                 <a class="page-scroll" href="https://viridian-submarine-d74.notion.site/Computer-Vision-CV-11c6d54b585f80d18c38fb80b28b01af">Computer Vision (CV)</a>
                    </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php#faqs">FAQ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="team.php">Contact Us</a>
        </li>
        <?php if (!isset($_SESSION['ldap'])) { ?>
		            <li class="nav-item">
		                <a class="nav-link"
		                    href="https://sso.tech-iitb.org/project/7300a264-d142-49df-93f5-81494a6fdf62/ssocall/"
		                    target="_parent">Login via SSO</a>
		            </li>
		            <?php } else { ?>
                        <li class="nav-item">
                        <a class="nav-link"  href="https://docs.google.com/forms/d/e/1FAIpQLSeDU_ovmdwf4hRA68cMZaQGGpEGPIl9tFWDXGwSeUN7-kqKtQ/viewform" target="_blank">Apply Now</a>
                    </li>
		            <li class="nav-item">
		                <form method="POST" action="logout.php">
		                    <button type="submit" class="btn btn-dark mx-3 my-md-0  dotted-border"
		                        name="Logout" style="margin-top: 2px; margin-left: 10px; width: 100px; height: 40px;">
		                        LogOut <i class="fas fa-sign-out-alt"></i></button>
		                </form>
		            </li>
		            <?php } ?>
      </ul>
    </div>

  </div>
</nav>

    <div class="breadcrumbs">
      <div class="container">
        <h2 style="background-color:None">Projects</h2>
      </div>
    </div>
<?php

$categories = [
  "NLP",
  "Miscellaneous",
  "CV",
  "Quant",
  "RL"
];

// foreach ($categories as $category) {
//     echo "<div class='category-card' onclick='showProjects(\"$category\")'>";
//     echo "<h3>$category</h3>";
//     echo "</div>";
// }


    if(true)
    {
      $count = 0;
      // $num_of_projects = mysqli_num_rows($result);
        ?>
            <section id="courses" class="courses">
            <div class="container" data-aos="fade-up">

            <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
              <?php
              foreach ($categories as $category)
              {    
                // $project_details = mysqli_fetch_assoc($result);
                // $count += 1;
                $sql = "SELECT * FROM Projects WHERE Category = '$category'";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                $details_url= "./project_details.php?project_category=".$category."";
                echo '<div class="card bg-light  m-4" style="width: 20em;">
                        <img src="img/wids_projects/'.$row['image'].'" class="card-img-top" alt="..." style="width: 20rem; height: 14rem;">
                        <div class="card-body">
                          <h5 class="card-title" style="color:#22255A;">'.$category.'</h5>
                          <a href="'.$details_url.'" class="btn" style="background: #22255A; color:#fff">View More</a>
                        </div>
                      </div>';
              }
              ?>
            </div>

            </div>
            </section>
        <?php
        
    }
    else{
        echo "Unable to Connect";
    }
    
?>
    
 
    <!--button onclick="getCSS(document
        .getElementById('temp'))">
        Get CSS
    </button>
    <div id="resDiv"></div-->
      <div id="preloader"></div>

<footer class="bg-light py-4 mt-5 w-90 flex-shrink-0 my-5 " 
    style="background: #eee !important; width: 90%; margin-top: 40px; margin: auto; " id="temp" >
    <div class="container py-4" style="padding-bottom: 0px !important; max-width: 1400px; " data-aos="zoom-in">
        <div class="row gy-4 gx-5" style="margin-left: 52px;">
            <div class="col-lg-4 col-md-6" style="flex: 0 0  55%; max-width: 80%;">
                <br>
                <h5 class="mb-3">Contact us <i class="fa fa-phone"></i></h5>
                <ul class="list-unstyled text-muted">
                    <li class="small text-muted">
                        <strong style="color: #11163d; font-size: 1.25em">Aansh Samyani
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
                        <strong style="color: #11163d">7021068263</strong>
                    </li>
                </ul>
                <!-- <p class="small text-muted mb-0">&copy; Copyrights. All rights reserved. <a class="text-primary" href="#">Bootstrapious.com</a></p> -->
            </div>


            <div class="col-lg-5 col-md-6" style="float: right; flex:0 0 45%">
                <br>
                <h5 class="mb-3">WIDS 2024</h5>
                <p class="small text-muted">
                    Dive deep in the realm of Academic and Industry related research
                    projects
                </p>
                Created with &#10084;&#65039; by UGAC Web Team, 2024-2025
            </div>
        </div>
        <!--Copyright-->
        <div class="text-center my-md-0 my-1">
            &#169; 2024 Copyright
            <b class="font-weight-normal" style="color: #151582">UGAC, IIT Bombay</b>
        </div>
        <br>
    </div>
</footer>
    </body>

</html>