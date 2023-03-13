<?php
    include_once('../model/databases_programa.php');
   mysqli_set_charset( $mysqli, 'utf8');
   session_start();   
$id_ies=$_GET['var'];
  
 if( $id_ies!=0 ){
   eliminar($id_ies);
?>
<script>
   window.location="../view/registro.php"
</script>

<?php
}else {
    // code...
}
?>