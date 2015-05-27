<?php   
    // require header place on the top
    // place the footer on the bottom
    // navigation and other files go in between
    // inserting html code into this header and footer file
    // call on header using require once instead of writing the html code
    //require_once(__DIR__ . "/controller/login-verify.php");  
    require_once(__DIR__ . "/view/header.php");  
    //if (authenticateUser()) {
         require_once(__DIR__ . "/view/navigation.php");
    //}
    require_once(__DIR__ . "/controller/create-db.php"); 
    require_once(__DIR__ . "/view/footer.php"); 
    //require_once(__DIR__ . "/controller/read-post.php");  
?>
