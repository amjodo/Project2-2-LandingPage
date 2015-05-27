<?php 

$mysqli = new mysqli('localhost' , 'root' , 'root' , 'todo_demo2');
if ($mysqli->connect_error) {
	die('Connect Error(' . $mysqli->connect_error . ')' 
	. $mysqli->connect_error);
}else{
	//echo "Connection Made";

}
$mysqli->close();
?>