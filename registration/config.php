<?php

//Connecting to Database..

$db_servername = "localhost";
$db_user = "root";
$db_password = "Thulasivasan@321";
$db_name = "guvi";

// Create a Connection..

$connection = new mysqli($db_servername,$db_user,$db_password,$db_name);

if($connection->connect_error){
	echo "Not_Connected";
}
else {
	//echo "Connected to database <br>";

}
?>


