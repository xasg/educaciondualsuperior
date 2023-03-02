
<?php
	require ('../controller/conexion.php');
	mysqli_set_charset( $mysqli, 'utf8');	
	$id = $_POST['id_uni'];
    if ($id == 1) {
        # code...
        $id = 'TSU';
    }	elseif($id == 2){
        $id = 'UP';
    }
	$queryM = "SELECT * FROM carreras WHERE cod_programa_F = '$id' ";
	$resultadoM = $mysqli->query($queryM);
	
	// $html= "<option value=''>Seleccionar: </option>";
	
    $html= "<option value='' selected>Seleccionar programa</option>";
	// while($rowM = $resultadoM->fetch_assoc())
	// {
	// 	$html.= "<option value='".$rowM['ID']."'>".$rowM['lista']."</option>";
	// }
	
    while ($resul = $resultadoM->fetch_assoc()) {  
    echo '<option value="'.$resul['ID'].'">'.$resul['lista'].'</option>';    
    }

	echo $html;
?>