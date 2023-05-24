<?php 
require_once('../model/databases.php');
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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
    </style>
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
   <div class="whatsapp-button" onclick="abrirWhatsApp()">
        <i class="fab fa-whatsapp"></i>
    </div>
  <header class="stick style1 w-100" style=" background-color: #98213A;">
                <div class="container">
                    <div class="logo-menu-wrap w-100 d-flex flex-wrap justify-content-between align-items-start">
                        <div class="logo"><h1 class="mb-0"><a href="../index.php" title="Home"><img class="img-fluid" src="../assets/images/img/logo_blanco2.png" alt="Logo" srcset="../assets/images/img/logo_blanco2.png"></a></h1></div> 
                       <nav class="d-inline-flex align-items-center">
                            <div class="header-left">
                                <ul class="mb-0 list-unstyled d-inline-flex">
                                    <li class="menu-item-has-children"><a href="../" title="">INICIO</a></li>
                                    <li class="menu-item-has-children"><a href="../historia.html" title="">HISTORIA</a></li>  
                                    <!-- <li><a href="#" title="">FORMULARIO</a></li> -->
                                    <!-- <li><a href="../oferta.html" title="">OFERTA</a></li> -->
                                    <!-- <li><a href="#" title="">BLOG</a></li>   -->

                                </ul>
                            </div>
                            <div class="header-right-btns ">
                                    <!--<a class="search-btn" href="javascript:void(0);" title="">
                                        <i class="flaticon-magnifying-glass"></i></a>-->
                                                                
                                   <a class="menu-btn" href="javascript:void(0);" title=""><i class="flaticon-menu"></i></a>
                                   <!-- <a href="view/login.php"><i class="flaticon-user"></i></a> -->
                                </div>
                        </nav>
                    </div><!-- Logo Menu Wrap -->
                </div>
            </header><!-- Header -->

         <!-- Menu Wrap -->
         <section>
            <div class="w-100 text-center position-relative">                   
            </div>
             <div class="menu-wrap">
                <span class="menu-close"><i class="fas fa-times"></i></span>
                <ul class="mb-0 list-unstyled w-100">
                    <li class=""><a href="../" title="">INICIO</a></li>
                    <li class="menu-it@em-has-children"><a href="../historia.html" title="">HISTORIA</a></li>  
                    <!-- <li><a href="login.php">FORMULARIO</a></li> -->
                    <!-- <li><a href="../oferta.html" title="">OFERTA</a></li> -->
                    <!-- <li><a href="#" title="">BLOG</a></li>                          -->
                </ul>
            </div>
            <br><br><br>
         </section>




<div class="container"><br><br>

      
<!-- /Registro beneficiario -->


<!--login beneficiario  -->
<div class="tab-pane" role="tabpanel" aria-labelledby="profile-tab">
 <p>
   </p><form action="../controller/login.php" method="POST">
                <div class="row">
                <div class="col-md-12">
                    <h2>Hola, le damos la bienvenida de nuevo.<br><br></h2>
                </div>
                </div>
                <div class="row">
                 <div class="col-md-4 border">
                    <div class="col-md-12"><br>
                     <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="text" class="form-control" name="correo"  placeholder="Ingresa tu email" onChange="conMayusculas(this)" required>
                      </div>                      
                     </div>

                     <div class="col-md-12">    
                     <div class="form-group">
                        <label for="exampleInputEmail1">Contraseña</label>
                        <input type="password" class="form-control" name="password"  placeholder="Ingresa tu contraseña" required>
                      </div>                      
                     </div>



                     <div class="col-md-12"> <br>
                      <button type="submit" class="btn btn-block btn-primary btn-lg">Ingresar</button><br><br>
                     </div>


                    <?php
                     // Esto evaluará a TRUE así que el texto se imprimirá.
                    if (isset($_GET['error'])) {
                        ?>
                        <div class="alert alert-danger" role="alert">
                          Los datos de acceso que ingreso son incorrectos
                        </div>
                    

                   <?php } ?>


                     <div class="col-md-12 text-center">
                        <p>¿No tienes una cuenta?</p>
                     </div>
                      <div class="col-md-12"> 
                      <a href="formulario.php" class="btn btn-block btn-primary" aria-disabled="true">Regístrate</a>
                     </div>

                     </div>
                     <div class="col-md-8">
                        <img src="../img/img_login.png" class="img-fluid" alt="Responsive image"> 
                     </div>
                </div>  
 </form>
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
      </script>

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