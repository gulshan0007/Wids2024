<?php
// Check if authorization code is received
if (isset($_GET['code']) && isset($_GET['state'])) {
    $auth_code = $_GET['code'];
    $state = $_GET['state'];
    
    // Token Exchange: Convert authorization code to access token
    $token_url = 'https://gymkhana.iitb.ac.in/profiles/oauth/token/';
    
    // Prepare token exchange parameters
    $token_params = [
        'code' => $auth_code,
        'redirect_uri' => 'https://ugac.gymkhana.iitb.ac.in/~Wids-2024/index.php',
        'grant_type' => 'authorization_code'
    ];
    
    // Prepare authentication token (base64 encoded CLIENT_ID:CLIENT_SECRET)
    $auth_token = base64_encode('JjLXbgsU4Au7Dz89tKOXPxnIpOruAa8zKs0ZvwFq:A8ViiIFY6sgLagvZv7OKgb9IeufER8Y7hZySdOOjxmD4O3hJHVm84K4AdbhF0gIUfvmxoeJOWQuKi3vOg5gBL96ISQNMeNiYBbdBUNgzYLRCweLcm2Db4soPIhZbOpoR');
    
    // Make cURL request to token endpoint
    $ch = curl_init($token_url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($token_params));
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Authorization: Basic ' . $auth_token,
        'Content-Type: application/x-www-form-urlencoded'
    ]);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    
    $token_response = curl_exec($ch);
    curl_close($ch);
    
    // Decode token response
    $token_data = json_decode($token_response, true);
    
    if (isset($token_data['access_token'])) {
        // Fetch user profile using access token
        $profile_url = 'https://gymkhana.iitb.ac.in/profiles/user/';
        $ch = curl_init($profile_url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Authorization: Bearer ' . $token_data['access_token']
        ]);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        
        $profile_response = curl_exec($ch);
        curl_close($ch);
        
        $user_profile = json_decode($profile_response, true);
        
        // Start user session
        session_start();
        $_SESSION['user'] = $user_profile;
        $_SESSION['access_token'] = $token_data['access_token'];
        $_SESSION['refresh_token'] = $token_data['refresh_token'];
        
        // Redirect to dashboard or home page
        header('Location: dashboard.php');
        exit();
    } else {
        // Handle token exchange error
        echo "Token exchange failed";
    }
}
?>