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

function rep_ies()
{
  global $mysqli;
 $sql = "SELECT COUNT(DISTINCT dt_nombre_ies) AS ies
   FROM usuarios
   LEFT JOIN responsable ON(responsable.id_usuario=usuarios.id_usuario)
   LEFT JOIN cat_ies ON(cat_ies.id_ies=usuarios.id_ies)
   LEFT JOIN cat_subsistema ON(cat_subsistema.id_cat_subsistema = cat_ies.id_cat_subsistema)
   LEFT JOIN cat_entidad ON(cat_entidad.id_cat_entidad = responsable.dt_entidad)
   LEFT JOIN programa_educativo ON(programa_educativo.id_usuario = responsable.id_usuario)
   LEFT JOIN unidad_educativa ON(programa_educativo.id_programa = unidad_educativa.id_programa_educativo)
   where usuarios.dt_tipo=2 AND nombre_entidad IS  NOT NULL";
  $result = $mysqli->query($sql);
  return $result->fetch_assoc();
}


function rep_programas()
{
  global $mysqli;
 $sql = "SELECT COUNT(DISTINCT programa_educativo.id_programa) as programas
   FROM usuarios
   LEFT JOIN responsable ON(responsable.id_usuario=usuarios.id_usuario)
   LEFT JOIN cat_ies ON(cat_ies.id_ies=usuarios.id_ies)
   LEFT JOIN cat_subsistema ON(cat_subsistema.id_cat_subsistema = cat_ies.id_cat_subsistema)
   LEFT JOIN cat_entidad ON(cat_entidad.id_cat_entidad = responsable.dt_entidad)
   LEFT JOIN programa_educativo ON(programa_educativo.id_usuario = responsable.id_usuario)
   LEFT JOIN unidad_educativa ON(programa_educativo.id_programa = unidad_educativa.id_programa_educativo)
   where usuarios.dt_tipo=2 AND nombre_entidad IS  NOT NULL";
  $result = $mysqli->query($sql);
  return $result->fetch_assoc();
}

function rep_estudiantes()
{
  global $mysqli;
 $sql = "SELECT SUM(unidad_educativa.dt_estudiante_fem + unidad_educativa.dt_estudiante_mas) as estudiantes
   FROM usuarios
   LEFT JOIN responsable ON(responsable.id_usuario=usuarios.id_usuario)
   LEFT JOIN cat_ies ON(cat_ies.id_ies=usuarios.id_ies)
   LEFT JOIN cat_subsistema ON(cat_subsistema.id_cat_subsistema = cat_ies.id_cat_subsistema)
   LEFT JOIN cat_entidad ON(cat_entidad.id_cat_entidad = responsable.dt_entidad)
   LEFT JOIN programa_educativo ON(programa_educativo.id_usuario = responsable.id_usuario)
   LEFT JOIN unidad_educativa ON(programa_educativo.id_programa = unidad_educativa.id_programa_educativo)
   where usuarios.dt_tipo=2 AND nombre_entidad IS  NOT NULL ";
  $result = $mysqli->query($sql);
  return $result->fetch_assoc(); 
}

function rep_egresados()
{
  global $mysqli;
 $sql = "SELECT SUM(unidad_educativa.dt_egresados_fem + unidad_educativa.dt_egresados_mas) as egresados
   FROM usuarios
   LEFT JOIN responsable ON(responsable.id_usuario=usuarios.id_usuario)
   LEFT JOIN cat_ies ON(cat_ies.id_ies=usuarios.id_ies)
   LEFT JOIN cat_subsistema ON(cat_subsistema.id_cat_subsistema = cat_ies.id_cat_subsistema)
   LEFT JOIN cat_entidad ON(cat_entidad.id_cat_entidad = responsable.dt_entidad)
   LEFT JOIN programa_educativo ON(programa_educativo.id_usuario = responsable.id_usuario)
   LEFT JOIN unidad_educativa ON(programa_educativo.id_programa = unidad_educativa.id_programa_educativo)
   where usuarios.dt_tipo=2 AND nombre_entidad IS  NOT NULL";
  $result = $mysqli->query($sql);
  return $result->fetch_assoc();
}

function rep_unidad()
{
  global $mysqli;
 $sql = "SELECT COUNT(unidad_educativa.id_programa_educativo) as unidad
   FROM usuarios
   LEFT JOIN responsable ON(responsable.id_usuario=usuarios.id_usuario)
   LEFT JOIN cat_ies ON(cat_ies.id_ies=usuarios.id_ies)
   LEFT JOIN cat_subsistema ON(cat_subsistema.id_cat_subsistema = cat_ies.id_cat_subsistema)
   LEFT JOIN cat_entidad ON(cat_entidad.id_cat_entidad = responsable.dt_entidad)
   LEFT JOIN programa_educativo ON(programa_educativo.id_usuario = responsable.id_usuario)
   LEFT JOIN unidad_educativa ON(programa_educativo.id_programa = unidad_educativa.id_programa_educativo)
   where usuarios.dt_tipo=2 AND nombre_entidad IS  NOT NULL";
  $result = $mysqli->query($sql);
  return $result->fetch_assoc();
}

?>