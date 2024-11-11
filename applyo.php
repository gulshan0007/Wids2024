<!DOCTYPE html>
<html>

<?php 
session_start();
require_once("functions1.php"); 
if (isset($_GET['logout'])){
session_destroy();
}
?>
<head>

  <meta charset="UTF-8">

  <title>Apply | SURP</title>

	    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
<script src="https://gymkhana.iitb.ac.in/profiles/static/widget/js/login.min.js" type="application/javascript"></script>
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
    <h1>Login | <a href="index.php">SURP</a><small> Summer Undergraduate Research Program</small></h1>
</div></div>
    <div class="wrapper">
      <?php
      
/*$error = false;
      if (isset($_POST['login'])){
  include 'connect.php';
  $username = $_POST['username'];
  $password = mysqli_real_escape_string($link, $_POST['password']);

  if(ldap_auth($username,$password)){
        session_start();
  $_SESSION['ldap_id']=$username; 
    if (!(is_registered($username))){
      header("location: register.php");
       }
    else{
      header("location: choice.php");
    }
  }
  else { $error = true;
      }
} 

mysqli_close($link);
*/

      ?>

      
	<div id="sso-root" style="margin:auto;" align="center"></div>
     <!-- <h2 class="form-signin-heading">Login</h2>
      
      <input type="text" class="form-control" name="username" placeholder="Username" required="" autofocus="" />
      <input type="password" class="form-control" name="password" placeholder="Password" required=""/>      
      <font color="red" size="2px"><?php
 if ($error) { echo 'Wrong username or password!!'; }?> </font>
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Login</button> 
--> 
   


   
  </div>

</body>

 <script type="application/javascript">

        new SSO_JS({
            config: {
                client_id: '5mWSh3Ye197YOEjK2Tt3BdCM6emeRZTQ9VVxjdNs',   // Compulsory
                scope: ['basic','ldap','profile','program','secondary_emails','insti_address','phone'],    // Optional. Default is  ['basic']
                state: '', // Optional. Default None
                response_type: 'code',  // Optional. Default is 'code'
               // redirect_uri: 'https://gymkhana.iitb.ac.in/~ugacademics/courserank/newlogin.php',    //Optional
                sso_root: document.getElementById('sso-root'),
                /* Optional
                 document.getElementById don't work if your element is not in light DOM. In that case you need to
                 provide selector here. In most of the cases this will work.
                 */
            },
            colors: { // All Optional
                button_div_bg_color: '303F9F', // Background color of button
                button_anchor_color: 'FFFFFF', // Font color of Button
                logout_anchor_color: '727272', // Font color of logout mark (The one with 'Login as other user'
            },
        }).init();

    </script>
</html>
