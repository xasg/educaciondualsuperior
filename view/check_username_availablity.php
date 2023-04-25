<?php 
require('../controller/conec.php');
sleep(1);
if (isset($_POST)) {
    $username = (string)$_POST['username'];    
    $result = $mysqli->query(
        'SELECT * FROM usuarios WHERE dt_correo = "'.strtolower($username).'"'
    );
 
    if ($result->num_rows > 0) {
        echo '<div class="alert alert-danger"><strong>Oh no!</strong> Este Email ya se encuentra registrado.</div>';
    } else {
        echo '<div class="alert alert-success"><strong>Enhorabuena!</strong> Usuario disponible.</div>';
    }
}
?>