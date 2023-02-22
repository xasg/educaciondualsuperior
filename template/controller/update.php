<?php
    include_once('../model/databases_programa.php');
   mysqli_set_charset( $mysqli, 'utf8');
   session_start();   
   if( $_POST )
   {  
   $denominacion = isset( $_POST['denominacion']) ? $_POST['denominacion'] : '';
   $programa_educativo = isset( $_POST['programa_educativo']) ? $_POST['programa_educativo'] : '';
   $inicio = isset( $_POST['inicio']) ? $_POST['inicio'] : '';
   $unidad = isset( $_POST['unidad']) ? $_POST['unidad'] : '';
   $unidad_1 = isset( $_POST['unidad_1']) ? $_POST['unidad_1'] : '';
   $unidad_2 = isset( $_POST['unidad_2']) ? $_POST['unidad_2'] : '';
   $unidad_3 = isset( $_POST['unidad_3']) ? $_POST['unidad_3'] : '';
   $unidad_4 = isset( $_POST['unidad_4']) ? $_POST['unidad_4'] : '';
   $unidad_4 = isset( $_POST['unidad_4']) ? $_POST['unidad_4'] : '';
   $periodo = isset( $_POST['periodo']) ? $_POST['periodo'] : '';
   $sex_fem = isset( $_POST['sex_fem']) ? $_POST['sex_fem'] : '';
   $sex_mas = isset( $_POST['sex_mas']) ? $_POST['sex_mas'] : '';
   $egresados_f = isset( $_POST['egresados_f']) ? $_POST['egresados_f'] : '';
   $egresados_m = isset( $_POST['egresados_m']) ? $_POST['egresados_m'] : '';
   $id_programa = isset( $_POST['id_programa']) ? $_POST['id_programa'] : '';
   update_programa($id_programa, $denominacion, $programa_educativo, $inicio, $unidad, $unidad_1, $unidad_2, $unidad_3, $unidad_4, $periodo, $sex_fem, $sex_mas, $egresados_f, $egresados_m);
?>
    <script>
       window.location="../view/editar_programa.php?var=<?php echo base64_encode($id_programa) ?>"
    </script>
<?php

}
