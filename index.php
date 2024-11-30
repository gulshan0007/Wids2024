<?php
session_start();

// Check if the user is logged in using unique session keys
if (isset($_SESSION['index_name']) && isset($_SESSION['index_roll'])) {
    $logged_in = true;
    $USER_NAME = $_SESSION['index_name'];
    $USER_ROLL = $_SESSION['index_roll'];
} else {
    $logged_in = false;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta property="og:image" content="https://gymkhana.iitb.ac.in/~ugacademics/surp/img/back1.jpg" />
    <meta charset="utf-8">
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <title>WIDS | IIT Bombay</title>
    <link rel="icon" href="assets/img/logo2.ico" type="image/x-icon" />
    <link rel="stylesheet" href="https://unpkg.codm/aos@next/dist/aos.css" />

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/agency.css" rel="stylesheet">
    <link href="css/table.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="style.css"> -->


    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet'
        type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Borel&family=Cabin+Sketch:wght@700&family=Rubik+Moonrocks&family=Rye&display=swap"
        rel="stylesheet">
    <style>
    .main-timeline {
        position: relative;
    }

    .main-timeline:before,
    .main-timeline:after {
        content: "";
        display: block;
        width: 100%;
        clear: both;
    }

    .main-timeline:before {
        content: "";
        width: 3px;
        height: 100%;
        background: #bababa;
        position: absolute;
        top: 0;
        left: 50%;
    }

    .main-timeline .timeline {
        width: 50%;
        float: left;
        position: relative;
        z-index: 1;
    }

    .main-timeline .timeline:before,
    .main-timeline .timeline:after {
        content: "";
        display: block;
        width: 100%;
        clear: both;
    }

    .main-timeline .timeline:first-child:before,
    .main-timeline .timeline:last-child:before {
        content: "";
        width: 0px;
        height: 0px;
        border-radius: 50%;
        background: #fff;
        border: 4px solid rgba(211, 207, 205, 1);
        position: absolute;
        top: 0;
        right: -14px;
        z-index: 1;
    }

    .main-timeline .timeline:last-child:before {
        top: auto;
        bottom: 0;
    }

    .main-timeline .timeline:last-child:nth-child(even):before {
        right: auto;
        left: -12px;
        bottom: -2px;
    }

    .main-timeline .timeline-content {
        text-align: center;
        margin-top: 8px;
        position: relative;
        transition: all 0.3s ease 0s;
    }

    .main-timeline .timeline-content:before {
        content: "";
        width: 100%;
        height: 5px;
        background: rgba(211, 207, 205, 1);
        position: absolute;
        top: 88px;
        left: 0;
        z-index: -1;
    }

    .main-timeline .circle {
        width: 180px;
        height: 180px;
        border-radius: 50%;
        background: #fff;
        border: 8px solid rgba(211, 207, 205, 1);
        float: left;
        margin-right: 25px;
        position: relative;
    }

    .main-timeline .circle:before {
        content: "";
        width: 26px;
        height: 30px;
        background: rgba(211, 207, 205, 1);
        margin: auto;
        position: absolute;
        top: 0;
        right: -33px;
        bottom: 0;
        z-index: -1;
        box-shadow: inset 7px 0 9px -7px #444;
    }

    .main-timeline .circle span {
        display: block;
        width: 100%;
        height: 100%;
        border-radius: 50%;
        line-height: 268px;
        font-size: 80px;
        color: #454344;
    }

    .main-timeline .circle span:before,
    .main-timeline .circle span:after {
        content: "";
        width: 28px;
        height: 50px;

        border-radius: 0 0 0 21px;
        margin: auto;
        position: absolute;
        top: -54px;
        right: -33px;
        bottom: 0;
        z-index: -1;
    }

    .main-timeline .circle span:after {
        border-radius: 21px 0 0 0;
        top: 0;
        bottom: -56px;
    }

    .main-timeline .circle .img {
        vertical-align: initial;
        border-radius: 50%;
    }

    .main-timeline .content {
        display: table;
        padding-right: 40px;
        position: relative;
    }

    .main-timeline .year {
        display: block;
        padding: 10px;
        margin: 10px 0 50px 0;
        background: rgba(211, 207, 205, 1);
        border-radius: 7px;
        font-size: 25px;
        color: #fff;
    }

    .main-timeline .title {
        font-size: 25px;
        font-weight: bold;
        color: rgba(211, 207, 205, 1);
        margin-top: 0;
    }

    .main-timeline .description {
        font-size: 14px;
        color: #333;
        text-align: justify;
    }

    .main-timeline .icon {
        width: 25px;
        height: 25px;
        border-radius: 50%;
        background: #fff;
        border: 4px solid rgba(211, 207, 205, 1);
        position: absolute;
        top: 78px;
        right: -14px;
    }

    .main-timeline .icon:before {
        content: "";
        width: 15px;
        height: 25px;
        background: rgba(211, 207, 205, 1);
        margin: auto;
        position: absolute;
        top: -1px;
        left: -15px;
        bottom: 0;
        z-index: -1;
    }

    .main-timeline .icon span:before,
    .main-timeline .icon span:after {
        content: "";
        width: 21px;
        height: 25px;
        background: #fff;
        border-radius: 0 0 21px 0;
        margin: auto;
        position: absolute;
        top: -30px;
        left: -15px;
        bottom: 0;
        z-index: -1;
    }

    .main-timeline .icon span:after {
        border-radius: 0 21px 0 0;
        top: 0;
        left: -15px;
        bottom: -30px;
    }

    .main-timeline .timeline:nth-child(2n) .timeline-content,
    .main-timeline .timeline:nth-child(2n) .circle {
        float: right;
    }

    .main-timeline .timeline:nth-child(2n) .circle {
        margin: 0 0 0 25px;
    }

    .main-timeline .timeline:nth-child(2n) .circle:before {
        right: auto;
        left: -33px;
        box-shadow: -7px 0 9px -7px #444 inset;
    }

    .main-timeline .timeline:nth-child(2n) .circle span:before,
    .main-timeline .timeline:nth-child(2n) .circle span:after {
        right: auto;
        left: -33px;
        border-radius: 0 0 21px 0;
    }

    .main-timeline .timeline:nth-child(2n) .circle span:after {
        border-radius: 0 21px 0 0;
    }

    .main-timeline .timeline:nth-child(2n) .content {
        padding: 0 0 0 40px;
        margin-left: 2px;
    }

    .main-timeline .timeline:nth-child(2n) .icon {
        right: auto;
        left: -14px;
    }

    .main-timeline .timeline:nth-child(2n) .icon:before,
    .main-timeline .timeline:nth-child(2n) .icon span:before,
    .main-timeline .timeline:nth-child(2n) .icon span:after {
        left: auto;
        right: -15px;
    }

    .main-timeline .timeline:nth-child(2n) .icon span:before {
        border-radius: 0 0 0 21px;
    }

    .main-timeline .timeline:nth-child(2n) .icon span:after {
        border-radius: 21px 0 0 0;
    }

    .main-timeline .timeline:nth-child(2) {
        margin-top: 180px;
    }

    .main-timeline .timeline:nth-child(odd) {
        margin: -175px 0 0 0;
    }

    .main-timeline .timeline:nth-child(even) {
        margin-bottom: 180px;
    }

    .main-timeline .timeline:first-child,
    .main-timeline .timeline:last-child:nth-child(even) {
        margin: 0;
    }

    @media only screen and (max-width: 990px) {
        .main-timeline:before {
            left: 100%;
        }

        .main-timeline .timeline {
            width: 100%;
            float: none;
            margin-bottom: 20px !important;
        }

        .main-timeline .timeline:first-child:before,
        .main-timeline .timeline:last-child:before {
            left: auto !important;
            right: -13px !important;
        }

        .main-timeline .timeline:nth-child(2n) .circle {
            float: left;
            margin: 0 25px 0 0;
        }

        .main-timeline .timeline:nth-child(2n) .circle:before {
            right: -33px;
            left: auto;
            box-shadow: 7px 0 9px -7px #444 inset;
        }

        .main-timeline .timeline:nth-child(2n) .circle span:before,
        .main-timeline .timeline:nth-child(2n) .circle span:after {
            right: -33px;
            left: auto;
            border-radius: 0 0 0 21px;
        }

        .main-timeline .timeline:nth-child(2n) .circle span:after {
            border-radius: 21px 0 0 0;
        }

        .main-timeline .timeline:nth-child(2n) .content {
            padding: 0 40px 0 0;
            margin-left: 0;
        }

        .main-timeline .timeline:nth-child(2n) .icon {
            right: -14px;
            left: auto;
        }

        .main-timeline .timeline:nth-child(2n) .icon:before,
        .main-timeline .timeline:nth-child(2n) .icon span:before,
        .main-timeline .timeline:nth-child(2n) .icon span:after {
            left: -15px;
            right: auto;
        }

        .main-timeline .timeline:nth-child(2n) .icon span:before {
            border-radius: 0 0 21px 0;
        }

        .main-timeline .timeline:nth-child(2n) .icon span:after {
            border-radius: 0 21px 0 0;
        }

        .main-timeline .timeline:nth-child(2),
        .main-timeline .timeline:nth-child(odd),
        .main-timeline .timeline:nth-child(even) {
            margin: 0;
        }
    }

    @media only screen and (max-width: 480px) {
        .main-timeline:before {
            left: 0;
        }

        .main-timeline .timeline:first-child:before,
        .main-timeline .timeline:last-child:before {
            left: -12px !important;
            right: auto !important;
        }

        .main-timeline .circle,
        .main-timeline .timeline:nth-child(2n) .circle {
            width: 130px;
            height: 130px;
            float: none;
            margin: 0 auto;
        }

        .main-timeline .timeline-content:before {
            width: 99.5%;
            top: 68px;
            left: 0.5%;
        }

        .main-timeline .circle span {
            line-height: 115px;
            font-size: 60px;
        }

        .main-timeline .circle:before,
        .main-timeline .circle span:before,
        .main-timeline .circle span:after,
        .main-timeline .icon {
            display: none;
        }

        .main-timeline .content,
        .main-timeline .timeline:nth-child(2n) .content {
            padding: 0 10px;
        }

        .main-timeline .year {
            margin-bottom: 15px;
        }

        .main-timeline .description {
            text-align: center;
        }

        .main-timeline .timeline .img {
            width: 114px;
            height: 114px;
        }
    }


    .typewriter {
        overflow: hidden;
        border-right: .15em solid orange;
        white-space: nowrap;
        margin: 0 auto;
        letter-spacing: .15em;
        animation:
            typing 7.5s steps(40, end),
            blink-caret .75s step-end infinite;
    }

    @keyframes typing {
        from {
            width: 0;
        }

        to {
            width: 100%;
        }
    }

    @keyframes blink-caret {

        from,
        to {
            border-color: transparent;
        }

        50% {
            border-color: rgb(255, 89, 0);
        }
    }

    /* Responsive Styles */
    @media (max-width: 768px) {
        .section-heading {
            font-size: 40px;
            /* Adjust the font size for smaller screens */
        }

        .typewriter {
            font-size: 24px;
            /* Adjust the font size for smaller screens */
        }
    }

    @media (max-width: 440px) {
        .section-heading {
            font-size: 10px;
            /* Adjust the font size for smaller screens */
        }

        .typewriter {
            font-size: 18px;
            /* Adjust the font size for smaller screens */
        }
    }





    /* CSS style for close button */
    .btn_custom {
        box-sizing: border-box;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        background-color: transparent;
        border: 2px solid #e74c3c;
        border-radius: 0.6em;
        color: #e74c3c;
        cursor: pointer;
        display: flex;
        align-self: center;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1;
        margin: 20px;
        padding: 1.2em 2.8em;
        text-decoration: none;
        text-align: center;
        text-transform: uppercase;
        font-family: "Montserrat", sans-serif;
        font-weight: 700;
    }

    .btn_custom:hover,
    .btn:focus {
        color: #fff;
        outline: 0;
    }

    .first {
        transition: box-shadow 300ms ease-in-out, color 300ms ease-in-out;
    }

    .first:hover {
        box-shadow: 0 0 40px 40px #e74c3c inset;
    }

    /* Adding fade animation in announcement modal */
    .modal {
        opacity: 0;
        animation: fadeIn 0.5s ease-in both;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translate3d(0, -20%, 0);
        }

        to {
            opacity: 1;
            transform: translate3d(0, 0, 0);
        }
    }

    body,
    html {
        margin: 0 !important;
        padding: 0 !important;
        overflow-x: hidden;
    }

    section {
        padding: 50px 25px;
    }

    header {
        height: 100vh !important;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    @media (min-width:961px) {
        header .intro-text {
            padding-top: 25 em;
            padding-bottom: 50px;
        }
    }

    h1 {
        text-align: center;
        color: white;
        font-size: 25px;
    }

    .faq-cell {
        background-color: #eee;
        padding: 20px;
        width: 60%;
        margin: auto;
        margin-bottom: 12px;
        font-size: 18px;
        border-radius: 10px;
    }

    .answer {
        display: none;
    }

    .faq-cell:hover {
        background-color: #ddd;
    }

    .answer p {
        font-size: 18px;
    }

    .faq-cell {
        position: relative;
    }

    .ext {
        position: absolute;
        right: 0;
        padding-right: 25px;
        cursor: pointer;
    }

    .navbar-default {
        background-color: black;
        opacity: 0.85;
    }

    .navbar-default .navbar-nav {
        color: black;
    }

    .counter {
        font-size: 4em;
        text-align: center;
        font-family: Arial, sans-serif;
        opacity: 0;
        /* Initially hide the counter */
        transition: opacity 1s ease;
        /* Add a smooth transition */
    }

    .show {
        opacity: 1;
        /* Show the counter when this class is applied */
    }

    /* Custom CSS to make dropdown hoverable */
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
        #mynav {
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
        #blockformobile {
            display: none;
        }
    }
    </style>
</head>


<!-- Modal -->
<!--<div class="modal" tabindex="-1" role="dialog" id="myModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <div class="modal-title">
            <h5>Announcement! <img src="assets/img/logo/loudspeaker-icon.svg" style="float:right;height:5%;width:5%;"></h5>    
        </div>-->

<!--button type="button" class="close" data-dismiss="modal" aria-label="Close"-->
<!--span aria-hidden="true">&times;</span-->
<!--/button-->
<!--</div>
      <div class="modal-body">
        <ul>
            <li>New projects added in the PHYSICS department!</li>
        </ul>
      </div>
      <div class="modal-footer">-->
<!--button type="button" class="btn btn-primary">Save changes</button-->
<!--button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button-->
<!--<p>Stay tuned for more!</p>
        <button class="btn_custom first" data-dismiss="modal" style="float:right"> Close </button>
      </div>
    </div>
  </div>
</div>-->

<!-- Navigation -->

<body id="page-top" class="index">
    
    <!-- Modal -->
    <div class="modal" tabindex="-1" role="dialog" id="myModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title">
                        <h5>Important Announcement! <img src="assets/img/logo/loudspeaker-icon.svg"
                                style="float:right;height:5%;width:5%;"></h5>
                    </div>

                    <!--button type="button" class="close" data-dismiss="modal" aria-label="Close"-->
                    <!--span aria-hidden="true">&times;</span-->
                    <!--/button-->
                </div>
                <div class="modal-body">
                    “Mentee Registration is active till 2nd December”
                </div>
                <div class="modal-footer">
                    <!--button type="button" class="btn btn-primary">Save changes</button-->
                    <!--button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button-->
                    <p>Stay tuned for more!</p>
                    <button class="btn_custom first" data-dismiss="modal" style="float:right"> Close </button>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-default navbar-fixed-top" style="min-height: 100px;">
        <div class="container " id="mynav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class=" page-scroll" href="#page-top"><img src="img/ugac.png"
                        style="width: 110px; height: 75px; padding-right: 25px;" alt=""></a>
                <a class=" page-scroll" href="#page-top"><img src="img/loooo.jpg" style="width: 87px; height: 75px;"
                        alt=""></a>

                <!-- <a class=" page-scroll" href="#page-top"><img src="img/schoollogo.jpg" style="width: 87px; height: 75px;" alt=""></a> -->
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right " style="margin-top: 20px;">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    
                    <li>
                        <a class="page-scroll"
                            href="https://drive.google.com/file/d/1gf96XHPY2BFSUMLaVHO4q7GTmt1I8wF8/view?usp=drive_link">ML
                            Booklet</a>
                    </li>
                    <li>
                        <div class="dropdown" id="blockformobile" style="margin-top: 10px;">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Resources
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="text-align: center;">
                                <a class="dropdown-item"
                                    href="https://fuschia-hardboard-d83.notion.site/Natural-Language-Processing-NLP-11cbdcdb181f80748413da9c2951ba0c"
                                    style="color: black;">Natural Language Processing (NLP)</a>
                                <br>
                                <a class="dropdown-item"
                                    href="https://viridian-submarine-d74.notion.site/Computer-Vision-CV-11c6d54b585f80d18c38fb80b28b01af"
                                    style="color: black;">Computer Vision (CV)</a>
                            </div>
                        </div>
                    </li>
                    <li class="mobile-only" id="mobile-only">
                        <a class="page-scroll"
                            href="https://fuschia-hardboard-d83.notion.site/Natural-Language-Processing-NLP-11cbdcdb181f80748413da9c2951ba0c">Natural
                            Language Processing (NLP)</a>
                        <a class="page-scroll"
                            href="https://viridian-submarine-d74.notion.site/Computer-Vision-CV-11c6d54b585f80d18c38fb80b28b01af">Computer
                            Vision (CV)</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#faqs">FAQ</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="team.php">Contact Us</a>
                    </li>
                    <li>

        <div class="d-flex align-items-center">
            <a href="https://docs.google.com/forms/d/e/1FAIpQLSeDU_ovmdwf4hRA68cMZaQGGpEGPIl9tFWDXGwSeUN7-kqKtQ/viewform" 
               class="page-scroll btn btn-link"
               target="_blank"
               style="padding: 10px 15px; text-decoration: none;">Apply Now</a>
            <li>
                        <a class="page-scroll" href="browse.php">Projects</a>
                    </li>
            
           
        </div>
    
    </li>
                </ul>
            </div>
        </div>


    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    
                        <h3 class="section-heading" 
                            style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;">
                            Welcome to
                        </h3> 
                        
                    
                    <h1 class="section-heading" 
                        style="font-family: 'Cabin Sketch', sans-serif; font-size: 70px;" 
                        id="dynamicText">
                        
                    </h1>
                </div>
            </div>
        </div>
    </header>


    <section id="portfolio" class="bg-light-gray" style="background-color: white;">
        <div class="container" data-aos="zoom-in">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading" style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;">
                        TOTAL PROJECTS</h2>
                    <h3 class="section-subheading text-muted" style="font-family: 'Questrial', sans-serif;">Projects
                        from different fields</h3>
                </div>
            </div>

            <!--<h2 class="section-heading">Coming Soon!</h2>-->
            <div class="counter" id="projectCounter">0</div>


        </div>

        <!-- About Section -->
        <section id="about" style="background-color:#fff;">
            <div class="container" data-aos="slide-up">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading"
                            style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;">WHAT IS WiDS ?</h2>
                        <h3 class="section-subheading text-muted"></h3>
                    </div>
                </div>
                <div class="row">
                    <p style="font-size: 20px;font-family: 'Questrial', sans-serif;" class="text-muted">
                        Winter in Data Science is your ultimate destination for comprehensive learning, exploration, and
                        hands-on application in the realm of AI and ML-driven Data Analytics. Immerse yourself in the ML
                        world through an extensive two-week boot camp and a user-friendly ML booklet that covers
                        everything from Python basics to a sufficient grasp of Deep Learning. Following this boot camp,
                        you can delve into a multitude of PROJECTS offered by the Analytics Club.
                        It is a hands-on learning opportunity to learn ML and apply it through various projects offered.

                    </p>
                </div>
            </div>
        </section>
        <section>


            <h2 style="text-align: center;">WiDS 2024 Selection Procedure </h2>
            <br>
            <div class="container py-5">
                <div class="row">
                    <div class="col-md-12">
                        <div class="main-timeline">
                            <div class="timeline" data-aos="slide-up">
                                <div class="timeline-content">
                                    <div class="circle"><span class="homebox">
                                            <img src="img/wids_projects/stage_1.jpeg" style="width:100%; height:100%"
                                                class="img">
                                        </span></div>
                                    <div class="content">
                                        <span class="year">Stage 1</span>
                                        <br>
                                        <p class="description">
                                            Application for projects. Please fill in your general motivation to apply
                                            and your previous work experience in the application form.
                                            <br>
                                            <b>Deadline: 11.59 PM on Saturday, 30th November 2024.</b>
                                        </p>

                                    </div>
                                </div>
                            </div>
                            <div class="timeline" data-aos="slide-up">
                                <div class="timeline-content">
                                    <div class="circle"><span class="homebox"><img src="img/wids_projects/stage_2.jpg"
                                                style="width:100%; height:100%" class="img" /></span></div>
                                    <div class="content">
                                        <span class="year">Stage 2</span>
                                        <br>
                                        <p class="description">
                                            Assignment and SOP shortlisting by WiDS team. This will help the mentors of
                                            WiDS gauge whether a student is really driven and will see the project
                                            through. Only one project will be allocated per student.
                                            <br>
                                            <b>Timeline: 1st December ‘24 to 6th December ‘24
                                            </b>
                                        </p>

                                    </div>
                                </div>
                            </div>
                            <div class="timeline" data-aos="slide-up">
                                <div class="timeline-content">
                                    <div class="circle"><span class="homebox"><img src="img/wids_projects/stage_3.jpg"
                                                style="width:100%; height:100%" class="img"></span></div>
                                    <div class="content">
                                        <span class="year">Stage 3</span>
                                        <br>
                                        <p class="description">
                                            Mentors will guide the mentees on material to refer and a tentative action
                                            plan. Mentor feedback forms will be released towards the end of December.
                                            <br>
                                            <b>Project Timeline: 1st Week of December ‘24- 1st Week of January ‘25</b>
                                        </p>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <br>
            <br>
            <h3 style="text-align: center;">All selections will be declared by 6th December 2024 and the project work
                will begin immediately.
                All dates mentioned are tentative and may differ from project to project.</h3>


        </section>
        <!-- About Section -->

        <section id="about" style="background-color:#fff;">
            <div class="container" data-aos="slide-up">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading"
                            style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;">WHY WiDS ?</h2>
                        <h3 class="section-subheading text-muted"></h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-64">
                        <ul class="timeline">
                            <li class="timeline-inverted" data-aos="slide-left">
                                <div class="timeline-image">
                                    <img class="img-circle img-responsive" src="img/about/expolre doamins new-01.jpg"
                                        alt="">
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <!-- <h4>March 2011</h4> -->
                                        <h4 class="subheading"
                                            style="font-family: 'Questrial', sans-serif;font-size:25px;">Hands-on
                                            Learning</h4>
                                    </div>
                                    <div class="timeline-body">
                                        <p class="text-muted"
                                            style="font-family: 'Questrial', sans-serif;font-size:18px;">You can gain
                                            practical experience by working on your choice of projects.</p>
                                    </div>
                                </div>
                            </li>

                            <li data-aos="slide-right">
                                <div class="timeline-image">
                                    <img class="img-circle img-responsive" src="img/about/unnamed1.jpg" alt="">
                                </div>
                                <div class="timeline-panel">
                                    <br>
                                    <div class="timeline-heading">
                                        <!-- <h4>December 2012</h4> -->
                                        <h4 class="subheading"
                                            style="font-family: 'Questrial', sans-serif;font-size:25px;">Make use of
                                            free time</h4>
                                    </div>
                                    <div class="timeline-body">
                                        <p class="text-muted"
                                            style="font-family: 'Questrial', sans-serif;font-size:18px;">Utilize your
                                            winter season to delve deeply into the Data Science topic of your choice.
                                        </p>
                                    </div>
                                </div>
                            </li>

                            <li class="timeline-inverted" data-aos="slide-left">
                                <div class="timeline-image">
                                    <img class="img-circle img-responsive" src="img/about/research under prof-01.jpg"
                                        alt="">
                                </div>
                                <div class="timeline-panel">
                                    <br>
                                    <div class="timeline-heading">
                                        <!-- <h4>July 2014</h4> -->
                                        <h4 class="subheading"
                                            style="font-family: 'Questrial', sans-serif;font-size:25px;">Develop
                                            connections</h4>
                                    </div>
                                    <div class="timeline-body">
                                        <p class="text-muted"
                                            style="font-family: 'Questrial', sans-serif;font-size:18px;">Find a
                                            community of similar minded people and network with people having a passion
                                            for Data Science..</p>
                                    </div>
                                </div>
                            </li>

                            <li class="timeline-image" data-aos="slide-right">
                                <div class="timeline-image">
                                    <img class="img-circle img-responsive" src="img/about/certinew-01u.jpg" alt="">
                                </div>
                                <div class="timeline-panel">
                                    <br>
                                    <div class="timeline-heading">
                                        <!-- <h4>July 2014</h4> -->
                                        <h4 class="subheading"
                                            style="font-family: 'Questrial', sans-serif;font-size:25px;">Immersive
                                            bootcamp and Comprehensive ML booklet</h4>
                                    </div>
                                    <div class="timeline-body">
                                        <p class="text-muted"
                                            style="font-family: 'Questrial', sans-serif;font-size:18px;">The two-week
                                            boot camp covers Python basics and Deep Learning, providing a strong
                                            foundation.</p>
                                    </div>
                                </div>
                            </li>

                            <li class="timeline-inverted" data-aos="slide-left">
                                <div class="timeline-image">
                                    <img class="img-circle img-responsive" src="img/about/research new-01.jpg" alt="">
                                </div>
                                <div class="timeline-panel">
                                    <br>
                                    <div class="timeline-heading">
                                        <!-- <h4>July 2014</h4> -->
                                        <h4 class="subheading"
                                            style="font-family: 'Questrial', sans-serif;font-size:25px;">
                                            Get certified
                                        </h4>
                                    </div>
                                    <div class="timeline-body">
                                        <p class="text-muted"
                                            style="font-family: 'Questrial', sans-serif;font-size:18px;"> Receive a
                                            certificate recognizing your active participation and achievements in the
                                            program</p>
                                    </div>
                                </div>
                            </li>

                            <li class="timeline-image" data-aos="slide-right">
                                <div class="timeline-image">
                                    <img class="img-circle img-responsive" src="img/about/certinew-01u.jpg" alt="">
                                </div>
                                <div class="timeline-panel">
                                    <br>
                                    <div class="timeline-heading">
                                        <!-- <h4>July 2014</h4> -->
                                        <h4 class="subheading"
                                            style="font-family: 'Questrial', sans-serif;font-size:25px;">
                                            Explore Interdisciplinary fields
                                        </h4>
                                    </div>
                                    <div class="timeline-body">
                                        <p class="text-muted"
                                            style="font-family: 'Questrial', sans-serif;font-size:18px;">We have
                                            projects that have applications in finance, gaming, quantum ML and may more!
                                        </p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>


        <!-- Portfolio Grid Section -->
        <section id="portfolio" class="bg-light-gray" style="background-color: white;">
            <div class="container" data-aos="zoom-in">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading"
                            style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;">PROJECTS</h2>
                        <h3 class="section-subheading text-muted" style="font-family: 'Questrial', sans-serif;">Projects
                            from different departments</h3>
                    </div>
                </div>
                <div class="row" style="text-align:center;">
                    <!--<h2 class="section-heading">Coming Soon!</h2>-->
                    <div class="row text-center">
                        <a align="center" href="browse.php" class="page-scroll btn btn-xl"
                            style="background-color:#323B75;color:white; border-color:white;">
                            All Projects
                        </a>

                    </div>

                </div>

            </div>
            <!--<div class="col-md-2 col-sm-6 portfolio-item">
                    <a href="#portfolioModal8" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/default.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>TreeLabs</h4>
                        
                    </div>
                </div>-->


        </section>
        <section id="faqs" style="background-color: white;">

            <div class="container">
                <h1 style="
            font-family: 'Anton', sans-serif;
            color: #323b75;
            margin-bottom: 30px;
          " class="text-center" data-aos="zoom-in">
                    FREQUENTLY ASKED QUESTIONS
                </h1>
                <div class="faq-cell" data-aos="fade-in">
                    <div class="question text-center">
                        <b>
                            How many projects can I apply for? Will I be able to update my choices after choosing the
                            projects once?
                        </b>
                        <span class="ext">+</span>
                    </div>
                    <div class="answer">
                        <hr />
                        <p>
                            You can specify your project preferences, and based on your choices, you will be assigned
                            one project. Update your choices by the following steps:


                        </p>
                        <ul>
                            <li>
                                Go to the WiDS Portal and click on Login via SSO and then after logging in, click on the
                                APPLY NOW tab in the top right corner.

                            </li>
                            <li>
                                If you have filled the form once, you will get the option to edit your response.
                            </li>
                            <li>
                                You can now update all your choices and submit new SOPs.

                            </li>

                        </ul>
                    </div>
                </div>

                <div class="faq-cell" data-aos="fade-in">
                    <div class="question text-center">
                        <b>
                            What should I write in an SOP?
                        </b>
                        <span class="ext">+</span>
                    </div>
                    <div class="answer">
                        <hr />
                        <p>
                            Statement of Purpose should reflect the motivation with which you are filling the
                            application for the project you wish to do. It is used by the mentor to judge if you are
                            enthusiastic enough to learn and work on the project. Please write a separate SOP directed
                            towards each project in case you’re applying for multiple projects.


                        </p>

                    </div>
                </div>

                <div class="faq-cell" data-aos="fade-in">
                    <div class="question text-center">
                        <b>What is the duration of WiDS?
                        </b>
                        <span class="ext">+</span>
                    </div>
                    <div class="answer">
                        <hr />
                        <p>
                            What is the duration of WiDS?
                            The duration mentioned on the projects is tentatively a month. Starting in the 1st week of
                            December 2024 and ending in 1st week of January 2025.

                        </p>
                    </div>
                </div>



                <div class="faq-cell" data-aos="fade-in">
                    <div class="question text-center">
                        <b>Is the assignment necessary to take up the project?
                        </b>
                        <span class="ext">+</span>
                    </div>
                    <div class="answer">
                        <hr />
                        <p>
                            Yes, wherever mentioned the assignment is mandatory and an important selection criteria
                            while selecting students for WiDS 2024.

                        </p>
                    </div>
                </div>

                <div class="faq-cell" data-aos="fade-in">
                    <div class="question text-center">
                        <b>
                            What would be the penalty if I leave the project in between?

                        </b>
                        <span class="ext">+</span>
                    </div>
                    <div class="answer">
                        <hr />
                        <p>
                            Any student who fails to perform satisfactorily in the project and/or leaves the project
                            will not receive any certification for the program.

                        </p>
                    </div>
                </div>

                <div class="faq-cell" data-aos="fade-in">
                    <div class="question text-center">
                        <b>Where will I be able to see the WiDS 2024 allocation results?
                        </b>
                        <span class="ext">+</span>
                    </div>
                    <div class="answer">
                        <hr />
                        <p>
                            The applicants will receive the link to the WiDS 2024 dashboard where the selection status
                            for each project will be updated regularly. The applicants will receive the link to the
                            dashboard via email.
                        </p>
                    </div>
                </div>


                <div class="faq-cell" data-aos="fade-in">
                    <div class="question text-center">
                        <b>In case of any query, what is supposed to be done?
                        </b>
                        <span class="ext">+</span>
                    </div>
                    <div class="answer">
                        <hr />
                        <p>
                            Please contact Manager Analytics Club or any of the WiDS team members whose details you can
                            find on the contact tab on the top right corner.
                        </p>
                    </div>
                </div>


            </div>
            </div>
        </section>
    </section>
    <?php require 'footer.php'; ?>

    <!-- faq dropdown functionality -->
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        const questions = document.getElementsByClassName("question");

        for (let i = 0; i < questions.length; i++) {
            questions[i].addEventListener("click", function() {
                const answer = this.nextElementSibling;
                const ext = this.querySelector(".ext");
                if (answer.style.display === "none") {
                    answer.style.display = "block";
                    ext.textContent = "-";
                } else {
                    answer.style.display = "none";
                    ext.textContent = "+";
                }
            });
        }
    });
    </script>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>





    <script>
    // JavaScript to trigger the typewriter effect
    document.addEventListener('DOMContentLoaded', function() {
        var elements = document.querySelectorAll('.typewriter');
        elements.forEach(function(element) {
            element.innerHTML = element.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

        });
    });
    </script>
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        let dropdownMenu = document.querySelector("#hoverDropdown .dropdown-menu");

        // Keep the dropdown open when hovering over the button or the dropdown itself
        document.querySelector("#hoverDropdown").addEventListener("mouseover", function(event) {
            if (dropdownMenu.style.display === 'block') {
                dropdownMenu.style.display = 'block';
            }
        });

        // Close the dropdown when the cursor leaves the button or the dropdown
        document.querySelector("#hoverDropdown").addEventListener("mouseleave", function(event) {
            dropdownMenu.style.display = 'none';
        });
    });
    </script>


    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/agency.js"></script>

    <script>
    $(document).ready(function() {
        $('#myModal').modal('show');
    });
    </script>

    <script>
    const name = "Winter in Data Science 2024";
    const delay = 200; // Delay between each letter in milliseconds
    let index = 0;

    function typeText() {
        const dynamicText = document.getElementById("dynamicText");

        if (index < name.length) {
            dynamicText.innerHTML += name.charAt(index);
            index++;
            setTimeout(typeText, delay);
        } else {
            setTimeout(clearText, 1500); // Delay before clearing text
        }
    }

    function clearText() {
        const dynamicText = document.getElementById("dynamicText");
        dynamicText.innerHTML = ""; // Clear the text
        index = 0; // Reset index to 0 for the next typing cycle
        setTimeout(typeText, delay);
    }

    // Start typing when the page loads
    window.onload = function() {
        typeText();
    };
    </script>


    <script>
    $(document).ready(function() {
        $("#myModal").modal("show");
    });
    </script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>
    <script>
    // Function to animate the counter
    function animateCounter(targetValue, duration) {
        const startValue = parseInt(document.getElementById('projectCounter').innerText);
        const increment = targetValue - startValue;
        const iterations = 60; // Change this value to adjust animation speed
        const incrementValue = increment / iterations;
        let currentValue = startValue;

        const updateCounter = setInterval(() => {
            currentValue += incrementValue;
            document.getElementById('projectCounter').innerText = Math.round(currentValue);

            if (currentValue >= targetValue) {
                clearInterval(updateCounter);
                // Check if the target value is greater than or equal to 100 to add a plus sign
                if (targetValue >= 100) {
                    document.getElementById('projectCounter').innerText = targetValue + '+';
                } else {
                    document.getElementById('projectCounter').innerText = targetValue;
                }
            }
        }, duration / iterations);
    }

    // Function to check if the element is in the viewport
    function isElementInViewport(el) {
        const rect = el.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight)
        );
    }

    // Function to handle scroll event
    function onScroll() {
        const counterElement = document.getElementById('projectCounter');

        if (isElementInViewport(counterElement)) {
            counterElement.classList.add('show');
            animateCounter(100, 3000); // Change 100 to your desired value and adjust duration if needed
            window.removeEventListener('scroll', onScroll); // Remove the scroll listener once triggered
        }
    }



    // Add scroll event listener
    window.addEventListener('scroll', onScroll);
    </script>

</body>

</html>
