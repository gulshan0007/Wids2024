<?php
header("Location:https://forms.gle/S8rDAShtCidWE13MA");
session_start();
if (!(isset($_SESSION['user_email_address']))){
	header("location: newapply.php");
}
include "functions1.php";
if(is_registered($_SESSION['user_email_address']))
{
// $db = mysqli_connect("localhost", "root", "","ugacademics");
$db = mysqli_connect('remotemysql.com', 'NFQ7BMypRh', 'J1oIPYSZ1Q', 'NFQ7BMypRh');
$rr=$_SESSION['user_email_address'];
$query="SELECT * FROM surp_registered WHERE username='$rr'";
$result= mysqli_query($db,$query) or die("Your query is not right");
$row = mysqli_fetch_assoc($result);
// $_SESSION['mobile']=$row['Mobile'];
// $_SESSION['fullname']=$row['fullname'];
// $_SESSION['cpi']=$row['cpi'];
// $_SESSION['altemail']=$row['altemail'];
// $_SESSION['roll']=$row['roll'];
// $_SESSION['department']=$row['department'];
$_SESSION['PreferenceID1']=$row['PreferenceID1'];

// $_SESSION['SS_Asc']=$row['SS_Asc'];
// $_SESSION['PName1']=$row['ProfName1'];
// $_SESSION['PDept1']=$row['ProfDept1'];
// $_SESSION['PTitle1']=$row['ProjectTitle1'];
$_SESSION['SOP1']=$row['SOP1'];

$_SESSION['PreferenceID2']=$row['PreferenceID2'];
// $_SESSION['PName2']=$row['ProfName2'];
// $_SESSION['PDept2']=$row['ProfDept2'];
// $_SESSION['PTitle2']=$row['ProjectTitle2'];
$_SESSION['SOP2']=$row['SOP2'];

$_SESSION['PreferenceID3']=$row['PreferenceID3'];
// $_SESSION['PName3']=$row['ProfName3'];
// $_SESSION['PDept3']=$row['ProfDept3'];
// $_SESSION['PTitle3']=$row['ProjectTitle3'];
$_SESSION['SOP3']=$row['SOP3'];
// $content='Update Application';

$f = $_SESSION['PreferenceID1'];
$s = $_SESSION['PreferenceID2'];
$t = $_SESSION['PreferenceID3'];



//echo "hello";

}


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous"> -->
      <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="static/vendor/bootstrap/css/bootstrap.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="static/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="static/vendor/animate/animate.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="static/vendor/select2/select2.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="static/vendor/perfect-scrollbar/perfect-scrollbar.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="static/css/util.css">
  <link rel="stylesheet" type="text/css" href="static/css/main.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <title>Project Choice | IIT Bombay</title>
  </head>
  <body>
    <!-- <h1>Hello, world!</h1> -->
    
    <!-- <table style="    display: block;
    overflow-x: auto;white-space:nowrap;
    ">
                                    <thead>
                                        <tr>
                                            <th>Department</th>
                                            <th>ID</th>
                                            <th>Professor</th>
                                            <th>Title</th>
                                            <th>SOP</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
    //                                     $link = mysqli_connect('localhost', 'root', '', 'ugacademics') or die('Error connecting to mysqli sever');
    //                                     $query = "SELECT * FROM surp_2021_project_procurement_f WHERE Project_ID IN ($f, $s, $t)";
    //                                     $result = mysqli_query($link, $query) or die('Error connecting to database');
    //                                     while ($row = mysqli_fetch_array($result)) {
    //                                         $id = $row['Project_ID'];
    //                                         $department = $row['Department'];
    //                                         $prof = $row['Professor_Name'];
    //                                         $title = $row['Title'];
    //                                         $description = $row['Description'];
    //                                         $eligibility = $row['CPI_Eligibility'];
    //                                         $students_req = $row['Number_Of_Students'];
    //                                         $year = $row['Minimum_Year_Of_Study'];


    //                                         $other_prereq = $row['Prerequisites'];
    //                                         $duration = $row['Duration'];
    //                                         $what_to_learn = $row['Learning_Outcome'];
    //                                         $selection = $row['Selection_Process'];
    //                                         echo '<tr>
    //   <td><strong>' . $department . '</strong></td>
    //   <td>' . $id . '</td>
    //   <td>' . $prof . '</td>
    //   <td><a style="color:#D2691E;" href="project.php?param=' . $id . '">' . $title . '</a></td>      
    // </tr>';
    //                                     }

                                        ?>



                                    </tbody>

                                </table> -->
                               
  <div class="container">
    <div class="page-header" style="margin-top: 25px;">
      <h1>Your Choices | <a href="index.php">SURP</a><small> Summer Undergraduate Research Program</small></h1>
    </div>
    <br>
    <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="update.php"class="btn btn-info" style="background-color: #323B75;" role="button">Update Choice</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="logout.php"class="btn btn-info" role="button" style="background-color: #323B75;">Logout</a></div>
    
  </div>

  <div class="limiter">

  

    <div class="container-table100" style="overflow-x:auto;">
      <div class="wrap-table100">
        <div class="table100 ver1 m-b-110">
          <div class="table100-head">
            <table>
              <thead>
                <tr class="row100 head">
                  <th class="cell100 column1">Department</th>
                  <th class="cell100 column2">ID</th>
                  <th class="cell100 column3">Professor</th>
                  <th class="cell100 column4">Title</th>
                  <!-- <th class="cell100 column5"></th> -->
                </tr>
              </thead>
            </table>
          </div>

          <div class="table100-body js-pscroll">
            <table>
              
              <tbody>
              <?php
                                       // $link = mysqli_connect('localhost', 'root', '', 'ugacademics') or die('Error connecting to mysqli sever');
                                        $link = mysqli_connect('remotemysql.com', 'NFQ7BMypRh', 'J1oIPYSZ1Q', 'NFQ7BMypRh') or die('Error connecting to mysqli sever');
                                        $query = "SELECT * FROM proj_info WHERE Project_ID IN ($f, $s, $t)";
                                        $result = mysqli_query($link, $query) or die('Error connecting to database');
                                        while ($row = mysqli_fetch_array($result)) {
                                            $id = $row['Project_ID'];
                                            $department = $row['Department'];
                                            $prof = $row['Professor_Name'];
                                            $title = $row['Title'];
                                            $description = $row['Description'];
                                            $eligibility = $row['CPI_Eligibility'];
                                            $students_req = $row['Number_Of_Students'];
                                            $year = $row['Minimum_Year_Of_Study'];


                                            $other_prereq = $row['Prerequisites'];
                                            $duration = $row['Duration'];
                                            $what_to_learn = $row['Learning_Outcome'];
                                            $selection = $row['Selection_Process'];
                                            echo '<tr class="row100 body">
      <td class="cell100 column1"><strong>' . $department . '</strong></td>
      <td class="cell100 column2">' . $id . '</td>
      <td class="cell100 column3">' . $prof . '</td>
      <td class="cell100 column4"><a style="color:#D2691E;" href="project.php?param=' . $id . '">' . $title . '</a></td>      
    </tr>';
                                        }

                                        ?>
                <!-- <tr class="row100 body">
                  <td class="cell100 column1">{{i.roll}}</td>
                  <td class="cell100 column2">{{i.name}}</td>
                  <td class="cell100 column3">{{i.dept}}</td>
                  <td class="cell100 column4">{{i.hostel}}</td>
                  <td class="cell100 column5"><button class="btn" onclick="dataDelete({{i.id}})"><i
                        class="fa fa-trash"></i></button> &nbsp;
                    <button class="btn button" id="button" data-modal="modalOne" onmouseover="dataEdit({{i.id}})"><i
                        class="fa fa-edit"></i></button>
                  </td>
                </tr> -->
              </tbody>
              <!-- {% endfor %} -->
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

    <!-- Optional JavaScript; choose one of the two! -->
      <!--===============================================================================================-->
  <script src="static/vendor/jquery/jquery-3.2.1.min.js"></script>
  <!--===============================================================================================-->
  <script src="static/vendor/bootstrap/js/popper.js"></script>
  <script src="static/vendor/bootstrap/js/bootstrap.min.js"></script>
  <!--===============================================================================================-->
  <script src="static/vendor/select2/select2.min.js"></script>
  <!--===============================================================================================-->
  <script src="static/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
  <script src="static/js/main.js"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script> -->

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script> -->
   
  </body>
</html>