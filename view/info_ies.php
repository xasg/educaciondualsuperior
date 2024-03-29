<?php
session_start();
if($_SESSION['id_ies']== null){
    header("Location:login.php");
}
require_once('../model/databases.php');
mysqli_set_charset( $mysqli, 'utf8');
$id_ies=$_SESSION["id_ies"];
$name_user=$_SESSION["name_user"];
$id_user=$_SESSION["id_user"];
$responsable = acces_responsable($id_ies);
$info_ies = acces_info_ies($id_ies, $id_user);
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

<div class="container"><br><br>
 <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
         <a class="nav-link " href="registro.php" role="tab" aria-controls="home" aria-selected="true">Resumen</a>
       </li>
        <li class="nav-item">
         <a class="nav-link active"  href="#" role="tab" aria-controls="profile" aria-selected="false">Datos Institucionales</a>
       </li>
     </ul>
     <br><br>
</div>


<div class="container">
<div class="tab-content">
<div class="tab-pane active" id="pane1" role="tabpanel" aria-labelledby="home-tab">
<div class="row">
                            <span class="border">
                                    <div class="col-xl-12">
<form action="../controller/update_ies.php" method="POST">  
                        <div class="row border">
                        <div class="col-md-12"><br>
                        <h3>Datos Institucionales de contacto</h3>
                         <div class="alert alert-warning" role="alert">La siguiente información se publicará en la oferta educativa para fines de difusión</div>
                        </div>                        
                      <div class="col-md-12">    
                        <div class="form-group">
                        <label for="exampleInputEmail1">Nombre de la Institución</label>
                        <input type="text" class="form-control" onChange="conMayusculas(this)" value="<?php echo strtoupper($responsable['dt_nombre_ies']); ?>">
                      </div>                      
                     </div>

                     <div class="col-md-6">    
                        <div class="form-group">
                        <label for="exampleInputEmail1">Correo</label>
                        <input type="text" name="correo" class="form-control" onChange="conMayusculas(this)" value="<?php echo strtoupper($info_ies['dt_email']); ?>" required>
                      </div>                      
                     </div>

                     <div class="col-md-4">    
                        <div class="form-group">
                        <label for="exampleInputEmail1">Teléfono</label>
                        <input type="text" name="tel" class="form-control" onChange="conMayusculas(this)" value="<?php echo strtoupper($info_ies['dt_telefono']); ?>" required>
                      </div>                      
                     </div>

                     <div class="col-md-2">    
                        <div class="form-group">
                        <label for="exampleInputEmail1">Extención</label>
                        <input type="text" name="ext" class="form-control" onChange="conMayusculas(this)" value="<?php echo strtoupper($info_ies['dt_extencion']); ?>">
                      </div>                      
                     </div>


                     <div class="col-md-6">    
                        <div class="form-group">
                        <label for="exampleInputEmail1">Dirección (Calle y Número):</label>
                        <input type="text" name="direccion" class="form-control" onChange="conMayusculas(this)" value="<?php echo strtoupper($info_ies['dt_direccion']); ?>" required>
                      </div>                      
                     </div>

                     <div class="col-md-6">    
                        <div class="form-group">
                        <label for="exampleInputEmail1">Localidad, colonia o barrio:</label>
                        <input type="text" name="localidad" class="form-control" onChange="conMayusculas(this)" value="<?php echo strtoupper($info_ies['dt_localidad']); ?>" required>
                      </div>                      
                     </div>

                     <div class="col-md-6">    
                        <div class="form-group">
                        <label for="exampleInputEmail1">Municipio:</label>
                        <input type="text" name="municipio" class="form-control" onChange="conMayusculas(this)" value="<?php echo strtoupper($info_ies['dt_municipio']); ?>" required>
                      </div>                      
                     </div>


                      <div class="col-md-3">    
                      <div class="form-group">
                          <label for="exampleInputEmail1">Entidad</label>
                       <select class="form-control"  name="entidad">
                          <option value="<?php echo strtoupper($responsable['nombre_entidad']); ?>" selected><?php echo strtoupper($responsable['nombre_entidad']); ?></option>
                           <option value="AGUASCALIENTES">AGUASCALIENTES</option>
                                                <option value="BAJA CALIFORNIA">BAJA CALIFORNIA</option>
                                                <option value="BAJA CALIFORNIA SUR">BAJA CALIFORNIA SUR</option>
                                                <option value="CAMPECHE">CAMPECHE</option>
                                                <option value="CHIAPAS">CHIAPAS</option>
                                                <option value="CHIHUAHUA">CHIHUAHUA</option>
                                                <option value="COAHUILA">COAHUILA</option>
                                                <option value="COLIMA">COLIMA</option>
                                                <option value="CIUDAD DE MÉXICO">CIUDAD DE MÉXICO</option>
                                                <option value="CIUDAD DE MÉXICO">DURANGO</option>
                                                <option value="GUANAJUATO">GUANAJUATO</option>
                                                <option value="GUERRERO">GUERRERO</option>
                                                <option value="HIDALGO">HIDALGO</option>
                                                <option value="JALISCO">JALISCO</option>
                                                <option value="MÉXICO">MÉXICO</option>
                                                <option value="MICHOACÁN">MICHOACÁN</option>
                                                <option value="MORELOS">MORELOS</option>
                                                <option value="NAYARIT">NAYARIT</option>
                                                <option value="NUEVO LEÓN">NUEVO LEÓN</option>
                                                <option value="OAXACA">OAXACA</option>
                                                <option value="PUEBLA">PUEBLA</option>
                                                <option value="QUERÉTARO">QUERÉTARO</option>
                                                <option value="QUINTANA ROO">QUINTANA ROO</option>
                                                <option value="SAN LUIS POTOSÍ">SAN LUIS POTOSÍ</option>
                                                <option value="SINALOA">SINALOA</option>
                                                <option value="SONORA">SONORA</option>
                                                <option value="TABASCO">TABASCO</option>
                                                <option value="TAMAULIPAS">TAMAULIPAS</option>
                                                <option value="TLAXCALA">TLAXCALA</option>
                                                <option value="VERACRUZ">VERACRUZ</option>
                                                <option value="YUCATÁN">YUCATÁN</option>
                                                <option value="ZACATECAS">ZACATECAS</option>
                       </select>                        
                      </div>                      
                     </div>

                     <div class="col-md-3">    
                        <div class="form-group">
                        <label for="exampleInputEmail1">Codigo Postal:</label>
                        <input type="text" name="cp" class="form-control" onChange="conMayusculas(this)" value="<?php echo strtoupper($info_ies['dt_cp']); ?>" required>
                      </div>                      
                     </div>

                     <div class="col-md-12">    
                        <div class="form-group">
                        <label for="exampleInputEmail1">Coordenadas geográficas de ubicación</label>                       
                      </div>                      
                     </div>

                     <div class="col-md-6">    
                        <div class="form-group">
                        <label for="exampleInputEmail1">latitud</label>
                        <input type="text" name="latitud" class="form-control" onChange="conMayusculas(this)" value="<?php echo strtoupper($info_ies['dt_latitud']); ?>" required>
                      </div>                      
                     </div>

                     <div class="col-md-6">    
                        <div class="form-group">
                        <label for="exampleInputEmail1">longitud</label>
                        <input type="text" name="longitud" class="form-control" onChange="conMayusculas(this)" value="<?php echo strtoupper($info_ies['dt_longitud']); ?>" required>
                      </div>                      
                     </div>
                     <div class="col-md-6">    
                        <div class="form-group">
                        <label for="exampleInputEmail1">Año en que la Institución inicio bajo la modalidad Educación Dual</label>
                        <input type="text" name="ano_dual" class="form-control" onChange="conMayusculas(this)" value="<?php echo strtoupper($info_ies['dt_ano_dual']); ?>" required>
                      </div>                      
                     </div>

                    <div class="col-xl-12"></div>
                    <div class="col-xl-2">
                            <input type="hidden" name="id_ies" value="<?php echo $id_ies; ?>" />
                            <input type="hidden" name="id_user" value="<?php echo  $id_user; ?>" />
                            <button type="submit" class="btn btn-block btn-primary btn-lg">Actualizar</button><br><br>
                    </div>




</div>
</form> 
                                    </div>                            
                            </span><br><br>
</div>
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