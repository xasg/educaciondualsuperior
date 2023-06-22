<?php  

// Esta conexion es la que esta en la rama de prod y se va a cambiar por la de dev
//servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
	/*$mysqli = new mysqli("localhost","fese","Ws.666.AdQe","educacion_dual"); 
	
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}*/
?>

<?php
//servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
// esta es la conexion que tenemos en dev
	$mysqli = new mysqli("localhost","root","","educaciondual"); 
	
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}
?>