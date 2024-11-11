<!DOCTYPE html>
<html>
<head>

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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<div class="container">
  <div class="page-header">
    <h1>Register | <a href="index.php">SURP</a><small> Summer Undergraduate Research Program</small></h1>
</div></div>
    <div class="wrapper">
<?php
session_start();
if (!(isset($_SESSION['ldap_id']))){
	header("location: apply.php");
}
require_once("functions1.php");
include "connect1.php";
if (isset($_POST['register']))
{
echo "hello";	
  $err=0;
  $username=$_POST['roll'];// $_SESSION['ldap_id'];//$_POST['username'];
  $fullname = $_POST['fullname'];
  $roll = $_POST['roll'];
  $email = $_POST['email'];
  $alt_email = $_POST['altemail'];
  $department = $_POST['department'];
  $year_of_study = 2020;//$_POST['year'];
  $mobile = $_POST['mobile'];
  $room = $_POST['room'];
  $cpi = $_POST['cpi'];
//echo $fullname;
  if ($year_of_study==1) {   $experience = mysql_real_escape_string($_POST['experience']);} else {
    $experience = ''; }
	if (!(is_registered($username)))
	{echo "hello";
		register_user($username,$fullname,$roll,$department,$email,$alt_email,$year_of_study,$mobile,$room,$cpi,$experience);
    header("Location:choice.php");
	}
	else 
	{
		//echo "here";  
    $db = mysqli_connect("10.105.177.5", "ugacademics", "ug_acads","ugacademics");
    
    #mysql_select_db("ugacademics");
    mysqli_query($link, "UPDATE surp_registered SET fullname='$fullname', roll='$roll', department='$department', 
    year_of_study='$year_of_study', room='$room', mobile='$mobile', email='$email',
    alt_email='$alt_email', cpi='$cpi', first_year_exp='$experience' WHERE username='$username'") or die (mysql_error());
    
    //echo "q";
    header("Location:choice.php");


	}
	
}
/*
$info = ldap_find_all('uid',$_SESSION['ldap_id']);
//print_r($info);
$fullname = $info[0]["cn"][0];
$username=$info[0]['uid'][0];
$roll = $info[0]["employeenumber"][0];
$dep = explode(",",$info[0]["dn"]);
$alldepartment = explode("=",$dep[2]);
$mydepartment=$alldepartment[1];
$alldepartments =  DepartmentFindAll();
$email=$info[0]["mail"][0];
$alternate_email=$info[0]['mailforwardingaddress'][0];
$year = explode('/',$info[0]["mailmessagestore"][0]);
$year_of_study=2020-$year[2];

*/
?>

<form class="form-register" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">       
<h2 class="form-signin-heading">Register</h2>
<label class="form-control">Full Name *  
<input type="text" class="form-control" style="font-weight:normal;" name="fullname" readonly placeholder="Update this on SSO and relogin" required autofocus="" value='<?php echo $_SESSION['name'];?>' />
</label>  

<label class="form-control">Roll Number *    
<input type="text" class="form-control" name="roll" style="font-weight:normal;" readonly placeholder="Update this on SSO and relogin" required autofocus="" value='<?php echo $_SESSION['rollno'];?>' />
</label>

<label class="form-control">Email *
<input type="text" class="form-control" name="email" style="font-weight:normal;" readonly placeholder="Update this on SSO and relogin" required autofocus="" value ='<?php echo $_SESSION['email'];?>' /></label>   
</label>       

<label class="form-control">Alternate Email 
<input type="text" class="form-control" name="altemail" style="font-weight:normal;" placeholder="Enter Your Alternate Email if any" autofocus="" value ='<?php echo $alternate_email;?>' />
</label>   
<!--
<label class="form-control">Year *
<?php if ($year_of_study != 1) { ?> <input type="text" style="font-weight:normal;" class="form-control" name="year" placeholder="Year *" required="" autofocus="" value ='<?php echo $year_of_study;?>' />
<?php } else { ?> <input type="hidden" name="year" value = '1'> <?php }?>
</label>  
-->       
<label class="form-control">Hostel *
<input readonly type="text" class="form-control" name="hostel" style="font-weight:normal;" placeholder="Update this on SSO and relogin" required autofocus="" value ='<?php echo $_SESSION['hostel_name'];?>' />
</label>  

<label class="form-control">Room No *
<input readonly type="text" class="form-control" style="font-weight:normal;" name="room" placeholder="Update this on SSO and relogin" required autofocus="" value ='<?php echo $_SESSION['room_no'];?>' />
</label>  

<label class="form-control">Mobile *
<input type="text" class="form-control"readonly name="mobile" style="font-weight:normal;" placeholder="Update this on SSO and relogin"  autofocus="" value ='<?php echo $_SESSION['mobile'];?>'/>
</label>

<label class="form-control">Department *<!--<select name="department" class="form-control">
<?php 

foreach ($alldepartments as $key=>$value){
  if ($value['value']!=$mydepartment){
    
  echo "<option value='" . $value['value']. "'>".$value['department']."</option>";
  }
  else {
    echo "<option value='" . $value['value']. "' selected='selected'>".$value['department']."</option>";}   
}?>-->
 <input type="text" style="font-weight:normal;" class="form-control" name="department" readonly placeholder="Department *" required autofocus="" value ='<?php echo $_SESSION['department'];?>'/>
</label>

<label class="form-control">CPI*
<input type="text" class="form-control" name="cpi" placeholder="Enter your CPI" required style="font-weight:normal;" autofocus="" />
<?php
if ($year_of_study == 1) { echo '
<textarea class="form-control" maxlength="1000" style="resize:none;height:170px;" name="experience" placeholder="Notable first-year experience"></textarea>';}
?>
</label>



<label class="form-control">Preference 1*
<input type="text" class="form-control" name="PreferenceID1" placeholder="Preference ID 1" required=""style="font-weight:normal;" autofocus="" />
<input type="text" class="form-control" name="ProfName1" placeholder="Professor Name 1" required=""style="font-weight:normal;" autofocus="" />
<input type="text" class="form-control" name="ProfDept1" placeholder="Department of Professor 1" required=""style="font-weight:normal;" autofocus="" />
<input type="text" class="form-control" name="ProjectTitle1" placeholder="Title of Project 1" required=""style="font-weight:normal;" autofocus="" />
<input type="text" class="form-control" name="SOP1" placeholder="Enter Link of SoP 1" required=""style="font-weight:normal;" autofocus="" />
</label>

<label class="form-control">Preference 2
<input type="text" class="form-control" name="PreferenceID2" placeholder="Preference ID 2" style="font-weight:normal;" autofocus="" />
<input type="text" class="form-control" name="ProfName2" placeholder="Professor Name 2" style="font-weight:normal;" autofocus="" />
<input type="text" class="form-control" name="ProfDept2" placeholder="Department of Professor 2" style="font-weight:normal;" autofocus="" />
<input type="text" class="form-control" name="ProjectTitle2" placeholder="Title of Project 2" style="font-weight:normal;" autofocus="" />
<input type="text" class="form-control" name="SOP2" placeholder="Enter Link of SoP 2" style="font-weight:normal;" autofocus="" />
</label>

<label class="form-control">Preference 3
<input type="text" class="form-control" name="PreferenceID3" placeholder="Preference ID 3" style="font-weight:normal;" autofocus="" />
<input type="text" class="form-control" name="ProfName3" placeholder="Professor Name 3" style="font-weight:normal;" autofocus="" />
<input type="text" class="form-control" name="ProfDept3" placeholder="Department of Professor 3" style="font-weight:normal;" autofocus="" />
<input type="text" class="form-control" name="ProjectTitle3" placeholder="Title of Project 3" style="font-weight:normal;" autofocus="" />
<input type="text" class="form-control" name="SOP3" placeholder="Enter Link of SoP 3" style="font-weight:normal;" autofocus="" />
</label>


      
      <input type="checkbox" name="purview" value="1" required> I have read the SURP rule book and agree to terms and conditions mentioned*<br>
     <a href="https://gymkhana.iitb.ac.in/profiles/user/" target="_blank" class="btn btn-lg btn-primary btn-block"> Update SSO Details  </a><br>
<button class="btn btn-lg btn-primary btn-block" type="submit" name="register">Register</button>   
    </form>
		 </div>

		
</body>

</html>
<script>
var $form = $('form#form-register'),
    url = 'https://script.google.com/macros/s/AKfycbwdRT4-Nc2oDzK27ZUyKApf1rZIcKi702XUgSDz7bg2_gYa0kg/exec'

function send(e) {
console.log("ok");
  e.preventDefault();
  var jqxhr = $.ajax({
    url: url,
    method: "GET",
    dataType: "json",
    data: $form.serializeObject()
  }).success(
    // do something
  );
});
</script>

