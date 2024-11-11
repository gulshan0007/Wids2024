<?php
session_start();
require_once 'sso_handler.php';

$CLIENT_ID='RFS6RiMchDIhMN3CIskA5HtMA1FRJnrjqk79DVaK';
$CLIENT_SECRET='P1o9zrsYChU5ZH9BWmjX2Gc57Jnj2mQr7jpSI4dUqPwZ30CFtl5nMpHIXiUn1NtOZ35dOdhBDI3ZrLNVzAihNV403A5Jv5dLQ1B9ZSTVCaHb7DPsrgZ44jOmwEcHMPcJ';
echo "hi";
//$required_fields = array('username', 'email', 'roll_number');
//$state = 'user_login';
$response_type = 'code';
$permissions = 'basic profile ldap secondary_emails program phone';
$REDIRECT_URI = 'https://ugac.gymkhana.iitb.ac.in/~Wids-2023/login.php';
$sso_handler = new SSOHandler($CLIENT_ID, $CLIENT_SECRET);
$required_scopes=array('basic', 'profile', 'ldap', 'secondary_emails', 'program', 'phone');
$required_fields = array('first_name', 'last_name', 'username', 'roll_number', 'email', 'secondary_emails', 'contacts');

if ($sso_handler->validate_code($_GET) && $sso_handler->validate_state($_GET)) {
echo "hello";
  $response = $sso_handler->default_execution($_GET, $REDIRECT_URI,$required_scopes,$required_fields);
}

 if (!isset($response['error']) && isset($response['access_information']) && isset($response['user_information'])) {
    echo "hello";
	//echo $response['user_information'][0];
echo '<pre>'; print_r($response['access_information']); echo '</pre>';
echo '<pre>'; print_r($response['user_information']); echo '</pre>';

$access_token=$response['access_information']['access_token'];

# User Details:
$_SESSION['name'] = $response['user_information']['first_name']." ".$response['user_information']['last_name']; // Name
$_SESSION['rollno'] = $response['user_information']['roll_number']; // Roll Number
$_SESSION['email'] = $response['user_information']['email']; // IITB Email
$_SESSION['ldap'] = $response['user_information']['username']; // LDAP ID
$_SESSION['email2'] = $response['user_information']['secondary_emails']; // (Possibly gmail ids)
$_SESSION['phno'] = $response['user_information']['contacts'][0]['number'];// Extracting the first phone number


echo $access_token;

header("Location: index.php");


}
?>
