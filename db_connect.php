<?php 
    // // connect to database
    // $conn = mysqli_connect ('localhost', 'root', '', 'wids') or die($conn_error);
    // $query = "SELECT * FROM projects_info"; // $conn = mysqli_connect ('localhost', 'root', '', 'wids') or die($conn_error);
    // $query = "SELECT * FROM projects_info";
    
    $conn = mysqli_connect('10.198.49.5', 'ugacademics', 'zsVgOLEGSxewJbgk', 'ugacademics_wids_2023');
    $query = "SELECT * FROM proj_info";

    
    if(!$conn){
        echo "database connection error" . mysqli_connect_error();
    } 
    // else {
    //     echo "connection successful";
    // }
?>