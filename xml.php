<?php
require("db.php");

function parseToXML($htmlStr)
{
$xmlStr=str_replace('<','&lt;',$htmlStr);
$xmlStr=str_replace('>','&gt;',$xmlStr);
$xmlStr=str_replace('"','&quot;',$xmlStr);
$xmlStr=str_replace("'",'&#39;',$xmlStr);
$xmlStr=str_replace("&",'&amp;',$xmlStr);
return $xmlStr;
}


$query = "SELECT * FROM mapa;";
$result = mysqli_query($conn,$query);
if (!$result) {
  die('Invalidproyecto query: ' . mysqli_error());
}

header("Content-type: text/xml");


echo "<?xml version='1.0' ?>";
echo '<markers>';
$ind=0;

while ($row = @mysqli_fetch_assoc($result)){

  echo '<marker ';
  echo 'idmapa="' . $row['id_mapa'] . '" ';
   echo 'id_usuario="' . $row['id_usuario'] . '" ';
  echo 'dt_ies="' . $row['dt_nombre_ies'] . '" ';
  echo 'dt_programas="' . $row['programas_educativos'] . '" ';
  echo 'dt_unidades="' . $row['unidad_economica'] . '" ';
  echo 'dt_estudiantes="' . $row['estudiantes'] . '" ';
  echo 'dt_egresados="' . $row['egresados'] . '" ';
  echo 'dt_responsable="' . parseToXML($row['dt_nom_responsable']) . '" ';
  echo 'dt_email="' . parseToXML($row['dt_correo']) . '" ';
  echo 'latitud="' . $row['dt_latitud'] . '" ';
  echo 'longitud="' . $row['dt_longitud'] . '" ';
  echo '/>';
  $ind = $ind + 1;
}


echo '</markers>';

?>
