<?php
session_start();
$id_ies=$_SESSION["id_ies"];
	require ('../controller/conexion.php');
	mysqli_set_charset( $mysqli, 'utf8');	
	$id_nivel = $_POST['id_cat_nivel_estudios'];
	$queryM = "SELECT cat_programa_educativo.id_cat_programa_educativo, cat_programa_educativo.dt_nombre_programa_educativo FROM `rel_ies_programa` 
LEFT JOIN cat_programa_educativo ON(cat_programa_educativo.id_cat_programa_educativo=rel_ies_programa.id_cat_programa_educativo)
WHERE `id_ies`IN ('{$id_ies}','2500') AND rel_ies_programa.id_cat_nivel_estudios='$id_nivel'";
	$resultadoM = $mysqli->query($queryM);
	
	$html= "<option value=''></option>";
	
	while($rowM = $resultadoM->fetch_assoc())
	{
		$html.= "<option value='".$rowM['dt_nombre_programa_educativo']."'>".$rowM['dt_nombre_programa_educativo']."</option>";
	}
	
	echo $html;
?>