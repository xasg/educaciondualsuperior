<?php
$servername="localhost";
$username="fese";
$password="Ws.666.AdQe";
$dbname="educacion_dual";

$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
	die("Connection Failed".$conn->connect_error);
}else{
	
}

?>