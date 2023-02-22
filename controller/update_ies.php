<?php
    include_once('../model/databases_programa.php');
   mysqli_set_charset( $mysqli, 'utf8');
   session_start();   
   if( $_POST )
   {  
   $email = isset( $_POST['email']) ? $_POST['email'] : '';
   $telefono = isset( $_POST['telefono']) ? $_POST['telefono'] : '';
   $direccion = isset( $_POST['direccion']) ? $_POST['direccion'] : '';
   $localidad = isset( $_POST['localidad']) ? $_POST['localidad'] : '';
   $municipio = isset( $_POST['municipio']) ? $_POST['municipio'] : '';
   $cp = isset( $_POST['cp']) ? $_POST['cp'] : '';
   $latitud = isset( $_POST['lat']) ? $_POST['lat'] : '';
   $longitud = isset( $_POST['lng']) ? $_POST['lng'] : '';
   $bajo_modalidad = isset( $_POST['bajo_modalidad']) ? $_POST['bajo_modalidad'] : '';
   $total_egresados = isset( $_POST['total_egresados']) ? $_POST['total_egresados'] : '';
   $id_ies = isset( $_POST['id_ies']) ? $_POST['id_ies'] : '';
   update_ies($id_ies, $email, $telefono, $direccion, $localidad, $municipio, $cp, $latitud, $longitud, $bajo_modalidad, $total_egresados);
?>
    <script>
       window.location="../view/registro.php?var=<?php echo base64_encode($id_ies) ?>"
    </script>
<?php

}
