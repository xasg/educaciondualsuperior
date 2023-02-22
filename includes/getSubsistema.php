<?php
	require ('../controller/conexion.php');
	mysqli_set_charset( $mysqli, 'utf8');	
	$id_entidad = $_POST['id_cat_entidad'];	
	$id_subsistema = $_POST['id_cat_subsistema'];
	$queryM = "SELECT dt_subsistema, dt_nombre_ies FROM cat_ies WHERE id_cat_entidad = '$id_entidad'  GROUP BY dt_subsistema ORDER BY dt_subsistema";
	$resultadoM = $mysqli->query($queryM);
	
	$html= "<option value=''>Seleccionar Subsistema</option>";
	
	while($rowM = $resultadoM->fetch_assoc())
	{
		$html.= "<option value='".$rowM['dt_subsistema']."'>".$rowM['dt_nombre_ies']."</option>";
	}
	
	echo $html;
?>