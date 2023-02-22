<?php
error_reporting(E_ALL);
require_once('../controller/conec.php');
$mysqli = new mysqli($servername, $username, $password, $dbname);
$result ='';
if( $mysqli->connect_errno )
{
  echo '';
  exit;
}



function view_entidad()
{
  global $mysqli;
  $sql ='SELECT * FROM cat_entidad';
  return $mysqli->query($sql);
  return $result->fetch_assoc();
}


function view_subsistema()
{
  global $mysqli;
   $sql ='SELECT * FROM cat_subsistema';
  return $mysqli->query($sql);
  return $result->fetch_assoc();
}



function crear_usuario($ies, $correo, $password, $est)
{
global $mysqli;
$sql="INSERT INTO usuarios(id_usuario, id_ies, dt_correo, dt_password, dt_tipo) VALUES (null, '{$ies}', '{$correo}', '{$password}', '{$est}')";
$mysqli->query($sql);
}


/** usado para consultar datos de acceso del login **/

function get_user_acces($correo)
{
  global $mysqli;
  $sql = "SELECT * FROM usuarios 
          WHERE dt_correo = '{$correo}'";
  $result = $mysqli->query($sql);
  return $result->fetch_assoc();
}



function  crear_responsable($id_user, $entidad, $ies, $subsistema, $nombre_responsable, $cargo, $telefono, $celular)
{
global $mysqli;
$sql="INSERT INTO responsable(id_responsable, id_usuario, dt_entidad, id_ies, dt_subsistema, dt_nom_responsable, dt_cargo, dt_telefono, dt_celular) 
       VALUES (null, '{$id_user}', '{$entidad}' , '{$ies}', '{$subsistema}', '{$nombre_responsable}', '{$cargo}', '{$telefono}', '{$celular}')";
$mysqli->query($sql);
}


function  update_ies($ies, $subsistema)
{
  global $mysqli;
  $sql = "UPDATE cat_ies SET dt_estatus = '1', dt_subsistema_resp = '{$subsistema}' WHERE id_ies ='{$ies}'";
  $mysqli->query($sql); 

}


function crear_programa($id_ies, $denominacion, $programa_educativo, $inicio, $unidad, $unidad_1, $unidad_2, $unidad_3, $unidad_4, $convn, $convn1, $convn2, $convn3, $convn4, $periodo, $sex_fem, $sex_mas, $egresados_f, $egresados_m)
{
global $mysqli;
$sql="INSERT INTO programa_educativo(id_programa, id_ies, dt_denominacion, dt_programa, dt_inicio, dt_unidad, dt_unidad_1, dt_unidad_2, dt_unidad_3, dt_unidad_4, dt_convenio, dt_convenio1, dt_convenio2, dt_convenio3, dt_convenio4, dt_periodo, dt_num_m, dt_num_f, dt_egresados_f, dt_egresados_m) 
                      VALUES (null, '{$id_ies}', '{$denominacion}', '{$programa_educativo}','{$inicio}',  '{$unidad}', '{$unidad_1}', '{$unidad_2}', '{$unidad_3}', '{$unidad_4}','{$convn}','{$convn1}','{$convn2}','{$convn3}', '{$convn4}', '{$periodo}','{$sex_fem}', '{$sex_mas}', '{$egresados_f}', '{$egresados_m}');";
$mysqli->query($sql);
}



function acces_programas($id)
{
  global $mysqli;
  $sql = "SELECT * FROM programa_educativo 
          WHERE id_usuario = '{$id}'";
  return $mysqli->query($sql);  
  return $result->fetch_assoc();
  $row_cnt = $result->num_rows;
}


function acces_programas2($id)
{
  global $mysqli;
  $sql = "SELECT COUNT(*) AS total FROM programa_educativo 
          WHERE id_usuario = '{$id}'";
  return $mysqli->query($sql);  
  return $result->num_rows($sql);
}


function acces_programa($programa)
{
  global $mysqli;
  $sql = "SELECT * FROM programa_educativo 
          WHERE id_programa = '{$programa}'";
  $result = $mysqli->query($sql);
   return $result->fetch_assoc();
}




function  update_programa($id_programa, $denominacion, $programa_educativo, $inicio, $unidad, $unidad_1, $unidad_2, $unidad_3, $unidad_4, $periodo, $sex_fem, $sex_mas, $egresados_f, $egresados_m)
{
  global $mysqli;
  $sql = "UPDATE programa_educativo SET dt_denominacion = '{$denominacion}', dt_programa = '{$programa_educativo}', dt_inicio = '{$inicio}', dt_unidad = '{$unidad}', dt_unidad_1 = '{$unidad_1}',dt_unidad_2 = '{$unidad_2}',dt_unidad_3 = '{$unidad_3}',dt_unidad_4 = '{$unidad_4}', dt_periodo = '{$periodo}', dt_num_m = '{$sex_mas}', dt_num_f = '{$sex_fem}',  dt_egresados_f = '{$egresados_f}',  dt_egresados_m = '{$egresados_m}' WHERE id_programa ='{$id_programa}' ";
  $mysqli->query($sql); 

}


function  eliminar($programa)
{
global $mysqli;
$sql="DELETE FROM programa_educativo WHERE id_programa ='{$programa}' ";
$mysqli->query($sql);
}






?>