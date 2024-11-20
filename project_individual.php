<!DOCTYPE html>
<?php
  session_start();
?>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>WiDS | Project Details</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet'
        type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>


    <style type="text/css">
    .color-blue {
        color: #161637 !important;
    }

    .btn-outline-primary,
    .btn-outline-primary:hover,
    .btn-outline-primary:focus,
    .btn-outline-primary:active {
        color: #151582 !important;
        border-color: #151582 !important;
    }

    .btn-outline-primary:hover,
    .btn-outline-primary:focus,
    .btn-outline-primary:active {
        color: #fff !important;
        background-color: #151582 !important;
    }

    .course-details h3::after {
        background-color: #151582 !important;
    }

    .cource-details-tabs .nav-link.active {
        color: #151582 !important;
        border-color: #151582 !important;
    }

    .cource-details-tabs .nav-link:hover {
        color: #151582 !important;
    }

    .nav {
        padding: 25px;
    }

    .navbar-brand {
        font-family: "Kaushan Script", "Helvetica Neue", Helvetica, Arial, cursive;
    }

    .navbar-nav {
        font-family: Montserrat, "Helvetica Neue", Helvetica, Arial, sans-serif;
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
    <?php require 'head_links.php';?>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="min-height: 100px; background-color: black;  color:white;">
        <div class="container">
            <a class=" page-scroll" href="#page-top"><img src="img/ugac.png"
                    style="width: 110px; height: 75px; padding-right: 25px;" alt=""></a>
            <a class=" page-scroll" href="#page-top"><img src="img/loooo.jpg" style="width: 87px; height: 75px;"
                    alt=""></a>
            <!-- <a class=" page-scroll" href="#page-top"><img src="img/schoollogo.jpg" style="width: 87px; height: 75px;" alt=""></a> -->
            <!-- <a class="navbar-brand" href="index.php" style="font-size:1.5em;"></a> -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ml-auto" style="letter-spacing: 1px;">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#about">ABOUT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="browse.php">PROJECTS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                            href="https://drive.google.com/file/d/1gf96XHPY2BFSUMLaVHO4q7GTmt1I8wF8/view?usp=drive_link"
                             >ML Booklet</a>
                    </li>
                    <li>
                        <div class="dropdown" id="blockformobile" >
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Resources
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="text-align: center;">
                                <a class="dropdown-item"
                                    href="https://cyclic-eyebrow-46b.notion.site/Bootcamp-Course-Structure-eca4b9cd7a934f419fdf5825df29c071"
                                    style="color: black;">Week 0</a>
                                <br>
                                <a class="dropdown-item"
                                    href="https://cyclic-eyebrow-46b.notion.site/Bootcamp-Course-Structure-a674aafaca5b4ce7957352d026499d7a"
                                    style="color: black;">Week 1</a>
                                <br>
                                <a class="dropdown-item"
                                    href="https://cyclic-eyebrow-46b.notion.site/Bootcamp-Course-Structure-b0bb09a7b85148f4a6a00a3df8ae24a6"
                                    style="color: black;">Week 2</a>
                            </div>
                        </div>
                    </li>
                    <li class="mobile-only" id="mobile-only">
                        <a class="nav-link"
                            href="https://cyclic-eyebrow-46b.notion.site/Bootcamp-Course-Structure-eca4b9cd7a934f419fdf5825df29c071">Resources
                            Week-0</a>
                        <a class="nav-link"
                            href="https://cyclic-eyebrow-46b.notion.site/Bootcamp-Course-Structure-a674aafaca5b4ce7957352d026499d7a">Resources
                            Week-1</a>
                        <a class="nav-link"
                            href="https://cyclic-eyebrow-46b.notion.site/Bootcamp-Course-Structure-b0bb09a7b85148f4a6a00a3df8ae24a6">Resources
                            Week-2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#faqs">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="team.php">CONTACT</a>
                    </li>
                    <?php if (!isset($_SESSION['ldap'])) { ?>
		            <li class="nav-item">
		                <a class="nav-link"
		                    href="https://gymkhana.iitb.ac.in/profiles/oauth/authorize/?client_id=JjLXbgsU4Au7Dz89tKOXPxnIpOruAa8zKs0ZvwFq&amp;scope=basic ldap profile secondary_emails program phone&amp;response_type=code"
		                    target="_parent">Login via SSO</a>
		            </li>
		            <?php } else { ?>
                        <li class="nav-item">
                        <a class="nav-link" href="https://docs.google.com/forms/d/e/1FAIpQLScHiu4iXVZtmX_KeFeErmxqRohjedErSNFGvqdRnIfrqTsWdg/viewform?pli=1" target="_blank">Apply Now</a>
                    </li>
		            <li class="nav-item">
		                <form method="POST" action="logout.php">
		                    <button type="submit" class="btn btn-dark dotted-border"
		                        name="Logout" style="margin-top: 2px; width: 100px; height: 40px; margin-left: 0;">
		                        LogOut <i class="fas fa-sign-out-alt"></i></button>
		                </form>
		            </li>
		            <?php } ?>
                </ul>
            </div>
        </div>
    </nav>
    <?php require 'db_connect.php'; ?>

    <?php
            

            $query2 = "SELECT * FROM proj_info WHERE `Project_Title`='".$_GET['project_title']."'";
            $result = mysqli_query($conn, $query2);

            // foreach ($rows as $row) {
            //     print_r($row);
            // }
            // Implemeting the functions for the cart system
            // if(array_key_exists('add_to_cart', $_POST)) {

            //     addToCart(
            //         $_SESSION['name'], $_SESSION['ldap'], $_SESSION['rollno'],
            //         $_SESSION['email'], $_SESSION['phno'],
            //         $row['project_uid']
            //     );

            // }

            // if(array_key_exists('register_course', $_POST)) {
            //     registerCourse(
            //         $_SESSION['name'], $_SESSION['ldap'], $_SESSION['rollno'],
            //         $_SESSION['email'], $_SESSION['phno'],
            //         $row['project_uid'], "1", "link" 
            //     );
            // }
        ?>
    <div class="breadcrumbs">
        <div class="container">
            <h2>Projects Details</h2>
            <?php while ($row = mysqli_fetch_assoc($result)): ?>

            <p></p>
        </div>
    </div>
    <!-- ======= Course Details Section ======= -->
    <section id="course-details" class="course-details" style="padding-bottom: 0px !important;">
        <div class="container p-5" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-8">

                    <!-- <img src="https://static3.cbrimages.com/wordpress/wp-content/uploads/2020/03/Featured-Image-Luffy.jpg" class="img-fluid" alt=""> -->

                    <h3><?php echo $row['Project_Title'] ?></h3>
                    <h5>Project UID: <span style="font-family: verdana"><b><?php echo $row['uid'] ?></b></span></h5>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <h5 class="color-blue">Project Duration:</h5>
                            <p> <?php echo $row['Duration'] ?></p>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <h5 class="color-blue">Mentor Name:</h5>
                            <p> <?php echo $row['Mentor_Name'] ?></p>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <h5 class="color-blue">Mentor LDAP:</h5>
                            <p> <?php echo $row['Mentor_LDAP'] ?></p>
                        </div>
                        <!-- <div class="col-lg-6 col-md-6">
                            <h5 class="color-blue">Number of Mentees:</h5>
                            <p> <?php echo $row['Number of Mentees'] ?></p>
                        </div> -->

                    </div>

                    <h5 class="color-blue">Project Description:</h5>
                    <p style="font-family: 'Questrial', sans-serif;font-size:18px;">
                        <?php echo $row['Project_Description']?></p>

                </div>
                <div class="col-lg-4">

                    <!-- <div class="course-info d-flex justify-content-between align-items-center">
                <h5>CPI criteria</h5>
                <p><a href="#">
                    <?php 
                    // echo $row["cpi_eligibility"] ?>
                </a></p>
                </div> -->
                    <div class="container-fluid my-4 mx-auto" style="width: 20rem;height: 20rem;">
                        <img src="img/wids_projects/<?php echo $row['image']?>" alt=""
                            style="width: 18rem;height: 18rem;">

                    </div>
                    <!-- <div class="course-info d-flex justify-content-between align-items-center">
                <h5 class="mr-2 pr-2">Number of Mentees</h5>
                <p><a href="#"><?php echo $row["Number of Mentees"] ?></a></p>
                </div> -->

                    <div class="course-info d-flex justify-content-between align-items-center">
                        <h5 class="mr-2 pr-2">Prerequisites</h5>
                        <p><a href="#"><?php echo $row["Prerequisites"] ?></a></p>
                    </div>

                    <div class="course-info d-flex justify-content-between align-items-center">
                        <h5 class="mr-2 pr-2">Difficulty Level</h5>
                        <p><a href="#"><?php echo $row["Difficulty"] ?></a></p>
                    </div>

                </div>
                <?php endwhile ?>
            </div>

            <?php require 'footer.php'; ?>
</body>

</html>
</body>

<!--Scroll to top on reload-->
<script type="text/javascript">
$(document).ready(function() {
    $(this).scrollTop(0);
});
</script>

</html>