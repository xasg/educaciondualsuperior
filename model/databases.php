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

/** Select **/

function view_entidad()
{
  global $mysqli;
  $sql ='SELECT * FROM cat_entidad';
  return $mysqli->query($sql);
  return $result->fetch_assoc();
}



function acces_programas($id_ies)
{
  global $mysqli;
  $sql = "SELECT programa_educativo.id_programa, programa_educativo.dt_programa,programa_educativo.dt_otro_programa, programa_educativo.dt_inicio,programa_educativo.dt_unidad,programa_educativo.dt_num_periodo, SUM(`dt_estudiante_fem`+`dt_estudiante_mas`) AS estudiantes,  SUM(`dt_egresados_fem`+`dt_egresados_mas`) AS egresados, SUM(`dt_estudiante_cursan_f`+`dt_estudiante_cursan_m`) AS estudiantes2023, COUNT(id_programa_educativo) AS num  FROM programa_educativo 
LEFT JOIN unidad_educativa ON(unidad_educativa.id_programa_educativo=programa_educativo.id_programa) GROUP BY `id_programa`";
  return $mysqli->query($sql);  
  return $result->fetch_assoc();
}



function acces_unidad($id_programa)
{
  global $mysqli;
  $sql = "SELECT * FROM `unidad_educativa` WHERE `id_programa_educativo` =  '{$id_programa}';";
  return $mysqli->query($sql);  
  return $result->fetch_assoc();
}



function acces_programa_educativo($id_ies)
{
  global $mysqli;
  $sql ="SELECT cat_programa_educativo.id_cat_programa_educativo as id_programa, cat_programa_educativo.dt_nombre_programa_educativo as nombre_programa FROM `rel_ies_programa`
LEFT JOIN cat_programa_educativo ON(cat_programa_educativo.id_cat_programa_educativo=rel_ies_programa.id_cat_programa_educativo) 
WHERE `id_ies` IN ('{$id_ies}','2500')";
  return $mysqli->query($sql);
  return $result->fetch_assoc();
}


function acces_nivel_estudios($id_ies)
{
  global $mysqli;
  $sql ="SELECT cat_nivel_estudios.id_cat_nivel_estudios, cat_nivel_estudios.dt_nombre_nivel_estudios FROM `rel_ies_programa` 
LEFT JOIN cat_nivel_estudios ON(cat_nivel_estudios.id_cat_nivel_estudios=rel_ies_programa.id_cat_nivel_estudios)
WHERE `id_ies`='{$id_ies}' GROUP BY id_cat_nivel_estudios";
  return $mysqli->query($sql);
  return $result->fetch_assoc();
}



function acces_programa($programa)
{
  global $mysqli;
  $sql = "SELECT * FROM programa_educativo 
          WHERE id_programa = '{$programa}'";
  $result = $mysqli->query($sql);
   return $result->fetch_assoc();
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




/** Insert **/



function crear_usuario($ies, $correo, $password, $est)
{
global $mysqli;
$sql="INSERT INTO usuarios(id_usuario, id_ies, dt_correo, dt_password, dt_tipo) VALUES (null, '{$ies}', '{$correo}', '{$password}', '{$est}')";
$mysqli->query($sql);
}



function  crear_responsable($id_user, $entidad, $ies, $nombre_responsable, $cargo, $telefono, $celular)
{
global $mysqli;
$sql="INSERT INTO responsable(id_responsable, id_usuario, dt_entidad, id_ies,  dt_nom_responsable, dt_cargo, dt_telefono, dt_celular) 
       VALUES (null, '{$id_user}', '{$entidad}' , '{$ies}',  '{$nombre_responsable}', '{$cargo}', '{$telefono}', '{$celular}')";
$mysqli->query($sql);
}


function  crear_programa($id_ies,  $programa_edu, $otro_programa, $inicio, $num_periodo, $periodo)
{
global $mysqli;
$sql="INSERT INTO programa_educativo(id_programa, id_ies,  dt_programa, dt_otro_programa, dt_inicio, dt_num_periodo, dt_unidad) 
                      VALUES (null, '{$id_ies}', '{$programa_edu}', '{$otro_programa}', '{$inicio}', '{$num_periodo}', '{$periodo}')";
$mysqli->query($sql);
}



function crear_unidad($id, $unidad, $convn, $estudiante_sex_fem, $estudiante_sex_mas, $docente_sex_fem, $docente_sex_mas, $egresados, $egresados_f, $egresados_m, $estudiante_cursan_f, $estudiante_cursan_m, $beneficio)
{
global $mysqli;
$sql="INSERT INTO unidad_educativa(id_unidad_educativa, id_programa_educativo, dt_unidad, dt_convenio, dt_estudiante_fem, dt_estudiante_mas, dt_docente_fem, dt_docente_mas, dt_egresados, dt_egresados_fem, dt_egresados_mas,  dt_estudiante_cursan_f, dt_estudiante_cursan_m, dt_beneficios) 
                      VALUES (null, '{$id}', '{$unidad}', '{$convn}','{$estudiante_sex_fem}',  '{$estudiante_sex_mas}', '{$docente_sex_fem}', '{$docente_sex_mas}', '{$egresados}', '{$egresados_f}','{$egresados_m}', '{$estudiante_cursan_f}','{$estudiante_cursan_m}', '{$beneficio}');";
$mysqli->query($sql);
}




function update_unidad($id, $unidad, $convn, $estudiante_sex_fem, $estudiante_sex_mas, $docente_sex_fem, $docente_sex_mas, $egresados_f, $egresados_m)
{
  global $mysqli;
  $sql = "UPDATE `unidad_educativa` SET `dt_unidad`='{$unidad}',`dt_convenio`='{$convn}',`dt_estudiante_fem`='{$estudiante_sex_fem}',`dt_estudiante_mas`='{$estudiante_sex_mas}',`dt_docente_fem`='{$docente_sex_fem}',`dt_docente_mas`='{$docente_sex_mas}',`dt_egresados_fem`='{$egresados_f}',`dt_egresados_mas`='{$egresados_m}' WHERE  id_unidad_educativa = '{$id}' ";
  $mysqli->query($sql); 

}




function delate_unidad($id_unidad)
{
global $mysqli;
$sql="DELETE FROM unidad_educativa WHERE id_unidad_educativa ='{$id_unidad}' ";
$mysqli->query($sql);
}


function delate_programa($programa)
{
global $mysqli;
$sql="DELETE FROM programa_educativo WHERE id_programa ='{$programa}' ";
$mysqli->query($sql);
}


?>