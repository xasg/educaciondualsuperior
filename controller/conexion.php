<?php
//servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
	// $mysqli = new mysqli("localhost","fese","Ws.666.AdQe","educacion_dual"); 
	$mysqli = new mysqli("localhost","root","","educaciondual"); 
	
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}
?>