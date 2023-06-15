<?php
session_start();
if($_SESSION['id_ies']== null){
    header("Location:formulario.php");

}
require_once('../model/databases.php');
mysqli_set_charset( $mysqli, 'utf8');
$id_ies=$_SESSION["id_ies"];
$name_user=$_SESSION["name_user"];
$id_user = $_SESSION["id_user"];
$programa = acces_programas($id_ies, $id_user);

if ($result = $mysqli->query("SELECT * FROM programa_educativo 
          WHERE id_ies = '{$id_ies}' AND `id_usuario`='{$id_user}'")) {
    /* determinar el número de filas del resultado */
    $row_cnt = $result->num_rows;
}


////////////////////////////////////////////////////////////////////////////////////////////////////////
$cont = 0;
if ($sqlProgramaUsuario = $mysqli->query("SELECT * FROM educacion_dual.programa_educativo where id_usuario = '$id_user'"))
          {
            if ($sqlProgramaUsuario->num_rows > 0) 
            {
              // con este ciclo sabemos cuantos programas educativos tiene un usuario registrado 
              while ($row = $result->fetch_assoc()) 
              { 
                $cont = $cont +1;  // Programas registrado
              }
            }
          }
//////////////////////////////////////////////////////////////////////////////////////////////////////////
// Preparar la consulta SQL
$sql = "SELECT * FROM educacion_dual.usuarios 
        WHERE id_usuario  = '$id_user'";

// Ejecutar la consulta
$resultado = $mysqli->query($sql);

// Verificar si se obtuvieron resultados
if ($resultado->num_rows > 0) 
{
    // Obtener la primera fila de resultados
    $row = $resultado->fetch_assoc();
    
    // Guardar el valor de la columna "tp_status" en la variable $tp_status
    $estatus_Usuario = $row["tp_status"];
    
    
   // echo "El valor de tp_status es: " . $estatus_Usuario;
} 

if(($estatus_Usuario == 0) && ($cont > 0))  // si tu estatus es 0 y tienes al menos un programa inscrito pasar a estar al estatus 1 
{
  if ($sqltpStatusUsuario = $mysqli->query
                    ("UPDATE educacion_dual.usuarios
                    SET tp_status = 1
                    where id_usuario = '$id_user'"))
                    {
                    //    echo "jalo"; 
                    }

}
else if(($estatus_Usuario == 1) && ($cont == 0))  // si tu estatus es 0 y tienes al menos un programa inscrito pasar a estar al estatus 1 
{
  if ($sqltpStatusUsuario = $mysqli->query
                    ("UPDATE educacion_dual.usuarios
                    SET tp_status = 0
                    where id_usuario = '$id_user'"))
                    {
                    //    echo "jalo"; 
                    }
}
/*else if(($estatus_Usuario == 2) && ($cont == 0))  // si tu estatus es 0 y tienes al menos un programa inscrito pasar a estar al estatus 1 
{
  if ($sqltpStatusUsuario = $mysqli->query
                    ("UPDATE educacion_dual.usuarios
                    SET tp_status = 0
                    where id_usuario = '$id_user'"))
                    {
                    //    echo "jalo"; 
                    }
}*/
/*else if (($estatus_Usuario == 2) && ($cont == 0))
{
  if ($sqltpStatusUsuario = $mysqli->query
                    ("UPDATE educacion_dual.usuarios
                    SET tp_status = 1
                    where id_usuario = '$id_user'"))
                    {
                    //    echo "jalo"; 
                    }
}*/
/////////////////////////////////////////////////////////////////////////////////////////////////////////





?> 
 <!DOCTYPE html>
<html lang="es">
<head>
      <meta charset="UTF-8">
      <link rel="icon" href="../assets/images/favicon.png" sizes="35x35" type="image/png">
      <title>Registro</title>
      <link rel="stylesheet" href="../assets/css/all.min.css">
        <link rel="stylesheet" href="../assets/css/flaticon.css">
        <link rel="stylesheet" href="../assets/css/animate.min.css">
        <link rel="stylesheet" href="../assets/css/bootstrap.css">
        <link rel="stylesheet" href="../assets/css/jquery.fancybox.min.css">
        <link rel="stylesheet" href="../assets/css/perfect-scrollbar.css">
        <link rel="stylesheet" href="../assets/css/slick.css">
        <link rel="stylesheet" href="../assets/css/style.css">
        <link rel="stylesheet" href="../assets/css/responsive.css">
        <link rel="stylesheet" href="../assets/css/color.css"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        
          <style>
        .whatsapp-button {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 45px;

            z-index: 9999;
            background-color: green;
            color: white;
            padding: 12px;
            border-radius: 40%;
            font-size: 20px;
            cursor: pointer;
            box-shadow: 0px 0px 4px #000;
        }

        .lista
        {
            font-family: Roboto;
            color: #666766;
            line-height: 1.875rem;
            font-size: 1.125rem;
            font-weight: 300;
        }
    </style>
    

<script LANGUAGE='JavaScript'>
  /*function superalerta()
  {
    var resultado = window.confirm('¿Estas seguro de Terminar la carga de los programas academicos?');
    if (resultado === true) 
    {
      window.alert('Se ha Finalizado la carga de los Programas');
      return true;
    } 
    else
    { 
      document.write ("");      
      window.location.href = 'registro.php';
      return false;
    }
  }*/

  function confirmarEnvio() 
  {
      if (confirm("¿Estas seguro de Terminar la carga de los programas academicos?")) 
      {
        document.querySelector('form').submit();
      }
    }
    
</script>

</head>
   <body>
   <div class="whatsapp-button" onclick="abrirWhatsApp()">
       <i class="fab fa-whatsapp"></i>
    </div>
  <header class="stick style1 w-100" style="background-color: #98213A;">
                <div class="container">
                    <div class="logo-menu-wrap w-100 d-flex flex-wrap justify-content-between align-items-start">
                    <div class="logo"><h1 class="mb-0"><img class="img-fluid" src="../assets/images/img/logo_blanco2.png" alt="Logo" srcset="../assets/images/img/logo_blanco2.png"></h1></div> 

                        <nav class="d-inline-flex align-items-center">
                           <div class="header-left">
                                <ul class="mb-0 list-unstyled d-inline-flex">
                                    <li class="menu-item-has-children"><?php echo $name_user ?></li>
                                    <!--<li class="menu-item-has-children"><a href="../historia.html" title="">HISTORIA</a></li>  
                                    <li><a href="#" title="">FORMULARIO</a></li>
                                    <li><a href="../oferta.html" title="">OFERTA</a></li>
                                    <li><a href="#" title="">BLOG</a></li>-->
                                </ul>
                            </div>
                            <div class="header-right-btns">
                               <a class="menu-btn" href="javascript:void(0);" title=""><i class="flaticon-user"></i></a>
                            </div>
                        </nav>
                    </div><!-- Logo Menu Wrap -->
                </div>
            </header><!-- Header -->
            <div class="menu-wrap">
                <span class="menu-close"><i class="fas fa-times"></i></span>
                <ul class="mb-0 list-unstyled w-100">
                   <li><a href="logout.php">CERRAR SESIÓN</a></li>
                    <!--<li class="menu-it@em-has-children"><a href="#" title="">HISTORIA</a></li>  
                    <li><a href="logout.php">CERRAR SESIÓN</a></li>
                    <li><a href="oferta.html" title="">OFERTA</a></li>
                    <li><a href="#" title="">BLOG</a></li>-->                     
                </ul>
            </div><!-- Menu Wrap -->

         <!-- Menu Wrap -->
         <section>
            <div class="w-100 text-center black-layer position-relative">                   
            </div><br><br><br>
         </section>

<div class="container"><br><br>
 <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
         <a class="nav-link active" id="home-tab" data-toggle="tab" href="#" role="tab" aria-controls="home" aria-selected="true">Resumen</a>
       </li>
        <li class="nav-item">
         <a class="nav-link"  href="info_ies.php" role="tab" aria-controls="profile" aria-selected="false">Datos Institucionales</a>
       </li>
     </ul>
     <br><br>
</div>


<div class="container">
<div class="tab-content">
<div class="tab-pane active" id="pane1" role="tabpanel" aria-labelledby="home-tab">
<div class="row">
                            <span class="border"><br><br>
                                    <div class="col-xl-12">
                                       <p>A continuación se muestran los programas educativos registrados en su institución educativa, en la modalidad Educación Dual al cierre del ciclo escolar 2021-2022</p>
                                       <p>Agradecemos el apoyo en el llenado, ya que el mismo servirá para mostrar la oferta educativa a nivel nacional, incluyendo a su IES con los programas aquí registrados.</p>
                                       <p><strong>Se cuenta con <strong><?php echo  $row_cnt;?></strong> programas educativos registrados.</strong></p><?php //echo $id_ies; ?>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="programa.php" class="btn btn-block btn-primary" aria-disabled="true">Agregar o Editar</a>
                                    </div>
                                    <div class="col-md-12"><br>
                                    <?php if($row_cnt>0){ ?>
                                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                                        <thead class="thead-dark">
                                          <tr>  
                                                <th>#</th>
                                                <th>Programa educativo</th>
                                                <th>Inicio</th> 
                                                <th>Periodo</th>
                                                <th class="text-center">Número de estudiantes</th>
                                                <th class="text-center">Número de egresados</th>
                                                 <th class="text-center">Unidades económicas</th>
                                          </tr>
                                        </thead>
                                            <tbody>
                                              <?php
                                              $counter = 1;
                                              while($prog = $programa->fetch_assoc())
                                              {
                                              ?>
                                              <tr>
                                                <td class="text-center"><?php echo $counter++ ?></td>
                                                 <?php if($prog['dt_programa']!='OTRO') { ?>
                                                <td><?php echo strtoupper($prog['dt_programa']); ?></td>
                                                <?php } else { ?>
                                                <td><?php echo strtoupper($prog['dt_otro_programa']); ?></td>
                                                <?php } ?>
                                                <td><?php echo strtoupper($prog['dt_inicio']); ?></td>
                                                <td class="text-center"><?php echo strtoupper($prog['dt_unidad']); ?></td>
                                                <td class="text-center"><?php echo strtoupper($prog['estudiantes']); ?></td>
                                                <td class="text-center"><?php echo strtoupper($prog['egresados']); ?></td>
                                                <td class="text-center"> <?php echo strtoupper($prog['num']); ?>
                                                </td>                                               
                                              </tr> 
                                              <?php
                                                }
                                              ?>               
                                            </tbody>

                                      </table>
                                    <br>
                                  <?php } ?>


                                     </div>                                     
                            </span><br>
</div>

<!------------------------------------------------------------------------------------------------------------------->
<?php           
                
                //echo "<strong><p>El status del usuario es ".$estatus_Usuario."</p></strong>"; // si tiene un solo programa educativo despliega el mensaje em singular                    
                if ( ($cont == 0)  && ($estatus_Usuario != 2))
                {
                    echo "<strong><p>El usuario NO tiene ningun Programa educativo </p></strong>"; // si tiene un solo programa educativo despliega el mensaje em singular  
                    echo "
                    <div class = 'col-md-5'>
                      <form method='POST' action='mensaje_tp_status.php'>
                      <input type='text' id='usuario' name='usuario' value='$id_user' readonly hidden='true'>
                      <input type='text' id='contador' name='contador' value='$cont' readonly hidden='true''>                    
                      <input type='button' class='btn btn-block btn-primary' onclick='confirmarEnvio();' value='Finalizar la carga sin Programas Educativos'>
                      </form>
                    </div>";
                }
                else if  ($estatus_Usuario == 2)
                {
                    echo    "<lu>
                                <li class = 'lista'>El usuario tiene ". $cont . " Programa Educativo inscrito y  concluyo el proceso de carga de programas educativos.</li>
                                <li class = 'lista'>Si desea seguir agregando mas Programas educativos de clic en el Boton de \"Agregar y Editar\".</li>
                            </lu>";
                    //echo "<strong><p>El usuario tiene ". $cont . " Programa Educativo inscrito y  concluyo el proceso de carga de programas educativos.</p></strong>"; // si tiene el tp status 2 despliega un mensaje que ya se finalizada la carga de Prgramas Educativos
                }
                else if($estatus_Usuario == 1)
                { 
                  if (($cont  == 1 ))
                    {
                      echo "<strong><p>El usuario tiene ". $cont . " Programa Educativo inscrito</p></strong>"; // si tiene un solo programa educativo despliega el mensaje em singular  
                     
                    }
                    else
                    {
                      echo "<strong><p>El usuario tiene ". $cont . " Programas Educativos inscritos </p></strong>"; // si tiene mas de un prgrama educativo despliega un mensaje en plural
                    } 
                    //echo "<strong><p>El status del usuario es ".$estatus_Usuario; // si tiene un solo programa educativo despliega el mensaje em singular                    
                    echo "
                    <div class = 'col-md-5'>
                      <form method='POST' action='mensaje_tp_status.php'>
                      <input type='text' id='usuario' name='usuario' value='$id_user' readonly hidden='true'>
                      <input type='text' id='contador' name='contador' value='$cont' readonly hidden='true''>                    
                      <input type='button' class='btn btn-block btn-primary' onclick='confirmarEnvio();' value='Finalizar la carga de Programas Educativos'>
                      </form>
                    </div>";
                }
                  //}                
                /*else
                {
                  echo "<strong><p>El status del usuario es ".$estatus_Usuario.". Ya termino su carga de Programas Educativos"; // si tiene un solo programa educativo despliega el mensaje em singular  
                  echo "<strong><p>El usuario tiene ". $cont . " Programas Educativos inscritos </p></strong>"; // si tiene mas de un prgrama educativo despliega un mensaje en plural
                }*/

                  
                
  ?>
<!--------------------------------------------------------------------------------------------------------------->


</div>

<br><br><br><br>
</div> 
</div>


<footer class="justify-content-center" style=" background-color: #98213A;" id="contacto">
                
                <div class="footer-widget-area justify-content-center">
                    <br>
                    <div class="container align-items-center">
                        <div class="container row container-fluid   ">
                        <!--------------------------------------------------------------------------------------->
                            <div class="col-md ">
                                <img src="../img/logo/LogoESR.webp" class="equalheight" title="Ve nuestro apartado esr" alt="Empresa socialmente responsable"/></a> <!--Se cambio el nombre y se agrego un metadato-->
                            </div>
                        <!--------------------------------------------------------------------------------------->
                            <div class="col-md ">
                                <h4 class="text-light" >Ubicación</h4>
                                <div class="contact-icon text-white">
        
                                    <a href="https://www.google.com/maps/place/Fundaci%C3%B3n+Educaci%C3%B3n+Superior+Empresa/@19.3734491,-99.1622087,17z/data=!3m1!4b1!4m6!3m5!1s0x85d1ffa52c4affa9:0xe7505e0e613e278a!8m2!3d19.3734441!4d-99.1596338!16s%2Fg%2F11b6j9fyp5" target="_blank"><i class="fa fa-map-marker" aria-hidden="true"  text-center> </i> Fundación Educación Superior-Empresa A.C.
                                    Tenayuca 200, Santa Cruz Atoyac,
                                    Benito Juárez, 03310, CDMX.</a>
                                </div>
                            </div>
                            <div class="col-md ">
                                <h4 class="text-light" >Contacto</h4>
                                <div class="contact-icon text-white">
                                    <a href="tel:55 5605 6100"><i class="fa fa-phone" aria-hidden="true"> </i> 55 5605 6100</a>
                                </div>
                               
                                <div class="contact-icon text-white">
                                    <a href="mailto:ontacto@fese.mx"><i class="fa fa-envelope" aria-hidden="true"> </i> contacto@fese.mx</a>
                                </div>
                            </div>
                            <!--------------------------------------------------------------------------------------->
                            
                        </div>
                    </div>  
                    <small class="text-light text-center">Todos los derechos reservados © FESE 2023  </small>
                    <br><br>
                    </div>
                    
                </div>   
            </footer><!-- Footer -->      </main>
      <!-- Main Wrapper -->
      <script src="../assets/js/jquery.min.js"></script>
        <script src="../assets/js/popper.min.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>
        <script src="../assets/js/wow.min.js"></script>
        <script src="../assets/js/counterup.min.js"></script>
        <script src="../assets/js/jquery.downCount.js"></script>
        <script src="../assets/js/jquery.fancybox.min.js"></script>
        <script src="../assets/js/perfect-scrollbar.min.js"></script>
        <script src="../assets/js/slick.min.js"></script>
        <script src="../assets/js/custom-scripts.js"></script>
        <script src="../assets/js/simplyCountdown.min.js"></script>
        <script src="../assets/js/countdown.js"></script>    
        <script>
          function abrirWhatsApp() {
            // Reemplaza  con el número de teléfono de destino
            var numeroTelefono = "5551012306";
            
            // Crea el enlace para abrir WhatsApp con el número de teléfono
            var url = "https://api.whatsapp.com/send?phone=" + numeroTelefono;

            // Abre una nueva ventana o pestaña con el enlace de WhatsApp
            window.open(url);
          }
        </script>
    
</html>