<head>

<meta property="og:image" content="https://gymkhana.iitb.ac.in/~ugacademics/surp/img/back1.jpg" />
<meta charset="utf-8">
<link href="css/style.css" rel='stylesheet' type='text/css' />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<title>iSURP | IIT Bombay</title>

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
<link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
</head>
    
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" style="color:white;" href="#page-top">iSURP</a>
                <!-- <a class="navbar-brand page-scroll" href="#page-top"><img src="images/unnamed.png" style="width: 150px; height: 75px;" alt=""></a> -->
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="browse.php" target="_blank">Projects</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">FAQ</a>
                    </li>
                    <!-- <li>
                        <a class="page-scroll" href="#team">Contact</a>
                    </li> -->
                    <li>
                        <a class="page-scroll" target="_blank" href="team.php">Contact</a>
                    </li>
                    <?php if (!isset($_SESSION['ldap'])) { ?>
		            <li>
                    <a class="page-scroll"
		                    href="https://gymkhana.iitb.ac.in/profiles/oauth/authorize/?client_id=Iq0fR0M3buR4esYN80hwAh7bfanQ38NAqEdMqWqY&amp;scope=basic ldap profile secondary_emails program phone&amp;response_type=code"
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
                    <!-- <li>
                        <a href="https://forms.gle/S8rDAShtCidWE13MA" target="_blank">Apply Now</a>
                    </li> -->
                    <!--<li>
                        <a href="">Results</a>
                    </li>-->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>