<?php

    require_once(__DIR__ . "/../model/config.php");

    $username  = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
    $password  = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);

    $query = $_SESSION["connection"]->query("SELECT salt, password FROM users WHERE username = '$username'");

    if ($query->num_rows == 1) {
         $row = $query->fetch_array();

         if ($row["password"] === crypt($password, $row["salt"])) {

            //********************************

            // if login then go todo list

            //*******************

         	 $_SESSION["authenticated"] = true;

             header("Location: " . $path . "todo.php");

         	 //echo "<p>Login Successful!</p>";
         }
         else {
         	 //echo "<p>Invalid username and password</p>";
             //header("Location: " . $path . "index.php");
         }
    }
    else {
    	//echo "<p>Invalid username and password</p>";
        header("Location: " . $path . "index.php");
    }


