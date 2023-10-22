<?php
$servername="localhost";
$username="root";
$password="";
$dbname="Finalyearproject";

$conn = mysqli_connect($servername,$username,$password,$dbname);
if ($conn){
	//echo "connection suceesful";
}
else{
	echo "connection failed".mysqli_connect_error;
}

?>
