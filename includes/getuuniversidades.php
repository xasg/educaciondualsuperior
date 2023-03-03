
<?php
	require ('../controller/conexion.php');
	mysqli_set_charset( $mysqli, 'utf8');	
	$id = $_POST['id_uni'];
	$queryM = "SELECT id_uni,cod_educativo,lista, id_codeducativo_f FROM carreras INNER JOIN universidades ON universidades.id_uni = carreras.id_codeducativo_f WHERE carreras.id_codeducativo_f = '{$id}'";
	$resultadoM = $mysqli->query($queryM);
	
    $html= "<option value='' selected>Seleccionar programa</option>";
    while ($resul = $resultadoM->fetch_assoc()) {  
    echo '<option value="'.$resul['ID'].'">'.$resul['lista'].'</option>';    
	}

	echo $html;
?>