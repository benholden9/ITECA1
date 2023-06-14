<?php
session_start();

	include("connection.php");
	include("functions.php");
	
	// Check if the request method is POST
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
	// Check if the username and password are provided and the username is not numeric
		if(!empty($username) && !empty($password) && !is_numeric($username))
		{
			//Read from database
			$query = "SELECT * FROM users WHERE username = ? LIMIT 1";
			$stmt = $con->prepare($query);
			$stmt->bind_param("s", $username);
			$stmt->execute();
			$result = $stmt->get_result();
		// Check if the user exists in the database
			if($result->num_rows > 0)
			{
				$user_data = $result->fetch_assoc();
			// Verify the password
				if(password_verify($password, $user_data['password']))
				{
					// Set the user ID in the session
					$_SESSION['user_id'] = $user_data['user_id'];
					header("Location : home.html");
					die;
				}	
			}
			// Display an error message for wrong username or password
			echo "Wrong Username or Password";	
		}else
		{
			echo "Wrong Username or Password";
		}
		
	}	
?>
