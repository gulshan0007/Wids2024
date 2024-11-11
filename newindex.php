<?php
header("Location:https://forms.gle/S8rDAShtCidWE13MA");

//index.php

//Include Configuration File
include('config.php');

$login_button = '';


if (isset($_GET["code"])) {

  $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);


  if (!isset($token['error'])) {

    $google_client->setAccessToken($token['access_token']);


    $_SESSION['access_token'] = $token['access_token'];


    $google_service = new Google_Service_Oauth2($google_client);


    $data = $google_service->userinfo->get();


    if (!empty($data['given_name'])) {
      $_SESSION['user_first_name'] = $data['given_name'];
    }

    if (!empty($data['family_name'])) {
      $_SESSION['user_last_name'] = $data['family_name'];
    }

    if (!empty($data['email'])) {
      $_SESSION['user_email_address'] = $data['email'];
    }

    if (!empty($data['gender'])) {
      $_SESSION['user_gender'] = $data['gender'];
    }

    if (!empty($data['picture'])) {
      $_SESSION['user_image'] = $data['picture'];
    }
    if (!empty($data['cpi'])) {
      $_SESSION['roll'] = $data['cpi'];
    }
  }
}


if (!isset($_SESSION['access_token'])) {

  $login_button = '<a href="' . $google_client->createAuthUrl() . '">Login With Google</a>';
}

?>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <!-- <title>Apply | SURP</title> -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <meta charset="UTF-8">

  <title>Apply | SURP</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="stylesheet" type="text/css" href="admin/bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="admin/font-awesome/css/font-awesome.min.css" />
  <script type="text/javascript" src="admin/js/jquery-1.10.2.min.js"></script>
  <script type="text/javascript" src="admin/bootstrap/js/bootstrap.min.js"></script>

  <link rel='stylesheet prefetch' href='https://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css'>

  <link rel="stylesheet" href="css/style_apply.css">

  <!-- Custom Fonts -->
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
</head>

<body>
  <!-- <div class="container">
   <br />
   <h2 align="center">PHP Login using Google Account</h2>
   <br />
   <div class="panel panel-default">
   <?php
    // if ($login_button == '') {
    //   echo '<div class="panel-heading">Welcome User</div><div class="panel-body">';
    //   echo '<img src="' . $_SESSION["user_image"] . '" class="img-responsive img-circle img-thumbnail" />';
    //   echo '<h3><b>Name :</b> ' . $_SESSION['user_first_name'] . ' ' . $_SESSION['user_last_name'] . '</h3>';
    //   echo '<h3><b>Email :</b> ' . $_SESSION['user_email_address'] . '</h3>';
    //   echo '<h3><b>Email :</b> ' . $_SESSION['user_last_name'] . '</h3>';
    //   echo '<h3><b>Email :</b> ' . $_SESSION['roll'] . '</h3>';
    //   echo '<h3><a href="logout.php">Logout</h3></div>';
    // } else {
    //   echo '<div align="center">' . $login_button . '</div>';
    // }
    ?>
   </div>
  </div> -->
  <?php
  include "functions1.php";
  if (isset($_POST['register'])) {
    $err = 0;
    //$username= $_SESSION['ldap_id'];//$_POST['username'];
    $fullname = $_POST['fullname'];
    $roll = $_POST['roll'];
    $email = $_POST['username'];
    // $hostel = $_POST['hostel'];
    $alt_email = $_POST['altemail'];
    $department = $_POST['department'];
    //$year_of_study = 2020;//$_POST['year'];
    // $mobile = $_POST['mobile'];
    // $room = $_POST['room'];
    $cpi = $_POST['cpi'];
    $pid1 = $_POST['PreferenceID1'];
    $ss_asc = $_POST['ssasc'];
    // $profname1 = $_POST['ProfName1'];
    // $profdept1 = $_POST['ProfDept1'];
    // $projtitle1 = $_POST['ProjectTitle1'];
    $sop1 = $_POST['SOP1'];

    $pid2 = $_POST['PreferenceID2'];
    // $profname2 = $_POST['ProfName2'];
    // $profdept2 = $_POST['ProfDept2'];
    // $projtitle2 = $_POST['ProjectTitle2'];
    $sop2 = $_POST['SOP2'];


    $pid3 = $_POST['PreferenceID3'];
    // $profname3 = $_POST['ProfName3'];
    // $profdept3 = $_POST['ProfDept3'];
    // $projtitle3 = $_POST['ProjectTitle3'];
    $sop3 = $_POST['SOP3'];

    if (!(is_registered($email)))
    {echo "hello";
      date_default_timezone_set('Asia/Kolkata');
      $timestamp=date("Y-m-d H:i:s");
      echo is_registered($email);
      register_user($timestamp,$fullname,$roll,$email,$alt_email,$department,$cpi,$pid1,$sop1,$pid2,$sop2,$pid3,$sop3,$ss_asc);
      // header("Location:choice.php");
      echo is_registered($email);
      header("Location:mychoice.php");
    }
    else 
    {
      echo "here";  
      // $db = mysqli_connect("10.105.177.5", "ugacademics", "ug_acads","ugacademics");
     // $db = mysqli_connect("localhost", "root", "","ugacademics") or die("Connection Error: " . mysql_error()); echo "hi";
      $db = mysqli_connect('remotemysql.com', 'NFQ7BMypRh', 'J1oIPYSZ1Q', 'NFQ7BMypRh') or die("Connection Error: " . mysql_error()); echo "hi";

      #mysql_select_db("ugacademics");
      date_default_timezone_set('Asia/Kolkata');
      $timestamp= date("Y-m-d H:i:s");
      mysqli_query($db, "UPDATE surp_registered SET
  Timestamp='$timestamp', fullname='$fullname',roll='$roll',username='$email',altemail='$alt_email',department='$department',cpi='$cpi',PreferenceID1='$pid1',SOP1='$sop1',PreferenceID2='$pid2',SOP2='$sop2',PreferenceID3='$pid3',SOP3='$sop3' WHERE username='$email'") or die (mysql_error());
      header("Location:mychoice.php");
      //echo "q";
      // header("Location:choice.php");
  
  
    }

  }
  // if (!(isset($_SESSION['user_email_address']))){
  //   header("location: newapply.php");
  // }
  if(is_registered($_SESSION['user_email_address']))
{
  header("location:mychoice.php");
}
  ?>

  <div class="container">
    <div class="page-header">
      <h1>Register | <a href="index.php">SURP</a><small> Summer Undergraduate Research Program</small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="logout.php">Logout</a></h1>
    </div>
    <!-- <a href="mychoice.php">MyChoice</a> -->
  </div>
  <div class="wrapper">
   
    <form class="form-register" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <h2 class="form-signin-heading">Register</h2>
      <label class="form-control">Full Name *
        <input type="text" class="form-control" style="font-weight:normal;" name="fullname" readonly placeholder="Update this on SSO and relogin" required autofocus="" value='<?php echo $_SESSION['user_first_name']; ?>  <?php echo $_SESSION['user_last_name']; ?>' />
      </label>

      <label class="form-control">Roll Number *
        <input type="text" class="form-control" name="roll" style="font-weight:normal;" placeholder="Enter Your IITB Roll Number" required autofocus="" />
      </label>

      <label class="form-control">Email *
        <input type="text" class="form-control" name="username" style="font-weight:normal;" readonly placeholder="Update this on SSO and relogin" required autofocus="" value='<?php echo $_SESSION['user_email_address']; ?>' /></label>
      </label>

      <label class="form-control">Alternate Email
        <input type="text" class="form-control" name="altemail" style="font-weight:normal;" placeholder="Enter Your Alternate Email if any" autofocus="" />
      </label>

      <!-- <label class="form-control">Year *
<?php if ($year_of_study != 1) { ?> <input type="text" style="font-weight:normal;" class="form-control" name="year" placeholder="Year *" required="" autofocus="" value ='<?php echo $year_of_study; ?>' />
<?php } else { ?> <input type="hidden" name="year" value = '1'> <?php } ?>
</label>   -->

      <!-- <label class="form-control">Hostel *
<input  type="text" class="form-control" name="hostel" style="font-weight:normal;" placeholder="Enter Your Hostel Number" required autofocus="" />
</label>   -->
      <label class="form-control">Asc Portal Screen * (Make sure your cpi is visible)
        <input type="url" class="form-control" name="ssasc" style="font-weight:normal;" placeholder="Link of ScreenShot of Asc Portal" required autofocus="" />
      </label>
      <!-- <label class="form-control">Room No *
<input  type="text" class="form-control" style="font-weight:normal;" name="room" placeholder="Enter Your Room Number" required autofocus=""  />
</label>   -->

      <!-- <label class="form-control">Mobile *
<input type="text" class="form-control" name="mobile" style="font-weight:normal;" placeholder="Please enter your mobile number"  autofocus="" required value ='<?php echo $_SESSION['mobile']; ?>'/>
</label> -->

      <label class="form-control">Department *
        <select name="department" class="form-control" required >
       
        <option value="Aerospace Engineering">Aerospace Engineering</option>
    <option value="Animation">Animation</option>
    <option value="Application Software Centre">Application Software Centre</option>
    <option value="Applied Geophysics">Applied Geophysics</option>
    <option value="Applied Statistics and Informatics">Applied Statistics and Informatics</option>
    <option value="Biomedical Engineering">Biomedical Engineering</option>
    <option value="Biosciences and Bioengineering">Biosciences and Bioengineering</option>
    <option value="Biotechnology">Biotechnology</option>
    <option value="Centre for Aerospace Systems Design and Engineering">Centre for Aerospace Systems Design and Engineering</option>
    <option value="Centre for Distance Engineering Education Programme">Centre for Distance Engineering Education Programme</option>
    <option value="Centre for Environmental Science and Engineering">Centre for Environmental Science and Engineering</option>
    <option value="Centre for Formal Design and Verification of Software">Centre for Formal Design and Verification of Software</option>
    <option value="Centre for Policy Studies">Centre for Policy Studies</option>
    <option value="Centre for Research in Nanotechnology and Science">Centre for Research in Nanotechnology and Science</option>
    <option value="Centre for Technology Alternatives for Rural Areas">Centre for Technology Alternatives for Rural Areas</option>
    <option value="Centre for Urban Science and Engineering">Centre for Urban Science and Engineering</option>
    <option value="Centre of Studies in Resources Engineering">Centre of Studies in Resources Engineering</option>
    <option value="Chemical Engineering">Chemical Engineering</option>
    <option value="Chemistry">Chemistry</option>
    <option value="Civil Engineering">Civil Engineering</option>
    <option value="Climate Studies">Climate Studies</option>
    <option value="Computer Centre">Computer Centre</option>
    <option value="Computer Science & Engineering">Computer Science & Engineering</option>
    <option value="Continuing Education Programme">Continuing Education Programme</option>
    <option value="Corrosion Science and Engineering">Corrosion Science and Engineering</option>
    <option value="Desai Sethi Centre for Entrepreneurship">Desai Sethi Centre for Entrepreneurship</option>
    <option value="Earth Sciences">Earth Sciences</option>
    <option value="Educational Technology">Educational Technology</option>
    <option value="Electrical Engineering">Electrical Engineering</option>
    <option value="Energy Science and Engineering">Energy Science and Engineering</option>
    <option value="Humanities & Social Science">Humanities & Social Science</option>
    <option value="IITB-Monash Research Academy">IITB-Monash Research Academy</option>
    <option value="Industrial Design Centre">Industrial Design Centre</option>
    <option value="Industrial Engineering and Operations Research">Industrial Engineering and Operations Research</option>
    <option value="Industrial Management">Industrial Management</option>
    <option value="Interaction Design">Interaction Design</option>
    <option value="Kanwal Rekhi School of Information Technology">Kanwal Rekhi School of Information Technology</option>
    <option value="Material Science">Material Science</option>
    <option value="Materials, Manufacturing and Modelling">Materials, Manufacturing and Modelling</option>
    <option value="Mathematics">Mathematics</option>
    <option value="Mechanical Engineering">Mechanical Engineering</option>
    <option value="Metallurgical Engineering & Materials Science">Metallurgical Engineering & Materials Science</option>
    <option value="Mobility and Vehicle Design">Mobility and Vehicle Design</option>
    <option value="National Centre for Aerospace Innovation and Research">National Centre for Aerospace Innovation and Research</option>
    <option value="National Centre for Mathematics">National Centre for Mathematics</option>
    <option value="Physical Education">Physical Education</option>
    <option value="Physics">Physics</option>
    <option value="Physics, Material Science">Physics, Material Science</option>
    <option value="Preparatory Course">Preparatory Course</option>
    <option value="Reliability Engineering">Reliability Engineering</option>
    <option value="Shailesh J. Mehta School of Management">Shailesh J. Mehta School of Management</option>
    <option value="Sophisticated Analytical Instrument Facility">Sophisticated Analytical Instrument Facility</option>
    <option value="Systems and Control Engineering">Systems and Control Engineering</option>
    <option value="Tata Center for Technology and Design">Tata Center for Technology and Design</option>
    <option value="Visual Communication">Visual Communication</option>
    <option value="Wadhwani Research Centre for Bioengineering">Wadhwani Research Centre for Bioengineering</option>
        </select>
        <!-- <?php

              foreach ($alldepartments as $key => $value) {
                if ($value['value'] != $mydepartment) {

                  echo "<option value='" . $value['value'] . "'>" . $value['department'] . "</option>";
                } else {
                  echo "<option value='" . $value['value'] . "' selected='selected'>" . $value['department'] . "</option>";
                }
              } ?> -->
        <!-- <input type="text" style="font-weight:normal;" class="form-control" name="department" readonly placeholder="Department *" required autofocus="" value ='<?php echo $_SESSION['department']; ?>'/> -->
      </label>

      <label class="form-control">CPI*
        <input type="text" class="form-control" name="cpi" placeholder="Enter your CPI" required style="font-weight:normal;" autofocus="" />
        <!-- <?php
              if ($year_of_study == 1) {
                echo '
<textarea class="form-control" maxlength="1000" style="resize:none;height:170px;" name="experience" placeholder="Notable first-year experience"></textarea>';
              }
              ?> -->
      </label>



      <label class="form-control">Preference 1* (Enter Project ID)
        <input type="number" class="form-control" min="2101" max="2257" name="PreferenceID1" placeholder="Project ID 1" required="" style="font-weight:normal;" autofocus="" /> <br>
        <!-- <input type="text" class="form-control" name="ProfName1" placeholder="Professor Name 1" required=""style="font-weight:normal;" autofocus="" value ='<?php echo $_SESSION['PName1']; ?>' />
<input type="text" class="form-control" name="ProfDept1" placeholder="Department of Professor 1" required=""style="font-weight:normal;" autofocus="" value ='<?php echo $_SESSION['PDept1']; ?>' />
<input type="text" class="form-control" name="ProjectTitle1" placeholder="Title of Project 1" required=""style="font-weight:normal;" autofocus="" value ='<?php echo $_SESSION['PTitle1']; ?>' /> -->
        <input type="url" class="form-control" name="SOP1" placeholder="Enter Link of SoP 1" required="" style="font-weight:normal;" autofocus="" />
      </label>

      <label class="form-control">Preference 2 (Enter Project ID)
        <input type="number" class="form-control" min="2101" max="2257" name="PreferenceID2" placeholder="Project ID 2" style="font-weight:normal;" autofocus="" /> <br>
        <!-- <input type="text" class="form-control" name="ProfName2" placeholder="Professor Name 2" style="font-weight:normal;" autofocus="" value ='<?php echo $_SESSION['PName2']; ?>'/>
<input type="text" class="form-control" name="ProfDept2" placeholder="Department of Professor 2" style="font-weight:normal;" autofocus="" value ='<?php echo $_SESSION['PDept2']; ?>' />
<input type="text" class="form-control" name="ProjectTitle2" placeholder="Title of Project 2" style="font-weight:normal;" autofocus="" value ='<?php echo $_SESSION['PTitle2']; ?>' /> -->
        <input type="url" class="form-control" name="SOP2" placeholder="Enter Link of SoP 2" style="font-weight:normal;" autofocus="" />
      </label>

      <label class="form-control">Preference 3 (Enter Project ID)
        <input type="number" class="form-control" min="2101" max="2257" name="PreferenceID3" placeholder="Project ID 3" style="font-weight:normal;" autofocus="" /> <br>
        <!-- <input type="text" class="form-control" name="ProfName3" placeholder="Professor Name 3" style="font-weight:normal;" autofocus="" value ='<?php echo $_SESSION['PName3']; ?>' />
<input type="text" class="form-control" name="ProfDept3" placeholder="Department of Professor 3" style="font-weight:normal;" autofocus="" value ='<?php echo $_SESSION['PDept3']; ?>' />
<input type="text" class="form-control" name="ProjectTitle3" placeholder="Title of Project 3" style="font-weight:normal;" autofocus="" value ='<?php echo $_SESSION['PTitle3']; ?>' /> -->
        <input type="url" class="form-control" name="SOP3" placeholder="Enter Link of SoP 3" style="font-weight:normal;" autofocus="" />
      </label>



      <input type="checkbox" name="purview" value="1" required> I have read the SURP rule book and agree to terms and conditions mentioned*<br>
      <!-- <a href="https://gymkhana.iitb.ac.in/profiles/user/" target="_blank" class="btn btn-lg btn-primary btn-block"> Update SSO Details  </a><br> -->
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="register">Submit</button>

    </form>
  </div>
</body>

</html>