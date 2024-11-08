<?php 
session_start();
require_once('../model/databases.php');
mysqli_set_charset( $mysqli, 'utf8');
$usuario = $_GET['usuario']; 
$detalle = detalle_dual($usuario);
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
        <script language="JavaScript"> 
        function conMayusculas(field) 
        { 
            field.value = field.value.toUpperCase() 
        }   
        </script>
</head>
   <body>
    <?php include("modal_detalle_unidad.php");?>
    <header class="stick style1 w-100" style="background-color: #98213A;">
                <div class="container">
                    <div class="logo-menu-wrap w-100 d-flex flex-wrap justify-content-between align-items-start">
                    <div class="logo"><h1 class="mb-0"><img class="img-fluid" src="../assets/images/img/logo_blanco2.png" alt="Logo" srcset="../assets/images/img/logo_blanco2.png"></h1></div> 

                        <nav class="d-inline-flex align-items-center">
                           <div class="header-left">
                                <ul class="mb-0 list-unstyled d-inline-flex">
                                    <!--<li class="menu-item-has-children"><?php //echo $name_user ?></li>-->
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
         <section>
            <div class="w-100 text-center black-layer position-relative">                   
            </div><br><br><br>
         </section>
<div class="container">
    <br><br>
</div>
<div class="container">
<div class="tab-content">
<div class="row">
<div class="col-xl-12 font-weight-bold">
   <h5>Detalle de Programas educativos</h5>
<div class="col-xl-12">
<br>
        <table id="tableID" class="table  table-striped table-bordered table-sm" style="width:100%"> 
            <thead class="thead-dark">
                <tr>  
                    <th>#</th>
                    <th>Programa educativo</th>
                    <th>Periodo de inicio </th>
                    <th>ciclo </th>
                </tr>
            </thead>
                                            <tbody>      
                                              <?php
                                              
                                              $counter = 1;
                                              while($detalle_program = $detalle->fetch_assoc())
                                              {
                                              ?>
                                              <tr>
                                                <td class="text-center"><?php echo $counter++ ?></td>
                                                <td><?php echo strtoupper($detalle_program['dt_programa']. ":" .$detalle_program['dt_otro_programa']);?></td>
                                                <td><?php echo strtoupper($detalle_program['dt_num_periodo']. " ". $detalle_program['dt_unidad']);?></td>
                                                <td><?php echo strtoupper($detalle_program['inf_ciclo']);?></td>
                                              </tr> 
                                              <?php
                                                }
                                              ?>               
                                            </tbody>
        </table>
</div>
</div>   
</div>
</div>





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