<?php
     include_once('../model/databases_responsable.php');
   mysqli_set_charset( $mysqli, 'utf8'); 
   session_start(); 
   if( $_POST )
   {  
   $entidad = isset( $_POST['entidad']) ? $_POST['entidad'] : '';
   $nombre_ies = isset( $_POST['nombre_ies']) ? $_POST['nombre_ies'] : '';
   $subsistema = isset( $_POST['subsistema']) ? $_POST['subsistema'] : '';
   $nombre_responsable = isset( $_POST['nombre_responsable']) ? $_POST['nombre_responsable'] : '';
   $cargo = isset( $_POST['cargo']) ? $_POST['cargo'] : '';
   $telefono = isset( $_POST['telefono']) ? $_POST['telefono'] : '';
   $celular = isset( $_POST['celular']) ? $_POST['celular'] : '';
   $correo = isset( $_POST['email']) ? $_POST['email'] : '';
   $password = isset( $_POST['password']) ? $_POST['password'] : '';
   $usuario =get_user_acces($correo);
   if($usuario==0){ 
   $est=2;  
   crear_usuario($correo, $password,  $est);
   $usuario =get_user_acces($correo);
   $id_user=$usuario['id_usuario'];
   crear_responsable($id_user, $entidad, $nombre_ies, $subsistema, $nombre_responsable, $cargo, $telefono, $celular);
   /**$responsable=view_responsable($id_user);  **/
   $_SESSION["id"]=$id_user;
/** 
   crear_estatus($id_user);
   $empresa=view_responsable($id_user);      
   $_SESSION["id"]=$usuario['id_usuario'];

**/

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