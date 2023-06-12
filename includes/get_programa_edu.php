
<?php
	require ('../controller/conec.php');
	mysqli_set_charset( $mysqli, 'utf8');	
	$grado_denominacion = $_POST['grado_denominacion'];	
	$queryM = "SELECT * FROM `cat_programa_educativo` WHERE `grado_denominacion`= '$grado_denominacion'";
	$resultadoM = $mysqli->query($queryM);
	
	$html= "<option value=''>Seleccionar programa educativo</option>";
	
	while($rowM = $resultadoM->fetch_assoc())
	{
		$html.= "<option value='".$rowM['programa_educativo']."'>".$rowM['programa_educativo']."</option>";
	}
	
	echo $html;
?>