<?php
function refreshAccessToken($refresh_token) {
    $refresh_url = 'https://gymkhana.iitb.ac.in/profiles/oauth/token/';
    
    $refresh_params = [
        'refresh_token' => $refresh_token,
        'grant_type' => 'refresh_token'
    ];
    
    $auth_token = base64_encode('JjLXbgsU4Au7Dz89tKOXPxnIpOruAa8zKs0ZvwFq:A8ViiIFY6sgLagvZv7OKgb9IeufER8Y7hZySdOOjxmD4O3hJHVm84K4AdbhF0gIUfvmxoeJOWQuKi3vOg5gBL96ISQNMeNiYBbdBUNgzYLRCweLcm2Db4soPIhZbOpoR');
    
    $ch = curl_init($refresh_url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($refresh_params));
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Authorization: Basic ' . $auth_token,
        'Content-Type: application/x-www-form-urlencoded'
    ]);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    
    $refresh_response = curl_exec($ch);
    curl_close($ch);
    
    return json_decode($refresh_response, true);
}

// Usage in protected pages
session_start();
if (time() > $_SESSION['token_expiry']) {
    $new_tokens = refreshAccessToken($_SESSION['refresh_token']);
    $_SESSION['access_token'] = $new_tokens['access_token'];
    $_SESSION['refresh_token'] = $new_tokens['refresh_token'];
    $_SESSION['token_expiry'] = time() + 36000; // 10 hours
}