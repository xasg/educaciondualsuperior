<?php
session_start();
if($_SESSION['id_ies']== null){
    header("Location:formulario.php");

}
require_once('../model/databases.php');
mysqli_set_charset( $mysqli, 'utf8');
$id_ies=$_SESSION["id_ies"];
$name_user=$_SESSION["name_user"];
$programa = acces_programas($id_ies);

if ($result = $mysqli->query("SELECT * FROM programa_educativo 
          WHERE id_ies = '{$id_ies}'")) {
    /* determinar el número de filas del resultado */
    $row_cnt = $result->num_rows;
}

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
        <link rel="stylesheet" href="../assets/css/color.css">
</head>
   <body>
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

<!--
<div class="container"><br><br>
 <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
         <a class="nav-link active" id="home-tab" data-toggle="tab" href="#pane1" role="tab" aria-controls="home" aria-selected="true">Resumen</a>
       </li>
        <li class="nav-item">
         <a class="nav-link" id="profile-tab" data-toggle="tab" href="#pane3" role="tab" aria-controls="profile" aria-selected="false">Datos Institucionales</a>
       </li>
     </ul>
     <br><br>
</div>-->



<div class="container"><br><br>
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
                            </span><br><br>
</div>
</div>

<br><br><br><br>
</div> 
</div>

            <footer style="background-color: #98213A;" id="contacto">
                <div class="w-100 pt-121  opc1 position-relative">
                    <div class="container position-relative">
                        <div class="footer-wrap w-100 text-center">
                            <div class="footer-inner d-inline-block">
                                <div class="logo d-inline-block">
                                    <h1 class="mb-0">
                                        <!--<a href="index.html" title=""><br>
                                            <img class="img-fluid" src="assets/images/img/logoforos.png" alt="Logo">
                                        </a>-->
                                    </h1>
                                </div>
                                <p class="mb-0" style="color: #fff">Contacto:</p>
                                <p class="mb-0" style="color: #fff">@fese.mx</p>
                            </div>
                            <div class="footer-bottom d-flex flex-wrap justify-content-between w-100">                              
                            </div>
                        </div>
                    </div>
                </div>
            </footer><!-- Footer -->
      </main>
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
    
</html>