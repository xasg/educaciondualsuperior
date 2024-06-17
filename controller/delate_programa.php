<?php
   session_start();
   include_once('../model/databases.php');
   mysqli_set_charset( $mysqli, 'utf8');
   if( $_POST )
   {  
   $programa=$_POST["id_programa"];
   $ciclo=$_POST["ciclo"];
   delate_programa($programa);    
?>
<script>
   window.location="../view/programa.php?ciclo=<?php echo $ciclo; ?>"
</script>
<?php
}
 ?>