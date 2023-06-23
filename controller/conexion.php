<?php 
//servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
	$mysqli = new mysqli("ec2-18-216-120-87.us-east-2.compute.amazonaws.com","fese","Ws.666.AdQe","educacion_dual"); 
	
	if(mysqli_connect_errno())
	{
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}
?>

<?php
// dejamos la conexion de pro
// esta es la conexion que tenemos en dev 	
	/*$mysqli = new mysqli("localhost","root","","educaciondual"); 	
	if(mysqli_connect_errno())
	{
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}*/
?>