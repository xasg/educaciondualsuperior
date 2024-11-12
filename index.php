<?php
/** require_once('model/conteo.php');
$rep_ies = rep_ies();
$ies=$rep_ies['ies'];
$rep_programas = rep_programas();
$programas=$rep_programas['programas'];
$rep_estudiantes = rep_estudiantes();
$estudiantes=$rep_estudiantes['estudiantes'];
$rep_egresados = rep_egresados();
$egresados=$rep_egresados['egresados'];
$rep_unidad = rep_unidad();
$unidad=$rep_unidad['unidad'];**/
?>
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
         <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js"></script>

          <style>
        /* .whatsapp-button {
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
        } */
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
                                    <li><a href="javascript:void(0);" title="">INICIO</a></li>
                                    <li><a href="historia.html" title="">HISTORIA</a></li>  
                                    <li><a href="view/login.php" title="">FORMULARIO</a></li>
                                    <li><a href="videos.php" title="">VIDEOS</a></li>
                                    <li><a href="mapa.php" title="">OFERTA</a></li> 
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
                    <li><a href="javascript:void(0);" title="">INICIO</a></li>
                    <li><a href="historia.html" title="">HISTORIA</a></li>  
                    <li><a href="view/login.php">FORMULARIO</a></li>
                    <li><a href="videos.php" title="">VIDEOS</a></li>
                    <li><a href="mapa.php" title="">OFERTA</a></li>                    -->
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
            </div><!-- Login Popup --><br><br><br><br><br><br><br>
                      

<div class="container-fluid">
<br><br><br><br>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/carusel/carrusel_01.png" alt="">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/carusel/carrusel_02.png" alt="">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/carusel/carrusel_03.png" alt="">
    </div>
  </div>

  <div class="carousel-caption d-none d-md-block"> 
        
        <div class="row">
          <div class="col-md-12">
            <h1 style="color: #fff;"><strong>Los estudiantes</strong> <br>Identifica la oferta educativa con modalidad en educación Dual</h1>
            <br><br> <br><br><br><br><br><br><br><br><br>
          </div><style type="text/css"></style>
        </div>
      </div>

</div>
</div>


                 

<section>
                <div class="container">
                    <div class="row">
                    <div class="col-md-12 col-sm-12 col-lg-12 text-justify" style="padding-top: 9%"> 
                         <h1 style="color: #98213A;">¿Qué es Educación Dual?</h1><br>
                         <p>En México diversas instituciones educativas del tipo medio superior y superior han impulsado proyectos de formación de sus estudiantes en coordinación con los sectores productivos a los que se les ha referido como formación o educación dual.</p>
                         <p>En la educación superior, la educación dual es una modalidad y opción educativa en la que el proceso de aprendizaje del estudiante se lleva a cabo de manera articulada en una institución educativa y en contextos reales del ámbito laboral, en unidades económicas (empresas, cooperativas, instituciones públicas, fundaciones, organizaciones, etc.) a través de fases teórico - prácticas interrelacionadas que se complementan entre sí.</p>
                         <p>Parte del principio de “aprender haciendo”, donde los estudiantes tienen un acercamiento directo y oportuno con la realidad del mundo productivo, el cual es orientado a partir de un plan de formación en el que se establece qué, cómo, cuándo y bajo qué criterios tendrá lugar la formación del estudiante en ambos espacios de aprendizaje, de acuerdo al programa de estudios y a las funciones productivas del entorno laboral. </p>
                    </div>	

                    <div class="col-md-8 col-sm-8 col-lg-8" style="padding-top: 2%">                        
                         <iframe src="https://player.vimeo.com/video/719179373?h=8fa8921de4" width="100%" height="80%" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
                         <br><br><br> <br><br> <br><br><br> <br><br>  <br><br><br> <br><br> 
                    </div>

                    </div>
                </div>			 
</section>




<div class="container-fluid call-back-section text-center" style="background-image:url(img/canv.png);"> 
                        <div class="row"> 
                        <div class="col-md-8">
                            <br>
                            <h1 style="color: #fff;">Marco General</h1>
                            <h3 style="color: #fff;">Para la educación DUAL del tipo superior en méxico</h3>
                            <br>
                            <button type="button" class="btn btn-danger"  data-toggle="modal" data-target="#exampleModal" >Saber más</button>
                            <a href="https://educacionsuperior.sep.gob.mx/pdfs/2024/Marco_Educacion_Dual.pdf" target="_blank" style="color: #98213A;">
                            <button type="button" class="btn btn-danger">Descargar</button>
                            </a>
                        </div>           

                         <div class="col-md-2 text-right">
                            <div data-anijs="if: scroll, on: window, do: rollIn animated, before: scrollReveal; if: load, on: window, do: rubberBand animated; if: mouseover, do: rubberBand animated">
                            <img class="img-fluid" src="img/marco.jpg">
                            </div>
                        </div>

                        </div>
                    
</div>




<!--
<section> 
<div class="container">
    <div class="row">
    <div class="col-md-3 text-center">
      <div class="service-box mt-5 mx-auto">
       <img src="img/icons/1.png" class="">
       <h3 class="counter tipo">300<?php //echo $ies;?></h3>
       <p><strong>IES con programas </strong></p>
     </div>
   </div>


   <div class="col-md-3 text-center">
    <div class="service-box mt-5 mx-auto">
      <img src="img/icons/2.png" class="">
      <h3 class="counter tipo">15091<?php //echo $estudiantes;?></h3>
      <p><strong>Estudiantes </strong></p>
    </div>
  </div>  


  <div class="col-md-3 text-center">
    <div class="service-box mt-5 mx-auto">
      <img src="img/icons/3.png" class="">
      <h3 class="counter tipo">11046<?php //echo $egresados;?></h3>
      <p><strong>Egresados</strong></p>
    </div>
  </div>

   <div class="col-md-3 text-center">
    <div class="service-box mt-5 mx-auto">
      <img src="img/icons/4.png" class="">
      <h3 class="counter tipo">5764<?php //echo $unidad;?></h3>
      <p><strong>Unidades económicas</strong></p>
    </div>
  </div>
</div>
 </section><br><br><br>		

-->



 <div class="container">
        <div class="row">
            <div class="col-md-12 text-justify" style="padding-top: 5%"> 
                <h1 style="color: #98213A;">¿Dónde estamos?</h1><br>
            </div>

            <div class="col-md-12 text-center" style="padding-top: 2%;"> 
                 <img class="img-fluid" src="img/estamos/logo_dual.jpg" style="width: 20%;">                 
            </div>

            <div class="col-md-12 text-center" style="padding-bottom: 3%";> 
                 <img class="img-fluid" src="img/estamos/arriba.jpg">                
            </div>

            <div class="col-md-3 text-center" >
            <div class="card ">
                <img class="img-fluid" src="img/estamos/UTyP.png" style="width: 50%;">
              <div class="card-body">
                <p><h3 class="counter text-center">41</h3>Universidades Tecnológicas</p>
                <p><h3></h3>con una matrícula de</p>
                <p><h3 class="counter tipo text-center">2,348</h3>estudiantes<p>
              </div>
            </div>
            </div>



            <div class="col-md-3 text-center" >
            <div class="card">
                <img class="img-fluid" src="img/estamos/TecNM.png" style="width: 50%;">
              <div class="card-body">
                <p><h3 class="counter">128</h3>Instituciones del <br>TecNM</p>
                <p><h3></h3>con una matrícula de</p>
                <p><h3 class="counter">3,097</h3>estudiantes<p>
              </div>
            </div>
            </div>


            <div class="col-md-3 text-center">
            <div class="card">
                <img class="img-fluid" src="img/estamos/anuies.png" style="width: 50%;">
                <div class="card-body">
                <p><h3  class="counter">14</h3>Universidades Públicas Estatales</p>
                <p><h3  class="counter">2</h3>Universidades Interculturales</p>
                <p><h3></h3>IPN, Zacatecas</p>
                <p><h3></h3>con una matrícula de</p>
                <p><h3 class="counter">1,078</h3>estudiantes<p>
              </div>
            </div>
            </div>



            <div class="col-md-3 text-center" >
            <div class="card">
                <img class="img-fluid" src="img/estamos/UTyP.png" style="width: 50%;"> 
             <div class="card-body">
                <p><h3 class="counter text-center">2</h3>Universidades Privadas</p>
                <p><h3></h3>con una matrícula de</p>
                <p><h3 class="counter tipo text-center">129</h3>estudiantes<p>
              </div>
            </div>
            </div>
            <div class="col-md-12 text-center" style="padding-top: 2%;"> 
                 <img class="img-fluid" src="img/estamos/abajo.jpg">
            </div>

        </div>
</div>


<div class="container text-center" style="padding-top: 5%">
    <p>Estudiantes bajo la modalidad de educación dual por entidad federativa</p>

    <div class="row">
    <div class="col">        
            <div class="card-body">
                <div class="col-md-12">
                    <canvas id="ChartDual"></canvas>
                </div>  
           </div>
    </div>
</div>
</div>









<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <div class="col-md-12 text-center">
                <!--<img class="img-fluid" src="assets/img/logos/feseverde.png">-->
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
            </div>
        
      </div>
      <div class="modal-body">
        <div class="col-md-12"> 
            <div class="col-md-12 color_titulo"><br>
                <h3 style="color: #98213A;">Marco normativo</h3>
            </div>
            <div class="col-md-12 text-justify">
                <p><strong>Durante los últimos años se han sentado las bases normativas y metodológicas de la educación dual del tipo superior:</strong></p>
                <ul>
                <li><p>Se establece como una modalidad educativa en el artículo 12 de la <a href="https://www.diputados.gob.mx/LeyesBiblio/pdf/LGES_200421.pdf" target="_blank" style="color: #98213A;">Ley General de Educación Superior</a>, publicada en abril de 2021.</p></li>
                <li><p>Se define como una modalidad y opción educativa del tipo superior en el <a href="https://dof.gob.mx/nota_detalle.php?codigo=5669525&fecha=25/10/2022#gsc.tab=0" target="_blank" style="color: #98213A;">Acuerdo Secretarial  20/10/22</a>, publicado en octubre de 2022.</p></li>
                <li><p>Se describe en el documento <a href="https://educacionsuperior.sep.gob.mx/pdfs/2024/Marco_Educacion_Dual.pdf" target="_blank" style="color: #98213A;">Marco General para la Educación Dual del Tipo Superior en México</a>, presentado en el Consejo Nacional para la Coordinación de la Educación Superior (CONACES) en junio de 2024.</p></li> 
                </ul>
            </div>

            <div class="col-md-12 text-justify">
                <p><strong>En el ámbito programático se contempla en diversos mecanismos de política pública como:</strong></p>
                <ul>
                <li><p>En el <a href="https://www.gob.mx/cms/uploads/attachment/file/562380/Programa_Sectorial_de_Educaci_n_2020-2024.pdf" target="_blank" style="color: #98213A;">Programa Sectorial de Educación 2020-2024</a> se establece como acción puntual en el numeral 2.1.9 de la estrategia prioritaria 2.1 del objetivo prioritario 2, que se deberá consolidar, con la participación de los sectores productivos, el Sistema de Educación Dual en el tipo medio superior y superior.</p></li>
                <li><p>El <a href="https://www.dof.gob.mx/nota_detalle.php?codigo=5712746&fecha=28/12/2023#gsc.tab=0
" target="_blank" style="color: #98213A;">Programa Nacional de Educación Superior 2023-2024 (PRONES)</a>, como parte de la Estrategia prioritaria 4.1., se establece como una acción puntual: 4.1.2.- Promover, en el marco de las COEPES o instancias equivalentes, acciones de vinculación de las IES con los sectores social y productivo, dando particular impulso a la educación dual.</p></li>
                </ul>
            </div>


        </div>
      </div>
    </div>
  </div>
</div>
<!-- /Modal -->




<footer class="justify-content-center" style=" background-color: #98213A;" id="contacto">
                
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



<script>
    var ctx = document.getElementById("ChartDual").getContext("2d");
    var MyChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['México', 'Nuevo Léon', 'Hidalgo', 'Guanajuato', 'Puebla', 'Jalisto', 'Aguascalientes', 'San Luis Potosí', 'Michoacán', 'Veracruz', 'Querétaro', 'Yucatán', 'Sinaloa', 'Zactecas', 'Tabasco', 'Ciudad de México', 'Coahuila', 'Tlaxcla', 'Chiapas', 'Sonora','Baja California', 'Campeche', 'Chihuahua', 'Quintana Roo', 'Durango', 'Guerrero', 'Oaxaca', 'Tamaulipas', 'Morelos', 'Baja California Sur', 'Colima', 'Nayarit'],
            datasets: [{
                label: 'Numero de estudiantes',
                data: [2032, 761, 494, 487, 467, 408, 340, 334, 267, 266, 151, 151, 150, 146, 143,142,142,126,113,108,79,41,41,23,22,22,22,12,10,3,2,1],
                backgroundColor: [
                    'rgb(0, 153, 255, 0.5)',
                    'rgb(163, 0, 204, 0.5)',
                    'rgb(0, 51, 17, 0.5)',
                    'rgb(255, 102, 0, 0.5)',
                    'rgb(179, 179, 0, 0.5)',
                    'rgb(255, 0, 0, 0.5)',
                    'rgb(0, 255, 255, 0.5)',
                    'rgb(204, 51, 0, 0.5)',
                    'rgb(68, 204, 0, 0.5)',
                    'rgb(0, 0, 204, 0.5)',
                    'rgb(102, 0, 102, 0.5)',
                    'rgb(102, 153, 255, 0.5)',
                    'rgb(0, 153, 255, 0.5)',
                    'rgb(163, 0, 204, 0.5)',
                    'rgb(0, 51, 17, 0.5)',
                    'rgb(255, 102, 0, 0.5)',
                    'rgb(179, 179, 0, 0.5)',
                    'rgb(255, 0, 0, 0.5)',
                    'rgb(0, 255, 255, 0.5)',
                    'rgb(204, 51, 0, 0.5)',
                    'rgb(68, 204, 0, 0.5)',
                    'rgb(0, 0, 204, 0.5)',
                    'rgb(102, 0, 102, 0.5)',
                    'rgb(102, 153, 255, 0.5)',
                     'rgb(102, 153, 255, 0.5)',
                    'rgb(0, 153, 255, 0.5)',
                    'rgb(163, 0, 204, 0.5)',
                    'rgb(0, 51, 17, 0.5)',
                    'rgb(255, 102, 0, 0.5)',
                    'rgb(179, 179, 0, 0.5)',
                    'rgb(255, 0, 0, 0.5)',
                    'rgb(0, 255, 255, 0.5)',
                ]
            }]
        }
    });
</script>         
    </body>	
</html>