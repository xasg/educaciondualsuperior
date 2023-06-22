

<?php
/*$servername = "localhost";
$dbname = "educaciondual";
$username = "root";
$password = ""; */

$servername = "ec2-18-216-120-87.us-east-2.compute.amazonaws.com";
$dbname = "educacion_dual";
$username = "fese";
$password = "Ws.666.AdQe";

$mysqli = new mysqli($servername, $username, $password, $dbname);
$result ='';
if( $mysqli->connect_errno )
{
  echo '';
  exit;
}
?>

