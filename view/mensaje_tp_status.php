<?php
    include_once('../model/databases.php');
   mysqli_set_charset( $mysqli, 'utf8');
   session_start();   
   if( $_POST && $_POST['ciclo']==2021)
   {     
   $usuario = isset( $_POST['usuario']) ? $_POST['usuario'] : '';
   update_estatus_usuario($usuario);
    ?>
        <script>
            window.location.replace("registro.php?ciclo=2021-2022");
        </script>
    <?php

    } elseif ( $_POST && $_POST['ciclo']==2022) {
         $usuario = isset( $_POST['usuario']) ? $_POST['usuario'] : '';
         update_estatus_usuario2022($usuario);
    ?>
        <script>
            window.location.replace("registro22_23.php?ciclo=2022-2023");
        </script>
    <?php     
    } elseif ($_POST && $_POST['ciclo']==2023) {
        $usuario = isset( $_POST['usuario']) ? $_POST['usuario'] : '';
        update_estatus_usuario2023($usuario);

    ?>
        <script>
            window.location.replace("registro23_24.php?ciclo=2023-2024");
        </script>

    <?php
    }
    ?>
