<!DOCTYPE html>
<html>
<head>
    <title>Procesamiento del formulario en PHP</title>
</head>
<body>
    <!--<h2>Datos enviados desde el formulario</h2>-->
    <?php
    // Verificar si se enviaron los datos del formulario
    session_start();    
    require_once('../model/databases.php');
    mysqli_set_charset( $mysqli, 'utf8');


    if ($_SERVER["REQUEST_METHOD"] === "POST") 
    {
        $usuario = $_POST["usuario"];
        $contador = $_POST["contador"];
       // echo "Id: " . $usuario . "<br>";        
        //echo "Programas educativos: " . $contador . "<br>";
        
        
       if ($sqlProgramaUsuario = $mysqli->query
            ("UPDATE educacion_dual.usuarios
            SET tp_status = 2            
            where id_usuario = '$usuario'"))
        {
            //echo "su starus ahora es de 2";
        }
    }    
    ?>

<script language="javascript">
        window.location.replace("registro.php");
</script>

</body>
</html>
