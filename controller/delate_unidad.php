<?php
   session_start();
   include_once('../model/databases.php');
   mysqli_set_charset( $mysqli, 'utf8');
   if( $_POST )
   {  
   $id_unidad=$_POST["id_unidad"];
   $programa=$_POST["id_programa"];
   delate_unidad($id_unidad);    
?>
<script>
   window.location="../view/unidad.php?id_programa=<?php echo base64_encode($programa)?>"
</script>
<?php
}
 ?>