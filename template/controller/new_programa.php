<?php
   session_start();
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
   $periodo = isset( $_POST['periodo']) ? $_POST['periodo'] : '';   
   $sex_fem = isset( $_POST['sex_fem']) ? $_POST['sex_fem'] : '';
   $sex_mas = isset( $_POST['sex_mas']) ? $_POST['sex_mas'] : '';
   $egresados_f = isset( $_POST['egresados_f']) ? $_POST['egresados_f'] : '';
   $egresados_m = isset( $_POST['egresados_m']) ? $_POST['egresados_m'] : '';
   $id = isset( $_POST['id']) ? $_POST['id'] : '';
   crear_programa($id, $denominacion, $programa_educativo, $inicio, $unidad, $unidad_1, $unidad_2, $unidad_3, $unidad_4, $periodo, $sex_fem, $sex_mas, $egresados_f, $egresados_m);
   $_SESSION["id"]=$id;

/** 
   crear_estatus($id_user);
   $empresa=view_responsable($id_user);      
   $_SESSION["id"]=$usuario['id_usuario'];

**/

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