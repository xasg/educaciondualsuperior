
<?php
	require ('../controller/conexion.php');
	mysqli_set_charset( $mysqli, 'utf8');	
	$id = $_POST['id_nivel'];
	$lista = $_POST['nombre_carrera'];
	// $queryM = "SELECT id_uni,cod_educativo,lista, id_codeducativo_f FROM carreras INNER JOIN universidades ON universidades.id_uni = carreras.id_codeducativo_f WHERE carreras.id_codeducativo_f = '{$id}'";

	// $queryM = "SELECT lista FROM carreras LEFT JOIN universidades on universidades.id_uni = carreras.id_codeducativo_f WHERE carreras.
	// id_codeducativo_f = '{$id}'";

	//Se utiliza este getcatalogo el cual se muestra en el registro del formulario de programas con la finalidad de solo desplegar las carreras correspondientes a ese nivel

	$queryM = "SELECT * FROM catalogo_de_programas_educativos WHERE dt_nivel = '{$id}' ";
	$resultadoM = $mysqli->query($queryM);


    $html= "<option value='' selected>Seleccionar programa</option>";

    while ($resul = $resultadoM->fetch_assoc()) {  
    $html.="<option value='".$resul['nombre_carrera']."'>".$resul['nombre_carrera']."</option>";    
	}

	
	echo $html;
?>