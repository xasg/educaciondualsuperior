<?php
    include_once('../model/databases_programa.php');
   mysqli_set_charset( $mysqli, 'utf8');
   session_start();   
$programa=$_GET['var'];
  
 if( $programa!=0 ){
   eliminar($programa);
?>
<script>
   window.location="../view/registro.php"
</script>
<?php
}else {
    // code...
}
?>