<?php

// //logout.php

// include('config.php');

// //Reset OAuth access token
// $google_client->revokeToken();

// //Destroy entire session data.
// session_start();
// session_unset();
// session_destroy();

// //redirect page to index.php
// header('location:index.php');
// exit();
// ?>

<?php
function revokeToken($token) {
    $revoke_url = 'https://gymkhana.iitb.ac.in/profiles/oauth/revoke_token/';
    
    $revoke_params = [
        'token' => $token,
        'client_id' => 'JjLXbgsU4Au7Dz89tKOXPxnIpOruAa8zKs0ZvwFq',
        'client_secret' => 'A8ViiIFY6sgLagvZv7OKgb9IeufER8Y7hZySdOOjxmD4O3hJHVm84K4AdbhF0gIUfvmxoeJOWQuKi3vOg5gBL96ISQNMeNiYBbdBUNgzYLRCweLcm2Db4soPIhZbOpoR'
    ];
    
    $ch = curl_init($revoke_url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($revoke_params));
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/x-www-form-urlencoded'
    ]);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    
    curl_exec($ch);
    curl_close($ch);
    
    // Destroy session
    session_start();
    session_destroy();
    
    header('Location: index.php');
    exit();
}

// Call this when logging out
revokeToken($_SESSION['access_token']);