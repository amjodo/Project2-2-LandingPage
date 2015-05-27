<?php
	require_once(__DIR__ . "/../model/config.php");
	//gains acess to database
	$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);	
	$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);
	//select proper user from database
	//where database connection is being stored
	//running query on database connection
	$query = $_SESSION["connection"]->query("SELECT salt, password FROM users WHERE username = '$username'");
	//being selected by the query
	if($query->num_rows == 1) {
		$row = $query->fetch_array();

		if($row["password"] === crypt($password, $row["salt"])) {
			$_SESSION["authenticated"] = true;
			//saying user has logged in
			echo "<p> Login was successful</p>";
		}
		else {
			echo "<p>Invalid username and password</p>";
		}
		
	}
	
	//check if information was stored, get array store into row
?>	
<html>
<head>
		<link rel="stylesheet" type="text/css" href="main.css">
		<link href='http://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
		<meta charset="UTF-8"> 
	 <title> Created User</title>
</head>
<button type="button"><a href="blog.php">Home</a></button>
