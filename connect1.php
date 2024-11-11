
<?php
ob_start();

$dbhost='remotemysql.com';
$dbname = 'NFQ7BMypRh';	
$dbuser = 'NFQ7BMypRh';
$dbpasswd = 'J1oIPYSZ1Q';

// $dbhost='localhost';
// $dbname = 'ugacademics';	
// $dbuser = 'root';
// $dbpasswd = '';
$link = mysqli_connect($dbhost, $dbuser, $dbpasswd, $dbname) or die ("Not able to connect" . mysqli_error($link));
#mysql_select_db($dbname, $link) or die ("Query for database failed : " . mysqli_error($link));
?>
