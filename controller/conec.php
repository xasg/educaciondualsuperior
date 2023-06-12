

<?php
$servername = "localhost";
$dbname = "educaciondual";
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

