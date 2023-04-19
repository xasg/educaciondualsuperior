<?php
   error_reporting(E_ALL);
   session_start();    
   require_once('../model/databases.php');
   mysqli_set_charset( $mysqli, 'utf8');    
   if( $_POST )
   {  
   $entidad = isset( $_POST['entidad']) ? $_POST['entidad'] : '';
   $ies = isset( $_POST['ies']) ? $_POST['ies'] : '';
  // $subsistema = isset( $_POST['subsistema']) ? $_POST['subsistema'] : '';
   $nombre_responsable = isset( $_POST['nombre_responsable']) ? $_POST['nombre_responsable'] : '';
   $cargo = isset( $_POST['cargo']) ? $_POST['cargo'] : '';
   $telefono = isset( $_POST['telefono']) ? $_POST['telefono'] : '';
   $celular = isset( $_POST['celular']) ? $_POST['celular'] : '';
   $correo = isset( $_POST['email']) ? $_POST['email'] : '';
   $password = isset( $_POST['password']) ? $_POST['password'] : '';
   $usuario =get_user_acces($correo);
   if($usuario==0){ 
   $est=2;   
   crear_usuario($ies, $correo, $password, $est);
   $usuario =get_user_acces($correo); 
   $id_user=$usuario['id_usuario']; 
   crear_responsable($id_user, $entidad, $ies, $nombre_responsable, $cargo, $telefono, $celular);
    $_SESSION["id_ies"] = $ies;
    //$_SESSION["subsistema"] = $subsistema;
   ?>
<script>
   window.location="../view/registro.php"
</script>
<?php
}else{
//caso contario (else) es porque ese user ya esta registrado 
 ?>
<script>
   window.location="../view/existe.php"
</script>
<?php

}
   }

   ?>