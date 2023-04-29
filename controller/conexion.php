<?php
//servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
<<<<<<< HEAD
	$mysqli = new mysqli("localhost","fese","Ws.666.AdQe","educacion_dual"); 
=======
	// $mysqli = new mysqli("localhost","fese","Ws.666.AdQe","educacion_dual"); 
	$mysqli = new mysqli("localhost","root","","educaciondual"); 
>>>>>>> 92831b92051958f2bd145986eed27aad325837d7
	
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}
?>