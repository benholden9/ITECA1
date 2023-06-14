<?php
// Database configuration
$dbhost = "ITECA";
$dbuser = "root";
$dbpass = "Snowyholden9!";
$dbname = "userdatabase";

// Attempt to establish a connection to the database
if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
	
	die("Failed to establish connection!");

}
else{
	// If connection is successful, display a success message
	echo("Connection has been established!");
}
?>