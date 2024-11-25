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
        
      </ul>
    </div>

  </div>
</nav>
    <?php require 'db_connect.php'; ?>

    <?php
if (isset($_GET['project_category'])) {
    $project_category = mysqli_real_escape_string($conn, $_GET['project_category']);
    
    // Modified query to include specific UIDs
    $specific_uids = array(30, 24, 25, 12, 10, 8, 6, 4);
    $uids_string = implode(',', $specific_uids);
    
    $query2 = "SELECT * FROM Projects WHERE `Category` = '$project_category' OR `UID` IN ($uids_string) ORDER BY `UID` DESC";
    $result = mysqli_query($conn, $query2);

    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    }
    ?>
    <div class="breadcrumbs">
        <div class="container">
            <h2>Projects Details</h2>
        </div>
    </div>

    <section id="courses" class="courses">
        <div class="container" data-aos="fade-up">
            <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
                <?php
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $details_url = "./project_individual.php?project_title=" . urlencode($row['Project_Title']);
                        ?>
                        <div class="card bg-light m-4" style="width: 20em;">
                            <img src="img/wids_projects/<?php echo htmlspecialchars($row['image']); ?>" 
                                 class="card-img-top" 
                                 alt="Project Image" 
                                 style="width: 20rem; height: 14rem;">
                            <div class="card-body">
                                <h5 class="card-title" style="color:#22255A;">
                                    <?php echo htmlspecialchars($row['Project_Title']); ?>
                                </h5>
                                <a href="<?php echo $details_url; ?>" 
                                   class="btn" 
                                   style="background: #22255A; color:#fff">View More</a>
                            </div>
                        </div>
                        <?php
                    }
                } else {
                    echo '<p>No projects found for the selected category.</p>';
                }
                ?>
            </div>
        </div>
    </section>

    <?php if (isset($_GET['debug'])) { ?>
        <div class="container mt-4">
            <div class="alert alert-info">
                <h4>Debug Information:</h4>
                <p>Category: <?php echo htmlspecialchars($project_category); ?></p>
                <p>Query: <?php echo htmlspecialchars($query2); ?></p>
                <p>Number of results: <?php echo mysqli_num_rows($result); ?></p>
            </div>
        </div>
    <?php } ?>

    <?php
} else {
    echo '<p>Project category not specified in the URL.</p>';
}
?>



    <!-- <div id="preloader"></div> -->
                        <?php require 'footer.php'; ?>


                </div>


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



<!-- 

// $project_details = mysqli_fetch_assoc($result);
                // $count += 1;

                // if ($row['Project Title'] == "The Contractor's Guide to Reinforcement Learning") {
                //     echo '<div class="card bg-light  m-4" style="width: 20em;">
                //         <img src="img/wids_projects/'.$row['image'].'" class="card-img-top" alt="..." style="width: 20rem; height: 14rem;">
                //         <div class="card-body">
                //           <h5 class="card-title" style="color:#22255A;">'.$row['Project Title'].'</h5>
                //           <a href="https://docs.google.com/document/d/1Tl3hkWig81bQmLiH5GxxQwbHpBWi7YKxmH5-ul6_GuU/edit?usp=sharing" class="btn" style="background: #22255A; color:#fff">View More</a>
                //         </div>
                //       </div>';
                // } elseif ($row['Project Title'] == "DATA PREPARATION & CREATING ML MODELS") {
                //     echo '<div class="card bg-light  m-4" style="width: 20em;">
                //         <img src="img/wids_projects/'.$row['image'].'" class="card-img-top" alt="..." style="width: 20rem; height: 14rem;">
                //         <div class="card-body">
                //           <h5 class="card-title" style="color:#22255A;">'.$row['Project Title'].'</h5>
                //           <a href="https://docs.google.com/document/d/1hlfecbrwufhFZqeYpyJJVz6XpydKvLMshnp7yzbM3qs/edit?usp=sharing" class="btn" style="background: #22255A; color:#fff">View More</a>
                //         </div>
                //       </div>';
                // } elseif ($row['Project Title'] == "Stock Market Analysis+Prediction using LSTM") {
                //         echo '<div class="card bg-light  m-4" style="width: 20em;">
                //             <img src="img/wids_projects/'.$row['image'].'" class="card-img-top" alt="..." style="width: 20rem; height: 14rem;">
                //             <div class="card-body">
                //               <h5 class="card-title" style="color:#22255A;">'.$row['Project Title'].'</h5>
                //               <a href="https://docs.google.com/document/d/1bC_E_5X0Wae5Ycl2Z53YB_bUN3dlN6Z_bXUG3Nesxaw/edit?usp=sharing" class="btn" style="background: #22255A; color:#fff">View More</a>
                //             </div>
                //           </div>';
                // } elseif ($row['Project Title'] == "Exploration of Tesla's stock marker prices") {
                //         echo '<div class="card bg-light  m-4" style="width: 20em;">
                //             <img src="img/wids_projects/'.$row['image'].'" class="card-img-top" alt="..." style="width: 20rem; height: 14rem;">
                //             <div class="card-body">
                //                 <h5 class="card-title" style="color:#22255A;">'.$row['Project Title'].'</h5>
                //                 <a href="https://docs.google.com/document/d/1RaExWwifnwcC9018K8L0uK272_ZnDr-OvAenXL9Hfdg/edit?usp=sharing" class="btn" style="background: #22255A; color:#fff">View More</a>
                //             </div>
                //             </div>';
                // } elseif ($row['Project Title'] == "Intro to RNN's") {
                //         echo '<div class="card bg-light  m-4" style="width: 20em;">
                //             <img src="img/wids_projects/'.$row['image'].'" class="card-img-top" alt="..." style="width: 20rem; height: 14rem;">
                //             <div class="card-body">
                //                 <h5 class="card-title" style="color:#22255A;">'.$row['Project Title'].'</h5>
                //                 <a href="https://docs.google.com/document/d/1Dnz8H4GLffQYs_XLmM2DNCwqwp30l2iUQfINU259trY/edit?usp=sharing" class="btn" style="background: #22255A; color:#fff">View More</a>
                //             </div>
                //             </div>';
                // } elseif ($row['Project Title'] == "Interactive Web Crawler") {
                //     echo '<div class="card bg-light  m-4" style="width: 20em;">
                //         <img src="img/wids_projects/'.$row['image'].'" class="card-img-top" alt="..." style="width: 20rem; height: 14rem;">
                //         <div class="card-body">
                //             <h5 class="card-title" style="color:#22255A;">'.$row['Project Title'].'</h5>
                //             <a href="https://drive.google.com/file/d/1agcTg_icB-5TR5QuZzMmIXBpvv7bmIyj/view?usp=sharing" class="btn" style="background: #22255A; color:#fff">View More</a>
                //         </div>
                //         </div>';

                // }else{ -->
