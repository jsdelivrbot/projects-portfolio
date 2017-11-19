<?php

$server     = "localhost";
$username   = "root";
$password   = getenv('MYSQL_ROOT_PASSWD');
$db         = "login_app";

// Create a connection
$conn = mysqli_connect( $server, $username, $password, $db );

// Check connection
if (!$conn) {
    die( "Connection failed: " . mysqli_connect_error() );
}

// echo "Connected successfully!";

?>
