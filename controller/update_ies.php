<?php
    include_once('../model/databases.php');
   mysqli_set_charset( $mysqli, 'utf8');
   session_start();   
   if( $_POST )
   {  
   $id_ies = isset( $_POST['id_ies']) ? $_POST['id_ies'] : '';
   $id_user = isset( $_POST['id_user']) ? $_POST['id_user'] : '';
   $correo = isset( $_POST['correo']) ? $_POST['correo'] : '';
   $tel = isset( $_POST['tel']) ? $_POST['tel'] : '';
   $ext = isset( $_POST['ext']) ? $_POST['ext'] : '';
   $direccion = isset( $_POST['direccion']) ? $_POST['direccion'] : '';
   $localidad = isset( $_POST['localidad']) ? $_POST['localidad'] : '';
   $municipio = isset( $_POST['municipio']) ? $_POST['municipio'] : '';
   $entidad = isset( $_POST['entidad']) ? $_POST['entidad'] : '';
   $cp = isset( $_POST['cp']) ? $_POST['cp'] : '';
   $latitud = isset( $_POST['latitud']) ? $_POST['latitud'] : '';
   $longitud = isset( $_POST['longitud']) ? $_POST['longitud'] : '';
   $ano_dual = isset( $_POST['ano_dual']) ? $_POST['ano_dual'] : '';
   update_ies($id_ies, $id_user, $correo, $tel, $ext, $direccion, $localidad, $municipio, $entidad, $cp, $latitud, $longitud, $ano_dual);
?>
    <script>
       window.location="../view/info_ies.php"
    </script>
<?php

}
