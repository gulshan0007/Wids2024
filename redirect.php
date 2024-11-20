<?php
session_start();

// Configuration
$api_url = 'https://sso.tech-iitb.org';

// Handle SSO callback
if (isset($_GET['accessid'])) {
    $token = $_GET['accessid'];
    
    // Make API call to verify token and get user data
    $data = ['id' => $token];
    $options = [
        'http' => [
            'header' => [
                "Content-Type: application/json",
                "Accept: application/json"
            ],
            'method' => 'POST',
            'content' => json_encode($data)
        ]
    ];
    
    $context = stream_context_create($options);
    $response = file_get_contents($api_url . '/project/getuserdata', false, $context);
    
    if ($response === FALSE) {
        // Handle API error
        session_destroy();
        header('Location: index.php?error=api_error');
        exit();
    }
    
    $user_data = json_decode($response, true);
    
    if (isset($user_data['error'])) {
        session_destroy();
        header('Location: index.php?error=' . urlencode($user_data['error']));
        exit();
    }
    
    // Store user data in session with unique keys
    $_SESSION['index_name'] = $user_data['name'] ?? '';
    $_SESSION['index_roll'] = $user_data['rollno'] ?? '';
    $_SESSION['index_branch'] = $user_data['branch'] ?? '';

    header('Location: index.php');
    exit();
} else {
    // No token provided
    header('Location: index.php?error=no_token');
    exit();
}
