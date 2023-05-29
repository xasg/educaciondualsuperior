<?php
require_once('../model/databases.php');
	header("Content-Type: application/xls");    
	header("Content-Disposition: attachment; filename=documento_exportado_" . date('Y:m:d:m:s').".xls");
	header("Pragma: no-cache"); 
	header("Expires: 0");
    $responsable = acces_responsables();

	// require_once '.php';
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
<?php
	
	$output = "";
	
	if(ISSET($_POST['export'])){
		$output .="
			<table>
				<thead>
					<tr>
                    <th>#</th>
                    <th>Entidad</th>
                    <th>IES</th> 
                    <th>correo</th>
                    <th>Programas Educativos</th>
                    <th>Unidades Economicas</th>
                    <th>Estudiantes 2021 2022</th>
                    <th>Egresados</th>
                    <th>Estudiantes 2022 2023</th>
					</tr>
				<tbody>
		";
		
		// $query = mysqli_query($conn, "SELECT * FROM `member`") or die(mysqli_errno());
		// while($fetch = mysqli_fetch_array($query)){
			$counter = 1;
            while($resp = $responsable->fetch_assoc()){
		$output .= "
					<tr>
                    <td>".$counter++."</td>
                    <td> ".$resp['nombre_entidad']."</td>
                    <td> ".$resp['dt_nombre_ies']."</td>
                    <td> ".$resp['dt_correo']."</td>
                    <td> ".$resp['programas_educativos']."</td>
                    <td> ".$resp['unidad_economica']."</td>
                    <td> ".$resp['estudiantes_2021_2022']."</td>
                    <td> ".$resp['egresados']."</td> 
                    <td> ".$resp['estudiantes_2022_2023']."</td> 
					</tr>
		";
		}
		
		$output .="
				</tbody>
				
			</table>
		";
		
		echo $output;
	}
	
?>
</body>
</html>