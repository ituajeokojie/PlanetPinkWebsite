<?php
$servername = "localhost";
$username = "root";
$password = "YES";
$db_name = "planetpink";  
$conn = new mysqli($servername, $username, $password, $db_name);
if($conn->connect_error){
	die("Connection failed".$conn->connect_error);
}
echo " ";

?>