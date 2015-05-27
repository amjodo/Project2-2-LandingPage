
 <?php
// require config file
//replaced database.php with config.php
    require_once(__DIR__ . "/../model/config.php");
// able to create connection using mysqli object
// all these parameters are in the database.php
// different from the other post(blog post)
// this POST means that we're sending information/data or recive info
    $title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
    $post  = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);
    $date = new DateTime('today');
    $time = new DateTime('America/Los_Angeles');
//gets today's date and stores it in variable
//gets today's time and stores it in variable
// run query to insert things into the table
// sql command starts off with an action/verb
    $query = $_SESSION["connection"]->query("INSERT INTO posts SET title = '$title', post = '$post'");
// use conditional statement to see if it's true or false
// to see we are successful in inserting information into the database
    if($query){
// if success it output with a title
        echo "<p>$title</p>";
        echo "<p>$post</p>";
        echo "Posted on: " . $date->format("M/d/Y") . " at" . $time->format ('g:i');
    }
    else {
// if not successful display an error
        echo "<p>". $_SESSION["connection"]->error . "</p>";
   }
// run query on the connection and close our connection
    