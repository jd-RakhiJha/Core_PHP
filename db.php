<?php

$host = 'localhost';    
$dbname = 'registration_db';
$username = 'root';    
$password = '';  


$conn = mysqli_connect($host, $username, $password, $dbname);

if (mysqli_connect_errno()) {
    exit('Error connecting to the database: ' . mysqli_connect_error());
}

?>