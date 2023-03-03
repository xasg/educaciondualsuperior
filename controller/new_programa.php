<?php
   error_reporting(E_ALL);
   session_start();
   // require_once('../controller/conec.php');
   include_once('../model/databases_responsable.php');
   mysqli_set_charset( $mysqli, 'utf8');
   if( $_POST )
   {  
   $denominacion = isset( $_POST['denominacion']) ? $_POST['denominacion'] : '';
   $programa_educativo = isset( $_POST['programa_educativo']) ? $_POST['programa_educativo'] : '';
   $inicio = isset( $_POST['inicio']) ? $_POST['inicio'] : '';
   $unidad = isset( $_POST['unidad']) ? $_POST['unidad'] : '';
   $unidad_1 = isset( $_POST['unidad_1']) ? $_POST['unidad_1'] : '';
   $unidad_2 = isset( $_POST['unidad_2']) ? $_POST['unidad_2'] : '';
   $unidad_3 = isset( $_POST['unidad_3']) ? $_POST['unidad_3'] : '';
   $unidad_4 = isset( $_POST['unidad_4']) ? $_POST['unidad_4'] : '';
   $convn = isset( $_POST['convn']) ? $_POST['convn'] : '';   
   $convn1 = isset( $_POST['convn1']) ? $_POST['convn1'] : '';
   $convn2 = isset( $_POST['convn2']) ? $_POST['convn2'] : '';
   $convn3 = isset( $_POST['convn3']) ? $_POST['convn3'] : '';
   $convn4 = isset( $_POST['convn4']) ? $_POST['convn4'] : '';
   $periodo = isset( $_POST['periodo']) ? $_POST['periodo'] : '';   
   $sex_fem = isset( $_POST['sex_fem']) ? $_POST['sex_fem'] : '';
   $sex_mas = isset( $_POST['sex_mas']) ? $_POST['sex_mas'] : '';
   $egresados_f = isset( $_POST['egresados_f']) ? $_POST['egresados_f'] : '';
   $egresados_m = isset( $_POST['egresados_m']) ? $_POST['egresados_m'] : '';
   $id_ies = isset( $_POST['id_ies']) ? $_POST['id_ies'] : '';
   global $mysqli;
  crear_programa($id_ies, $denominacion, $programa_educativo, $inicio, $unidad, $unidad_1, $unidad_2, $unidad_3, $unidad_4, $convn, $convn1, $convn2, $convn3, $convn4, $periodo, $sex_fem, $sex_mas, $egresados_f, $egresados_m);
   $_SESSION["id_ies"]=$id_ies;


   ?>
<script>
   window.location="../view/registro.php"
</script>
<?php
}else{
//caso contario (else) es porque ese user ya esta registrado 
 ?>
<script>
   window.location="existe.php"
</script>
<?php

}

   ?>