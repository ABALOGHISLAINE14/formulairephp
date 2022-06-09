<?php 
$host = "localhost";
$dbname = "message_db";
$username = "root";
$password ="";

$conn = mysqli_connect( $host, 
             $username, 
             $password, 
             $dbname);
if (mysqli_connect_errno()) {
    die("Connection error: " . mysqli_connect_error());
}
?>