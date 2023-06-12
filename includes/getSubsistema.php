<?php
	require ('../controller/conexion.php');
	mysqli_set_charset( $mysqli, 'utf8');	
	$id_entidad = $_POST['id_cat_entidad'];	
	$queryM = "SELECT cat_subsistema.id_cat_subsistema AS subsistema, cat_subsistema.dt_nombre_subsistema FROM `rel_ies_programa` LEFT JOIN cat_subsistema ON(cat_subsistema.id_cat_subsistema=rel_ies_programa.id_cat_subsistema)
		WHERE `id_cat_entidad`='$id_entidad' GROUP BY cat_subsistema.id_cat_subsistema";
	$resultadoM = $mysqli->query($queryM);
	
	$html= "<option value=''>Seleccionar Subsistema</option>";
	
	while($rowM = $resultadoM->fetch_assoc())
	{
		$html.= "<option value='".$rowM['subsistema']."'>".$rowM['dt_nombre_subsistema']."</option>";
	}
	
	echo $html;
?>