<?php
//devlopment
//$servername = "localhost";
//$username = "root";
//$password = "";
//$dbname = "booking";

//evlopment
$servername = "remotemysql.com";
$username = "eqjdwWaXPE";
$password = "msiQmSndAM";
$dbname = "eqjdwWaXPE";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if(mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>