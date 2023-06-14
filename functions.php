<?php

// Function to check if a user is logged in
function check_login($con)
{

// Check if user_id session variable is set
	if(isset($_SESSION['user_id']))
	{

// Escape the user_id to prevent SQL injection
		$id = mysqli_real_escape_string($con, $_SESSION['user_id']);

// Query to fetch user data from the database based on user_id
		$query = "select * from users where user_id = '$id' limit 1";

		$result = mysqli_query($con,$query);

// Check if the query was successful and if a matching user was found
		if($result && mysqli_num_rows($result) > 0)
		{

// Fetch the user data as an associative array
			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}	
	}

// If user is not logged in or user data not found, redirect to login page
	header("Location: login.php");
	die;
}

// Function to generate a random number
function random_num($length)
{
	if($length < 5)
	{
		$length = 5;
	}	
	
	$text = "";
	$len = rand(4,$length);
	
	for ($i=0; $i < $len; $i++) {
		$text .= rand(0,9);
	}
	
	return $text;
}

?>
