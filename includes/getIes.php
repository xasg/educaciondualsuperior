
<?php
	require ('../controller/conexion.php');
	mysqli_set_charset( $mysqli, 'utf8');	
	$id_entidad = $_POST['id_cat_entidad'];	
	$queryM = "SELECT id_ies, dt_nombre_ies FROM cat_ies WHERE id_cat_entidad = '$id_entidad' AND dt_estatus= 0 ORDER BY dt_nombre_ies ASC";
	$resultadoM = $mysqli->query($queryM);
	
	$html= "<option value=''>Seleccionar IES</option>";
	
	while($rowM = $resultadoM->fetch_assoc())
	{
		$html.= "<option value='".$rowM['id_ies']."'>".$rowM['dt_nombre_ies']."</option>";
	}
	
	echo $html;
?>