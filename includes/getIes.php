<?php
	require ('../controller/conexion.php');
	mysqli_set_charset( $mysqli, 'utf8');	
	$id_entidad = $_POST['id_cat_entidad'];
	// $queryM = "SELECT cat_ies.id_ies, cat_ies.dt_nombre_ies  
	// 	FROM `rel_ies_programa` LEFT JOIN cat_ies ON(cat_ies.id_ies=rel_ies_programa.id_ies) 
	// 	WHERE `id_cat_entidad` = '$id_entidad' 
	// 	GROUP BY cat_ies.`id_ies`
	// 	ORDER BY cat_ies.dt_nombre_ies ASC";
	$queryM = "SELECT cat_ies.id_ies, MAX(cat_ies.dt_nombre_ies) AS dt_nombre_ies
	FROM cat_ies
	LEFT JOIN rel_ies_programa USING(id_ies)
	WHERE rel_ies_programa.id_cat_entidad = '$id_entidad'
	GROUP BY cat_ies.id_ies
	ORDER BY dt_nombre_ies ASC";
	$resultadoM = $mysqli->query($queryM);
	
	$html= "<option value=''>Seleccionar IES</option>";
	
	while($rowM = $resultadoM->fetch_assoc())
	{
		$html.= "<option value='".$rowM['id_ies']."'>".$rowM['dt_nombre_ies']."</option>";
	}
	
	echo $html;
?>