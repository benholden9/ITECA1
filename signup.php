<?php
session_start();

	include("connection.php");
	include("functions.php");
	
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		// Get form input values
		$username = $_POST['username'];
		$FirstName = $_POST['FirstName'];
		$LastName = $_POST['LastName'];
		$password = $_POST['password'];
	
		if(!empty($username) && !empty($FirstName) && !empty($LastName) && !empty($password) && !is_numeric($username) && !is_numeric($FirstName) && !is_numeric($LastName))
		{
			// Generate a unique user ID
			$user_id = random_num(20);
			// Prepare the SQL query to insert user data into the database
			$query = "INSERT INTO users (user_id, username, FirstName, LastName, password) VALUES (?, ?, ?, ?, ?)";
			
			if($stmt = $con->prepare($query)) {
			    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

				// Hash the password for security
			    $stmt->bind_param("sssss", $user_id, $username, $FirstName, $LastName, $hashed_password);

			    if($stmt->execute()) {
			        // User data successfully inserted into the database, redirect to the login page
			        header("Location: login.php");
			        die;
			    } else {
			        // Failed to insert data
			        echo "Something went wrong. Please try again later.";
			    }
			} else {
			    // Failed to prepare the statement
			    echo "Something went wrong. Please try again later.";
			}
		}else
		{
			echo("Please enter some valid information!");
		}
	}	
?>