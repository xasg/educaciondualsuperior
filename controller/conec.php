

<?php
 $servername = "localhost";
 $dbname = "educacion_dual";
 $username = "fese";
 $password = "Ws.666.AdQe"; 

//$servername = "localhost";
//$dbname = "educaciondual";
//$username = "root";
//$password = "";  

$mysqli = new mysqli($servername, $username, $password, $dbname);
$result ='';
if( $mysqli->connect_errno )
{
  echo 'error en la conexion ';
  exit;
}
?>

