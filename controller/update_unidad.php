<?php
   session_start();
   include_once('../model/databases.php');
   mysqli_set_charset( $mysqli, 'utf8');
   if( $_POST )
   {  
   $id=$_POST["id"];
   $programa = $_POST["programa"];
   $unidad = isset( $_POST['nombre']) ? $_POST['nombre'] : '';
   $convn = isset( $_POST['convenio']) ? $_POST['convenio'] : '';
   $estudiante_sex_fem = isset( $_POST['estudiante_fem']) ? $_POST['estudiante_fem'] : '';
   $estudiante_sex_mas = isset( $_POST['estudiante_mas']) ? $_POST['estudiante_mas'] : '';
   $docente_sex_fem = isset( $_POST['docente_fem']) ? $_POST['docente_fem'] : '';
   $docente_sex_mas = isset( $_POST['docente_mas']) ? $_POST['docente_mas'] : '';
   $egresados_f = isset( $_POST['egresados_fem']) ? $_POST['egresados_fem'] : '';
   $egresados_m = isset( $_POST['egresados_mas']) ? $_POST['egresados_mas'] : '';
   update_unidad($id, $unidad, $convn, $estudiante_sex_fem, $estudiante_sex_mas, $docente_sex_fem, $docente_sex_mas, $egresados_f, $egresados_m);    
?>
   ?>
<script>
   window.location="../view/unidad.php?id_programa=<?php echo base64_encode($programa)?>"
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