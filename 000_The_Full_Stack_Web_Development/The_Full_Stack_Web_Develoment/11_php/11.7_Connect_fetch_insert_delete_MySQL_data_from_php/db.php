<?php

// Connect to MySQL
$conn = mysqli_connect('localhost', 'root', getenv('MYSQL_ROOT_PASSWD'), 'messageapp');

// Test Connection

if(mysqli_connect_errno()){
	echo 'DB Connection Error: '.mysqli_connect_error();
}