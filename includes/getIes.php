<?php
	require ('../controller/conexion.php');
	mysqli_set_charset( $mysqli, 'utf8');	
	$id_entidad = $_POST['id_cat_entidad'];
	$queryM = "SELECT cat_ies.id_ies, cat_ies.dt_nombre_ies  FROM `rel_ies_programa` LEFT JOIN cat_ies ON(cat_ies.id_ies=rel_ies_programa.id_ies) WHERE `id_cat_entidad` LIKE '$id_entidad' GROUP BY `id_ies`";
	$resultadoM = $mysqli->query($queryM);
	
	$html= "<option value=''>Seleccionar IES</option>";
	
	while($rowM = $resultadoM->fetch_assoc())
	{
		$html.= "<option value='".$rowM['id_ies']."'>".$rowM['dt_nombre_ies']."</option>";
	}
	
	echo $html;
?>