<?php
	require ('../controller/conexion.php');
	mysqli_set_charset( $mysqli, 'utf8');	
	$id_entidad = $_POST['id_cat_entidad'];	
	$queryM = "SELECT dt_clave_ies, dt_nombre_ies FROM cat_ies WHERE id_cat_entidad = '$id_entidad' ORDER BY dt_nombre_ies";
	$resultadoM = $mysqli->query($queryM);
	
	$html= "<option value=''>Seleccionar IES</option>";
	
	while($rowM = $resultadoM->fetch_assoc())
	{
		$html.= "<option value='".$rowM['dt_clave_ies']."'>".$rowM['dt_nombre_ies']."</option>";
	}
	
	echo $html;
?>