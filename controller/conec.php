

<?php
$servername = "localhost";
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

