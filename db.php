<?php
$servername="localhost:3310";
$username="root";
$password="";
$dbname="dual";

$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
	die("Connection Failed".$conn->connect_error);
}else{
	
}

?>