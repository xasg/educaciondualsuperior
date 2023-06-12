<?php
   session_start();
   include_once('../model/databases.php');
   mysqli_set_charset( $mysqli, 'utf8');
   $id_ies=$_SESSION["id_ies"];
   $id_user = $_SESSION["id_user"];

   if( $_POST )
   {  
   $programa_edu = isset( $_POST['programa_edu']) ? $_POST['programa_edu'] : '';
   $otro_programa = isset( $_POST['otro_programa']) ? $_POST['otro_programa'] : '';
   $inicio = isset( $_POST['inicio']) ? $_POST['inicio'] : '';
   $periodo = isset( $_POST['periodo']) ? $_POST['periodo'] : '';
   $num_periodo = isset( $_POST['num_periodo']) ? $_POST['num_periodo'] : '';
   crear_programa($id_ies, $id_user, $programa_edu, $otro_programa, $inicio, $num_periodo, $periodo);
   
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