<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

    <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">

      <title>Projects | <?php echo $_GET["department_name"]; ?></title>
      <meta content="" name="descriptison">
      <meta content="" name="keywords">
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
          .breadcrumbs{
            background: #f8f9fa !important;
            color: #2c2c96 !important;
            margin-t
          }
            .nav{
            padding:25px;
            }
            .navbar-brand{
                font-family:"Kaushan Script","Helvetica Neue",Helvetica,Arial,cursive;"
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
      </style>
      <?php require 'head_links.php';?>
          <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
</head>


    <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="background-color:#222222 !important;padding: 1rem 3rem;">
        <a class="navbar-brand" href="index.php" style="font-size:1.5em;">iSURP</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown" >
            <ul class="navbar-nav ml-auto" style="letter-spacing: 1px;">
            <li class="nav-item">
                <a class="nav-link" href="index.php#about">ABOUT</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="browse.php">PROJECTS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php#faqs">FAQ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="team.php">CONTACT</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://docs.google.com/forms/d/e/1FAIpQLSfknMUQsNWHckIDk06zBle1qHMY8Y4nVBLekWxg6EpdqVdu5Q/viewform?usp=sf_link" target="_blank">APPLY NOW</a>
            </li>
            </ul>
        </div>
    </nav>
    
    <div class="breadcrumbs" style="background: #ffffff !important;">
      <div class="container">
        <h2>Projects in <?php echo $_GET["department_name"]; ?></h2>
        <p></p>
      </div>
    </div>

    <?php
        $conn_error = 'could not connect';
        $conn = mysqli_connect('10.105.177.5', 'ugacademics', 'zsVgOLEGSxewJbgk', 'ugacademics') or die($conn_error);
        
        $query = "SELECT * FROM isurp_projects_2022 WHERE department='".$_GET["department_name"]."'";
        if($result = mysqli_query($conn, $query))
        {
            ?>
                <section id="courses" class="courses">
                <div class="container" data-aos="fade-up">

                <div class="row" data-aos="zoom-in" data-aos-delay="100">
                    <?php
                        while($row = mysqli_fetch_array($result))
                        {
                            $project_details_url= "./project_details.php?project_uid=".$row["uid"]."";
                            echo '
                               
                                <div class="col-lg-4 col-md-6 d-flex align-items-stretch my-3">
                                    <div class="course-item shadow" style="margin:0 auto;">
                                        
                                        <div class="course-content"
                                        style="width:348px;height:239px;">                        
                                            <h3>'.$row["title"].'</h3>
                                            <p>Professor:- '.$row["professor_name"].'<br>Minimum Semesters (present in): '.$row["min_year_of_study"].'</p>
                                            
                                            <div class="trainer d-flex justify-content-between align-items-center">
                                                
                                                <div class="trainer-rank d-flex align-items-center">
                                                    <a class="btn btn-outline-primary btn-sm float-right" href="'.$project_details_url.'">Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> ';
                        }
                    ?>
                </div>

                </div>
                </section>
            <?php
            
        }
        
    ?>
    
    <?php require 'footer.php'; ?>

    </body>

</html>