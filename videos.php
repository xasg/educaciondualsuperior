<!--Pequeño cambio  -->
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <link rel="icon" href="assets/images/favicon.png" sizes="35x35" type="image/png">
        <title>Dual</title>
        <link rel="stylesheet" href="assets/css/all.min.css">
        <link rel="stylesheet" href="assets/css/flaticon.css">
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">
        <link rel="stylesheet" href="assets/css/perfect-scrollbar.css">
        <link rel="stylesheet" href="assets/css/slick.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
        <link rel="stylesheet" href="assets/css/color.css">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
         <link rel="stylesheet" href="style-button-ws.css">
          <style>        
    </style>
		<script language="JavaScript"> 
         function conMayusculas(field) 
         { 
             field.value = field.value.toUpperCase() 
         }   
      </script>
<script async src="https://www.googletagmanager.com/gtag/js?id=G-HZVPVQSG3M"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-HZVPVQSG3M');
</script>
    </head>
    <body>
        <!-- <div class="whatsapp-button" onclick="abrirWhatsApp()">
        <i class="fab fa-whatsapp"></i> -->
        <div class="whatsapp-button" onclick="toggleWhatsAppPopup()">
        <!-- <i class="fab fa-whatsapp"></i> -->
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-whatsapp" width="30" height="30" viewBox="0 0 24 24" stroke-width="2" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9" />
            <path d="M9 10a.5 .5 0 0 0 1 0v-1a.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a.5 .5 0 0 0 0 -1h-1a.5 .5 0 0 0 0 1" />
          </svg>
        </div>
        <div id="whatsappPopup" class="whatsapp-popup">
            <button class="close-button" onclick="toggleWhatsAppPopup()">X</button>
            <h2 class="text-light">¡Hola!</h2>
            <p class="text-light" >Gracias por visitar nuestro sitio web. ¿Cómo podemos ayudarte hoy?</p>

            <textarea class="input-field" id="whatsappMessage" placeholder="Escribe tu mensaje"></textarea>

            <button class="send-button" onclick="sendWhatsAppMessage()">Enviar</button>
            <button class="send-button" onclick="clearWhatsAppMessage()">Limpiar</button>
          </div>

    </div>       
    </div>
        <main>
            <header class="stick style1 w-100" style=" background-color: #98213A;">
                <div class="container">
                    <div class="logo-menu-wrap w-100 d-flex flex-wrap justify-content-between align-items-start">
                         <div class="logo"><h1 class="mb-0"><a href="#" title="Home"><img class="img-fluid" src="assets/images/img/logo_blanco2.png" alt="Logo" srcset="assets/images/img/logo_blanco2.png"></a></h1></div> 
                        <nav class="d-inline-flex align-items-center">
                            <div class="header-left">
                                <ul class="mb-0 list-unstyled d-inline-flex">
                                    <li class="menu-item-has-children"><a href="index.php" title="">INICIO</a></li>
                                    <li class="menu-item-has-children"><a href="historia.html" title="">HISTORIA</a></li>  
                                    <li><a href="view/login.php" title="">FORMULARIO</a></li>
                                    <!-- <li><a href="oferta.html" title="">OFERTA</a></li> -->
                                    <!-- <li><a href="#" title="">BLOG</a></li> -->
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
                    <li class="menu-item-has-children"><a href="index.php" title="">INICIO</a></li>
                    <li class="menu-it@em-has-children"><a href="historia.html" title="">HISTORIA</a></li>  
                    <li><a href="view/login.php">FORMULARIO</a></li>
                    <!-- <li><a href="oferta.html" title="">OFERTA</a></li> -->
                    <!-- <li><a href="#" title="">BLOG</a></li>                          -->
                </ul>
            </div><!-- Menu Wrap -->

            <div class="login-popup-wrap position-fixed h-100 text-center d-flex flex-wrap align-items-center justify-content-center w-100" data-backdrop="static" data-keyboard="false">
                <div class="login-popup-inner d-inline-block w-100">
                    <h3 class="mb-0">Login sesión virtual </h3>
                   <form action="controller/login.php" method="POST">
						               <div class="form-group"> 
                                      <label for="Email" name="inicio">Email</label>
                                      <input type="text" class="form-control" name="correo" onChange="conMayusculas(this)" required="">
                                      <label for="Pass">Password</label>
                                      <input type="password" class="form-control" name="password" required="">
                            </div>                       
                            <?php
                     // Esto evaluará a TRUE así que el texto se imprimirá.
                    if (isset($_GET['error'])) {
                        ?>
                        <div class="alert alert-danger" role="alert">
                          Los datos de acceso que ingreso son incorrectos
                        </div>
                    

                   <?php } ?>

            <button class="thm-btn fill-btn" type="submit" >Iniciar<span></span></button>          
                        <!-- <a class="d-inline-block" href="javascript:void(0);" title="">Forget A Password</a> -->
                    </form>
                </div>
            </div><!-- Login Popup -->
                      

<div class="container-fluid" style="padding-top: 9%">
            <section>
                <div id="accordion">
                    <div class="row">
                        <div class="pad col-4 col-lg-2 col-md-2 text-center">
                            <a data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <div class="view overlay">
                                    <button type="button" class="btn btn-outline-danger">
                                        <img src="img/sur_sureste.png" class="img-fluid" alt="Responsive image">
                                    </button>
                                </div>
                            </a>
                        </div>
                        <div class="pad col-4 col-lg-2 col-md-2 text-center">
                            <a data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <div class="view overlay">
                                    <button type="button" class="btn btn-outline-danger">
                                        <img src="img/centro_sur.png" class="img-fluid" alt="Responsive image">
                                    </button>
                                </div>
                            </a>
                        </div>
                        <div class="pad col-4 col-lg-2 col-md-2 text-center">
                            <a data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <div class="view overlay">
                                    <button type="button" class="btn btn-outline-danger">
                                        <img src="img/centro_occidente.png" class="img-fluid" alt="Responsive image">
                                    </button>
                                </div>
                            </a>
                        </div>
                        <div class="pad col-4 col-ms-3 col-lg-2 col-md-2 text-center">
                            <a data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <div class="view overlay">
                                    <button type="button" class="btn btn-outline-danger">
                                        <img src="img/noreste.png" class="img-fluid" alt="Responsive image">
                                    </button>
                                </div>
                            </a>
                        </div>
                        <div class="pad col-4 col-lg-2 col-md-2 text-center">
                            <a data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                <div class="view overlay">
                                    <button type="button" class="btn btn-outline-danger">
                                        <img src="img/noroeste.png" class="img-fluid" alt="Responsive image">
                                    </button>
                                </div>
                            </a>
                        </div>
                        <div class="pad col-4 col-lg-2 col-md-2 text-center">
                            <a data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                <div class="view overlay">
                                    <button type="button" class="btn btn-outline-danger">
                                        <img src="img/metropolitana.png" class="img-fluid" alt="Responsive image">
                                    </button>
                                </div>
                            </a>
                        </div>
                    </div><br><br>



                    
                    
                    <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 text-center" style="background-color:#8D203D">
                                    <h1 style="color: #ffffff">Región Sur sureste</h1>
                                </div>
                            </div><br><br><br><br>
                            
                            <div class="container">
                                <!---------->
                                <div class="row">
                                    <div id="videoContainer1" class="col-md-12 col-lg-12">
                                        <!-- Aquí se mostrará el video -->
                                        <iframe width="100%" height="600" src="https://www.youtube.com/embed/e3pdeS-z0kU" title="Foros de Vinculación Región &quot;Sur Sureste&quot;" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                    </div> 
                                </div> 
                            </div>
                        </div>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 text-center" style="background-color:#8D203D;">
                                    <h1 style="color: #ffffff">Región Centro Sur</h1>
                                </div>
                            </div><br><br><br><br>
                        <div class="container">
                                <!---------->
                                <div class="row">
                                    <div id="videoContainer1" class="col-md-12 col-lg-12">
                                        <!-- Aquí se mostrará el video -->
                                        <iframe width="100%" height="600" src="https://www.youtube.com/embed/SOjh43IM8uI" title="Foros de Vinculación Región &quot;Centro Sur&quot;" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                    </div> 
                                </div> 
                            </div>
                        </div>
                    </div>

                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 text-center" style="background-color:#8D203D">
                                    <h1 style="color: #ffffff">Región Centro Occidente</h1>
                                </div>
                            </div><br><br><br><br>

                             <div class="container">
                                <!---------->
                                <div class="row">
                                    <div id="videoContainer1" class="col-md-12 col-lg-12">
                                        <!-- Aquí se mostrará el video -->
                                        <iframe width="100%" height="600" src="https://www.youtube.com/embed/feHi8hYUTlw" title="Foros de Vinculación Región &quot;Centro Occidente&quot;" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                    </div> 
                                </div> 
                            </div>
                        </div>
                    </div>


                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 text-center" style="background-color:#8D203D">
                                    <h1 style="color: #ffffff">Región Noreste</h1>
                                </div>
                            </div><br><br><br><br>

                                <div class="container">
                                <!---------->
                                <div class="row">
                                    <div id="videoContainer1" class="col-md-12 col-lg-12">
                                        <!-- Aquí se mostrará el video -->
                                        <iframe width="100%" height="600" src="https://www.youtube.com/embed/KBicCc86VYE" title="Foros de Vinculación Región &quot;Noreste&quot;" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                    </div> 
                                </div> 
                            </div>
                        </div>
                    </div>


                   <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 text-center" style="background-color:#8D203D">
                                    <h1 style="color: #ffffff">Región Noroeste</h1>
                                </div>
                            </div><br><br><br><br>

                             <div class="container">
                                <!---------->
                                <div class="row">
                                    <div id="videoContainer1" class="col-md-12 col-lg-12">
                                        <!-- Aquí se mostrará el video -->
                                        <iframe width="100%" height="600" src="https://www.youtube.com/embed/-jEvfkYWAOI" title="Foros de Vinculación Región &quot;Noroeste&quot;" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                    </div> 
                                </div> 
                            </div>
                        </div>
                    </div>


                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 text-center" style="background-color:#8D203D">
                                    <h1 style="color: #ffffff">Región Metropolitana</h1>
                                </div>
                            </div><br><br><br><br>

                             <div class="container">
                                <!---------->
                                <div class="row text-center">
                                    <div id="videoContainer1" class="col-md-120 col-lg-12">
                                        <!-- Aquí se mostrará el video -->
                                        <iframe width="100%" height="600" src="https://www.youtube.com/embed/vnwPHdhcuYY" title="Foros de Vinculación Región &quot;Metropolitana&quot;" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                    </div> 
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="container-fluid" style="padding-top: 15%">
            

        </div>


<footer class="justify-content-center" style=" background-color: #98213A;" id="contacto" >
                
                <div class="footer-widget-area justify-content-center">
                    <br>
                    <div class="container align-items-center">
                        <div class="container row container-fluid   ">
                        <!--------------------------------------------------------------------------------------->
                            <div class="col-md ">
                                <img src="img/logo/LogoESR.webp" class="equalheight" title="Ve nuestro apartado esr" alt="Empresa socialmente responsable"/></a> <!--Se cambio el nombre y se agrego un metadato-->
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

</div>
        </main><!-- Main Wrapper -->

        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/counterup.min.js"></script>
        <script src="assets/js/jquery.downCount.js"></script>
        <script src="assets/js/jquery.fancybox.min.js"></script>
        <script src="assets/js/perfect-scrollbar.min.js"></script>
        <script src="assets/js/slick.min.js"></script>
        <script src="assets/js/custom-scripts.js"></script>
        <script src="assets/js/simplyCountdown.min.js"></script>
        <script src="assets/js/countdown.js"></script>
        <!--javascript del Boton wstap-->
        <script src="btn-ws.js"></script>            
    </body>	
</html>