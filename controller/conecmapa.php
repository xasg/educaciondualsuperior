<?php

//nombre del servidor
$servidor = "localhost";
//nombre de la base de datos
$base = "educaciondual";
//nombre del usuario
$usuario = "root";
//password o contraseña
$password = "";


try {
    //code...
    $conexion = new PDO("mysql:host=$servidor;dbname=$base",$usuario,$password);
} catch (Exception $ex) {
    //throw $th;
    echo $ex->getMessage();
}

?>