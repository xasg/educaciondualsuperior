<?php
   session_start();
   include_once('../model/databases_responsable.php');
   mysqli_set_charset( $mysqli, 'utf8');
   $id_ies=$_SESSION["id_ies"];
   if( $_POST )
   {  
   $denominacion = isset( $_POST['denominacion']) ? $_POST['denominacion'] : '';
   $programa_edu = isset( $_POST['programa_edu']) ? $_POST['programa_edu'] : '';
   $inicio = isset( $_POST['inicio']) ? $_POST['inicio'] : '';
   $periodo = isset( $_POST['periodo']) ? $_POST['periodo'] : '';
   crear_programa_2($id_ies, $denominacion, $programa_edu, $inicio, $periodo);
  
   
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