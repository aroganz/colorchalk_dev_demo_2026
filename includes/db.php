<?php
// Prevent 500 error by catching the exception
mysqli_report(MYSQLI_REPORT_OFF); 

$host = "localhost";
$user = "Amarnath";           // Updated to your verified name
$pass = "@marnath1969$%"; 
$dbname = "colorchalk_db"; 

$conn = mysqli_connect($host, $user, $pass, $dbname);

if (!$conn) {
    // This will print the error on the screen so we can see it
    die("Database Connection Failed: " . mysqli_connect_error());
}
?>