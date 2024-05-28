

<?php


$servername = "localhost";
$dbname = "educacion_dual";
$username = "root";
$password = "";

$mysqli = new mysqli($servername, $username, $password, $dbname);
$result ='';
if( $mysqli->connect_errno )
{
  echo '';
  exit;
}
?>

