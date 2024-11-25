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
                        <a class="nav-link"
                        href="https://fuschia-hardboard-d83.notion.site/Natural-Language-Processing-NLP-11cbdcdb181f80748413da9c2951ba0c"
                        style="color: black;">Natural Language Processing (NLP)</a>
                        ></a>
                        <a class="nav-link"
                        href="https://viridian-submarine-d74.notion.site/Computer-Vision-CV-11c6d54b585f80d18c38fb80b28b01af">Computer Vision (CV)</a>
        
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#faqs">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="team.php">Contact Us</a>
                    </li>
                   
                </ul>
            </div>
        </div>
    </nav>
    <?php
require 'db_connect.php';

// Sanitize and validate input
function sanitize_input($conn, $input) {
    return mysqli_real_escape_string($conn, trim($input));
}

// Check if project_title is set
if (!isset($_GET['project_title'])) {
    die("Project title not specified");
}

// Sanitize the project title
$project_title = sanitize_input($conn, $_GET['project_title']);

// Use prepared statement to prevent SQL injection
$query = "SELECT * FROM Projects WHERE Project_Title = ?";
$stmt = mysqli_prepare($conn, $query);

if ($stmt) {
    mysqli_stmt_bind_param($stmt, "s", $project_title);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    
    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    }
    
    // Check if any rows were returned
    if (mysqli_num_rows($result) == 0) {
        die("No project found with the specified title");
    }
} else {
    die("Failed to prepare statement: " . mysqli_error($conn));
}
?>

<div class="breadcrumbs">
    <div class="container">
        <h2>Projects Details</h2>
        <p></p>
    </div>
</div>

<section id="course-details" class="course-details" style="padding-bottom: 0px !important;">
    <div class="container p-5" data-aos="fade-up">
        <div class="row">
            <?php 
            if ($row = mysqli_fetch_assoc($result)):
                // Debug line - remove in production
                error_log("Project data: " . print_r($row, true));
            ?>
                <div class="col-lg-8">
                    <h3><?php echo htmlspecialchars($row['Project_Title']) ?></h3>
                    <h5>Project UID: <span style="font-family: verdana"><b><?php echo htmlspecialchars($row['uid']) ?></b></span></h5>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <h5 class="color-blue">Project Duration (in weeks):</h5>
                            <p><?php echo htmlspecialchars($row['Duration']) ?></p>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <h5 class="color-blue">Mentor Name:</h5>
                            <p><?php echo htmlspecialchars($row['Mentor_Name']) ?></p>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <h5 class="color-blue">Mentor LDAP:</h5>
                            <p><?php echo htmlspecialchars($row['Mentor_LDAP']) ?></p>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <h5 class="color-blue">Number of Mentees:</h5>
                            <p><?php echo htmlspecialchars($row['Number_of_Mentees']) ?></p>
                        </div>
                    </div>

                    <h5 class="color-blue">Project Description:</h5>
                    <p style="font-family: 'Questrial', sans-serif;font-size:18px;">
                        <?php echo nl2br(htmlspecialchars($row['Project_Description'])) ?>
                    </p>
                </div>

                <div class="col-lg-4">
                    <div class="container-fluid my-4 mx-auto" style="width: 20rem;height: 20rem;">
                        <?php if (!empty($row['image'])): ?>
                            <img src="img/wids_projects/<?php echo htmlspecialchars($row['image']) ?>" 
                                 alt="Project Image"
                                 style="width: 18rem;height: 18rem;">
                        <?php endif; ?>
                    </div>

                    <div class="course-info d-flex justify-content-between align-items-center">
                        <h5 class="mr-2 pr-2">Prerequisites</h5>
                        <p><a href="#"><?php echo htmlspecialchars($row['Prerequisites']) ?></a></p>
                    </div>

                    <div class="course-info d-flex justify-content-between align-items-center">
                        <h5 class="mr-2 pr-2">Difficulty Level</h5>
                        <p><a href="#"><?php echo htmlspecialchars($row['Difficulty']) ?></a></p>
                    </div>
                </div>
            <?php else: ?>
                <div class="col-12">
                    <p>No project details found.</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php 
mysqli_stmt_close($stmt);
require 'footer.php'; 
?>
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
