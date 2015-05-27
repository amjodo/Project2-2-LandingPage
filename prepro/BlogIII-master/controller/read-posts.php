<?php
	require_once(__DIR__ . "/../model/config.php");
//slecting from posts table
	$query = "SELECT * FROM posts";
	$result = $_SESSION["connection"]->query($query);
//retrieve posts from database
	if($result){
		while($row = mysqli_fetch_array($result)) {
			echo "<div class='post'>";
			echo "<h2>" . $row['title'] . "</h2>";
			echo "<br />";
			echo "<p>" .$row['post'] . "</h1>";
			echo "<br/>";
			echo "</div>";	
			
		}
	}	