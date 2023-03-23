<?php
   session_start();
   include_once('../model/databases_responsable.php');
   mysqli_set_charset( $mysqli, 'utf8');
   $id=$_POST["id"];
   if( $_POST )
   {  
   $unidad = isset( $_POST['unidad']) ? $_POST['unidad'] : '';
   $convn = isset( $_POST['convn']) ? $_POST['convn'] : '';
   $estudiante_sex_fem = isset( $_POST['estudiante_sex_fem']) ? $_POST['estudiante_sex_fem'] : '';
   $estudiante_sex_mas = isset( $_POST['estudiante_sex_mas']) ? $_POST['estudiante_sex_mas'] : '';
   $docente_sex_fem = isset( $_POST['docente_sex_fem']) ? $_POST['docente_sex_fem'] : '';
   $docente_sex_mas = isset( $_POST['docente_sex_mas']) ? $_POST['docente_sex_mas'] : '';
   $egresados = isset( $_POST['egresados']) ? $_POST['egresados'] : '';
   $egresados_f = isset( $_POST['egresados_f']) ? $_POST['egresados_f'] : '';
   $egresados_m = isset( $_POST['egresados_m']) ? $_POST['egresados_m'] : '';
   crear_unidad($id, $unidad, $convn, $estudiante_sex_fem, $estudiante_sex_mas, $docente_sex_fem, $docente_sex_mas, $egresados, $egresados_f, $egresados_m);
  
   
?>
   ?>
<script>
   window.location="../view/programa.php"
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