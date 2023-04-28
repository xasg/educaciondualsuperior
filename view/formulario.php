<?php 
error_reporting (E_ALL);
include_once("../model/databases.php");
$entidad=view_entidad();
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
<!-- Global site tag (gtag.js) - Google Analytics -->
<!--<script async src="https://www.googletagmanager.com/gtag/js?id=G-7K2QJNTN5J"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-7K2QJNTN5J');
</script>-->

<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script type="text/javascript">
$(document).ready(function() {  
    $('#username').on('blur', function(){
        $('#result-username').html('<img src="../img/loader.gif" />').fadeOut(1000);

        var username = $(this).val();       
        var dataString = 'username='+username;

        $.ajax({
            type: "POST",
            url: "check_username_availablity.php",
            data: dataString,
            success: function(data) {
                $('#result-username').fadeIn(1000).html(data);
            }
        });
    });              
});    
</script>



</head>
   <body>
  <header class="stick style1 w-100" style=" background-color: #98213A;">
                <div class="container">
                    <div class="logo-menu-wrap w-100 d-flex flex-wrap justify-content-between align-items-start">
                        <div class="logo"><h1 class="mb-0"><a href="index.html" title="Home"><img class="img-fluid" src="../assets/images/img/logo_blanco2.png" alt="Logo" srcset="../assets/images/img/logo_blanco2.png"></a></h1></div> 
                       <nav class="d-inline-flex align-items-center">
                            <div class="header-left">
                                <ul class="mb-0 list-unstyled d-inline-flex">
                                    <li class="menu-item-has-children"><a href="../" title="">INICIO</a></li>
                                    <li class="menu-item-has-children"><a href="../historia.html" title="">HISTORIA</a></li>  
                                    <li><a href="login.php" title="">FORMULARIO</a></li>
                                    <!-- <li><a href="../oferta.html" title="">OFERTA</a></li>
                                    <li><a href="#" title="">BLOG</a></li>   -->

                                </ul>
                            </div>
                            <div class="header-right-btns">
                                <!--<a class="search-btn" href="javascript:void(0);" title="">
                                    <i class="flaticon-magnifying-glass"></i></a>-->
                               <a  class="user-btn" href="javascript:void(0);" title="" data-backdrop="static" data-keyboard="false"><i class="flaticon-user"></i></a>                               
                               <a class="menu-btn" href="javascript:void(0);" title=""><i class="flaticon-menu"></i></a>
                               <!-- <a href="view/login.php"><i class="flaticon-user"></i></a> -->
                            </div>
                        </nav>
                    </div><!-- Logo Menu Wrap -->
                </div>
            </header><!-- Header -->
            <div class="menu-wrap">
                <span class="menu-close"><i class="fas fa-times"></i></span>
                <ul class="mb-0 list-unstyled w-100">
                    <li class="menu-item-has-children"><a href="javascript:void(0);" title="">INICIO</a></li>
                    <li class="menu-it@em-has-children"><a href="historia.html" title="">HISTORIA</a></li>  
                    <li><a href="view/login.php">FORMULARIO</a></li>
                    <!-- <li><a href="oferta.html" title="">OFERTA</a></li> -->
                    <!-- <li><a href="#" title="">BLOG</a></li>                          -->
                </ul>
            </div><!-- Menu Wrap -->
            <div class="login-popup-wrap position-fixed h-100 text-center d-flex flex-wrap align-items-center justify-content-center w-100" data-backdrop="static" data-keyboard="false">
                <div class="login-popup-inner d-inline-block w-100">
                    <h3 class="mb-0">Login sesión virtual </h3>
                   <form action="../controller/login.php" method="POST">
						               <div class="form-group"> 
                                      <label for="Email" name="inicio">Email</label>
                                      <input type="text" class="form-control" name="correo" onChange="conMayusculas(this)" required="">
                                      <label for="Pass">Password</label>
                                      <input type="password" class="form-control" name="password" required="">
                            </div>                       

            <button class="thm-btn fill-btn" type="submit" >Iniciar<span></span></button>          
                        <!-- <a class="d-inline-block" href="javascript:void(0);" title="">Forget A Password</a> -->
                    </form>
                </div>
            </div>
         <!-- Menu Wrap -->
         <section>
            <div class="w-100 text-center position-relative">                   
            </div><br><br><br>
         </section>




<div class="container"><br><br>

<div class="tab-content">
<form action="../controller/new_usuario.php" method="POST">
<div class="row border">
                    <div class="col-md-12"> <br>
                    <h4>Datos del responsable de la IES encargado de reportar y dar atención sobre los avances de Educación Dual</h4>
                   <div class="alert alert-warning" role="alert">Los datos de contacto (correo y teléfono Institucional) serán publicados en este sitio</div>
                    </div> 
                    <div class="col-md-3">
                     <div class="form-group">
                        <label for="exampleInputEmail1">Entidad de la IES</label>
                         <select class="form-control" name="entidad" id="entidad" required>
                            <option value="">Seleccione:</option>
                                    <?php
                                     while ($resul = $entidad->fetch_assoc()) { 
                                       echo '<option value="'.$resul['id_cat_entidad'].'">'.$resul['nombre_entidad'].'</option>';    
                                     }
                                     ?>
                        </select>                       
                      </div>                       
                     </div>


                     <div class="col-md-9">    
                     <div class="form-group">
                        <label for="exampleInputEmail1">Nombre de la IES</label>
                        <select class="form-control" name="ies" id="ies">
                        </select>                        
                      </div>                      
                     </div>

                     


                    <div class="col-md-8">    
                     <div class="form-group">
                        <label>Nombre completo del responsable</label>
                        <input type="text" name="nombre_responsable" pattern="[A-Za-z0-9\u00C0-\u017F ]+" class="form-control" onChange="conMayusculas(this)" required>
                      </div>                      
                     </div>

                    <div class="col-md-4">    
                     <div class="form-group">
                        <label>Cargo</label>
                        <input type="text" name="cargo" class="form-control"  onChange="conMayusculas(this)" pattern="[A-Za-z0-9\u00C0-\u017F ]+" required>
                      </div>                      
                     </div>

                    <div class="col-md-6">    
                     <div class="form-group">
                        <label>Teléfono</label>
                        <input type="number" name="telefono" maxlength="10" placeholder="Número de teléfono a 10 caracteres" class="form-control" required>
                      </div>                      
                     </div>

                    <div class="col-md-6">    
                     <div class="form-group">
                        <label>Teléfono celular</label>
                        <input type="number" name="celular" maxlength="10"  placeholder="Número de teléfono celular a 10 caracteres" class="form-control" >
                      </div>                      
                     </div>

                     <div class="col-md-6">    
                     <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" id="username" class="form-control" onChange="conMayusculas(this)" required>
                      </div>  
                      <div id="result-username"></div>                    
                     </div>

                     <div class="col-md-6">    
                     <div class="form-group">
                     <div class="row">
                        <div class="col-md-6"> 
                        <label>Contraseña</label>
                        <input type="password" name="password" maxlength="10" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" class="form-control" required>
                        </div>
                        <div class="col-md-6"> 
                        <label>Validar Contraseña</label>
                        <input type="password" name="password2" maxlength="10" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" class="form-control" required>
                        </div>
                     </div>


                        <p>La contraseña debe contener minimo 6 caracteres y maximo 10 caracteres, por lo menos un número, una mayúscula y minúscula</p>
                      </div>                      
                     </div>

                     <div class="col-md-3"><br>
                     <button type="submit" class="btn btn-block btn-primary btn-lg">Registrar</button><br><br>
                     </div>    

</div> 




</form> <br><br>
<!-- /Registro beneficiario -->
</div>

<br><br>

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
    <!--  <script src="../assets/js/jquery.min.js"></script>-->
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
        <script src="../assets/js/pas.js"></script>


<!--
      <script language="javascript">
         $(document).ready(function(){
           $("#entidad").change(function () {          
             $("#entidad option:selected").each(function () {
               id_cat_entidad = $(this).val();
               $.post("../includes/getSubsistema.php", {id_cat_entidad: id_cat_entidad }, function(data){
                 $("#subsistema").html(data);
               });            
             });
           })
         });      
      </script>-->

      <script language="javascript">
         $(document).ready(function(){
           $("#entidad").change(function () {          
             $("#entidad option:selected").each(function () {
               id_cat_entidad = $(this).val();
               $.post("../includes/getIes.php", { id_cat_entidad: id_cat_entidad }, function(data){
                 $("#ies").html(data);
               });            
             });
           })
         });      
      </script>

</html>