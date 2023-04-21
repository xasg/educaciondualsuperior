<?php
session_start();
if($_SESSION['id_ies']== null){
    header("Location:formulario.php");

}
require_once('../model/databases.php');
mysqli_set_charset( $mysqli, 'utf8');
$id_ies=$_SESSION["id_ies"];
$name_user=$_SESSION["name_user"];
$correo_user=$_SESSION["correo"];
// $correo=$_SESSION["correo"];
$ies = acces_ies($id_ies);
$responsable = view_responsable($id_ies);
$usuario_correo = view_usuarios($id_ies);

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
                               <a class="menu-btn" href="javascript:void(0);" title=""><i class="fa flaticon-user"></i></a>
                            </div>
                        </nav>
                    </div><!-- Logo Menu Wrap -->
                </div>
            </header><!-- Header -->
            <div class="menu-wrap">
                <span class="menu-close"><i class="fas fa-times"></i></span>
                <ul class="mb-0 list-unstyled w-100">
                    <li><a href="registro.php">PROGRAMAS EDUCATIVOS</a></li>
                    <li><a href="logout.php">CERRAR SESIÓN</a></li>
                    <!--<li class="menu-it@em-has-children"><a href="#" title="">HISTORIA</a></li>  
                    <li><a href="logout.php">CERRAR SESIÓN</a></li>
                    <li><a href="oferta.html" title="">OFERTA</a></li>
                    <li><a href="#" title="">BLOG</a></li>-->                     
                </ul>
            </div><!-- Menu Wrap -->

         <!-- Menu Wrap -->
         <section>
            <div class="w-100 text-center black-layer ">                   
            </div><br><br><br>
         </section>
<div class="container border vh-100"><br><br>
<div class=" border  d-flex w-100 flex-wrap  align-items-center justify-content-center">
<div class=" " id="pane1" role="tabpanel" aria-labelledby="home-tab">
<div class=" container-fluid">
    <h1>Datos Institucionales</h1>
</div>
</div>
<div class="container">
<form action="">
    <div class="row">
      <div class="col-md">
        <div class="mb-3">
          <label for="" class="form-label">IES</label>
          <?php
        //   $nombreies = acces_ies($id_ies);
          foreach($ies as $nombre){
        //   if ($ies['id_ies'] == $id_ies) {
            # code...
            echo $id_ies;
          ?>
          <input type="text" 
            class="form-control" name="" id="" aria-describedby="helpId" placeholder="<?php echo $nombre['dt_nombre_ies'];  ?>" readonly>
          <!-- <small id="helpId" class="form-text text-muted">Help text</small> -->
        </div>
        <?php
          }
        ?>
      </div>
      <div class="col-md">
        <div class="mb-3">
          <label for="" class="form-label">Encargado</label>
          <input type="text"
            class="form-control" name="" id="" aria-describedby="helpId" placeholder="<?php echo $name_user; ?>" readonly>
          <!-- <small id="helpId" class="form-text text-muted">Help text</small> -->
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md">
        <div class="mb-3">
          <label for="" class="form-label">Telefono</label>
         
          <input type="text" 
            class="form-control" name="" id="" aria-describedby="helpId" placeholder="<?php echo $responsable['dt_telefono'];  ?>" readonly>
          <!-- <small id="helpId" class="form-text text-muted">Help text</small> -->
        </div>
       
      </div>
      <div class="col-md">
        <div class="mb-3">
          <label for="" class="form-label">correo</label>
          <?php
        //   $nombreies = acces_ies($id_ies);
          foreach($usuario_correo as $correo_usuario){
        //   if ($usuario_correo['id_ies'] == $id_ies) {
            # code...
            // echo $correo_usuario['id_usuario'];
          ?>
          <input type="text"
            class="form-control" name="" id="" aria-describedby="helpId" placeholder="<?php echo $correo_usuario["dt_correo"];?>" readonly>
          <small id="helpId" class="form-text text-muted">Help text</small>
        </div>
        <?php
          }
        ?>
      </div>
    </div>
</form>
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