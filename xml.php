<?php
// require("db.php");
require("controller/conecmapa.php");

function parseToXML($htmlStr)
{
$xmlStr=str_replace('<','&lt;',$htmlStr);
$xmlStr=str_replace('>','&gt;',$xmlStr);
$xmlStr=str_replace('"','&quot;',$xmlStr);
$xmlStr=str_replace("'",'&#39;',$xmlStr);
$xmlStr=str_replace("&",'&amp;',$xmlStr);
return $xmlStr;
}

$query = $conexion->prepare("SELECT * FROM info_ies ;");

$query->execute();
if (!$query) {
  die('Invalidproyecto query: ' . mysqli_error());
}

header("Content-type: text/xml");
echo "<?xml version='1.0' ?>";
echo '<markers>';
$ind=0;

foreach($query as $row){
  $id_ies = $row['id_ies'];
  $sql2 = $conexion->prepare( "SELECT * FROM cat_ies where id_ies = '{$id_ies}'");
  $sql2->execute();
  $ies = $sql2;

  foreach($ies as $row1){
    $iesnombre = $row1['dt_nombre_ies'];
  }
  $sentencia = $conexion->prepare("SELECT * FROM `info_ies` inner JOIN responsable on responsable.id_ies = info_ies.id_ies where info_ies.id_ies = '{$id_ies}'");
  $sentencia->execute();

  $datosresponsable = $sentencia;

  foreach($datosresponsable as $row2){
    $nombreresponsable =  $row2['dt_nom_responsable'];
    $cargo =  $row2['dt_cargo'];
    $telefono =  $row2['dt_telefono'];
    $email =  $row2['dt_email'];
  }

  echo '<marker ';
  echo 'idmapa="' . $row['id_info_ies'] . '" ';
  echo 'institucion="' . $iesnombre . '" ';
  echo 'responsable="' . $nombreresponsable . '" ';
  echo 'cargo="' . $cargo . '" ';
  echo 'telefono="' . $telefono . '" ';
  echo 'email="' . $email . '" ';
  // echo 'descripcion="' . parseToXML($row['dt_control']) . '" ';
  echo 'lat="' . $row['dt_latitud'] . '" ';
  echo 'lng="' . $row['dt_longitud'] . '" ';
  echo '/>';
  $ind = $ind + 1;
}
echo '</markers>';

?>

