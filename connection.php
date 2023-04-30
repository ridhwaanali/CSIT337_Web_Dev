<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'super');
define('DB_PASSWORD', 'super');
define('DB_NAME', 'csit101');

/* Attempt to connect to MySQL database */
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>