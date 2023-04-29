<?php
   session_start();
   include_once('../model/databases.php');
   mysqli_set_charset( $mysqli, 'utf8');
   if( $_POST )
   {  
   $programa=$_POST["id_programa"];
   delate_programa($programa);    
?>
<script>
   window.location="../view/programa.php"
</script>
<?php
}
 ?>