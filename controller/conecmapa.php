<?php

/*//nombre del servidor
$servidor = "localhost";
//nombre de la base de datos
$base = "educaciondual";
//nombre del usuario
$usuario = "root";
//password o contraseña
$password = "";*/

//nombre del servidor
$servidor = "ec2-18-216-120-87.us-east-2.compute.amazonaws.com";
//nombre de la base de datos
$base = "educaciondual";
//nombre del usuario
$usuario = "fese";
//password o contraseña
$password = "Ws.666.AdQe";

try {
    //code...
    $conexion = new PDO("mysql:host=$servidor;dbname=$base",$usuario,$password);
} catch (Exception $ex) {
    //throw $th;
    echo $ex->getMessage();
}

?>