<?php
$entidad= $_GET["entidad"];
$entidad2=$_GET["entidad"];
?>

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
                    <li class="menu-item-has-children"><a href="index.php" title="">INICIO</a></li>
                    <li class="menu-it@em-has-children"><a href="historia.html" title="">HISTORIA</a></li>  
                    <li><a href="view/login.php">FORMULARIO</a></li>
                    <li><a href="videos.php" title="">VIDEOS</a></li>
                    <li><a href="mapa.php" title="">OFERTA</a></li>                         -->
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
                      


<div class="container-fluid" style="padding-top: 8%">
<div class="row">

<div class="col-md-2">
<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
  <a class="nav-link" href="mapa.php" role="tab" aria-controls="v-pills-home" aria-selected="true">INICIO</a>
  <a class="nav-link"  href="info.php?entidad=01" >AGUASCALIENTES</a>
  <a class="nav-link"  href="info.php?entidad=02" >BAJA CALIFORNIA</a>
  <a class="nav-link"  href="info.php?entidad=03" >BAJA CALIFORNIA SUR</a>
  <a class="nav-link"  href="info.php?entidad=01" role="tab">CAMPECHE</a>
  <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">CHIAPAS</a>
  <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">CHIHUAHUA</a>
  <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">CIUDAD DE MÉXICO</a>
  <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">COAHUILA</a>
  <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">COLIMA</a>
  <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">DURANGO</a>
  <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">GUANAJUATO</a>
  <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">GUERRERO</a>
  <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">HIDALGO</a>
  <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">JALISCO</a>
  <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">MÉXICO</a>
</div>
</div>
<?php // echo $entidad;?>
<?php // echo $entidad2;?>
<div class="col-md-9">
    <div class="col-md-12 text-center">
        <h1>IES que ofertan eduacción con modalidad en </h1>
    </div>
    <div class="row">
    <?php
    require_once('controller/conec.php');          
    $sql = "SELECT cat_entidad.id_cat_entidad, nombre_entidad,dt_nombre_ies, responsable.id_usuario, dt_latitud, dt_longitud, dt_nom_responsable,
   COUNT(DISTINCT programa_educativo.id_programa) as programas_educativos,
   COUNT(unidad_educativa.id_programa_educativo) as unidad_economica,
   SUM(unidad_educativa.dt_estudiante_fem + unidad_educativa.dt_estudiante_mas) as estudiantes,
   SUM(unidad_educativa.dt_egresados_fem + unidad_educativa.dt_egresados_mas) as egresados
   FROM usuarios
   LEFT JOIN responsable ON(responsable.id_usuario=usuarios.id_usuario)
   LEFT JOIN cat_ies ON(cat_ies.id_ies=usuarios.id_ies)
   LEFT JOIN cat_subsistema ON(cat_subsistema.id_cat_subsistema = cat_ies.id_cat_subsistema)
   LEFT JOIN cat_entidad ON(cat_entidad.id_cat_entidad = responsable.dt_entidad)
   LEFT JOIN programa_educativo ON(programa_educativo.id_usuario = responsable.id_usuario)
   LEFT JOIN unidad_educativa ON(programa_educativo.id_programa = unidad_educativa.id_programa_educativo)
   LEFT JOIN info_ies ON(responsable.id_usuario=info_ies.id_user)
   where usuarios.dt_tipo=2 AND id_cat_entidad= {$entidad2} AND nombre_entidad IS  NOT NULL 
   GROUP BY dt_correo ORDER BY nombre_entidad ASC";
            $resultSet = mysqli_query($mysqli, $sql);
            while ($row = mysqli_fetch_row($resultSet)) {
                ?>
                <div class="col-md-3">
                    <div class="card-deck mt-4">
                    <div class="card">
                         <div class="card-header">
                            <h5 class="card-title"><?php echo $row[2]; ?></h5>
                        </div>
                        <!--<img src="images/<?php // echo $row[3]; ?>" class="card-img-top" alt="...">-->
                        <div class="card-body">   
                            <h5 style="font-size: 18px">Datos de Educación dual</h5>                         
                            <p class="card-text">
                                Programas educativos:<?php echo $row[7]; ?>
                            </p>
                            <p class="card-text">
                                Unidades económicas:<?php echo $row[8]; ?>
                            </p>   
                            <p class="card-text">
                                Estudiantes inscritos:<?php echo $row[9]; ?>
                            </p> 
                            <p class="card-text">
                                Estudiantes egresados:<?php echo $row[10]; ?>
                            </p>                  
                        </div>
                        <div class="card-footer">
                         <a href="#" class="btn btn-primary">Contacto</a>
                         <a href="#" class="btn btn-outline-dark">Ubicación</a>
                        </div>
                    </div>
                   </div>
                </div>

            <?php
            }
            ?> 
        </div>
</div>
</div>
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
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>



        <script>
          var customLabel = {
              restaurant: {
                  label: 'R'
              },
              bar: {
                  label: 'B'
              }
          };
      
          function initMap() {
              var map = new google.maps.Map(document.getElementById('map-container-google-2'), {
                  center: new google.maps.LatLng(24.740368799806674, -98.84946664758593),
                  zoom: 5,
                  heading: 90,
                  tilt: 45
              });
      
      
              var infoWindow = new google.maps.InfoWindow;
              downloadUrl('xml.php', function(data) {
                  var xml = data.responseXML;
                  var markers = xml.documentElement.getElementsByTagName('marker');
                  Array.prototype.forEach.call(markers, function(markerElem) {
                      var idmapa = markerElem.getAttribute('idmapa');
                      var dt_ies = markerElem.getAttribute('dt_ies');
                      var dt_responsable = markerElem.getAttribute('dt_responsable');
                      var dt_programas = markerElem.getAttribute('dt_programas');
                      var dt_unidades = markerElem.getAttribute('dt_unidades');
                      var dt_estudiantes = markerElem.getAttribute('dt_estudiantes');
                      var dt_egresados = markerElem.getAttribute('dt_egresados');
                     
                      var point = new google.maps.LatLng(
                          parseFloat(markerElem.getAttribute('lat')),
                          parseFloat(markerElem.getAttribute('lng')));
                      const contentString =
                          '<div id="content">' +
                          '<div id="siteNotice">' +
                          "</div>" +                          
                          '<h5 id="firstHeading" class="firstHeading">'+ dt_ies +  '</h5>' +
                          '<h5 id="firstHeading" class="firstHeading">DATOS EDUCACIÓN DUAL:</h5>' +
                          '<h5 id="firstHeading" class="firstHeading">Programas Educativos: '+ dt_programas +'</h5>' +
                          '<h5 id="firstHeading" class="firstHeading">Unidades Económicas: '+ dt_unidades +'</h5>' +
                          '<h5 id="firstHeading" class="firstHeading">Estudiantes: '+ dt_unidades +'</h5>' +
                          '<h5 id="firstHeading" class="firstHeading">Egresados: '+ dt_egresados +'</h5>' +
                          '<br>'+  
                          '<h5 id="firstHeading" class="firstHeading">DATOS DEL RESPONSABLE en EDUCACIÓN DUAL EN LA IES:</h5>' +
                          "<p><b>" + dt_responsable + "</p>" +
                          '<br>'+                          
                          "</div>";
      
      
                      //const image = "img/soldadoss.png";
                      //  var icon = customLabel[codigo] || {};
      
               
      
                      var marker = new google.maps.Marker({
                          map: map,
                          position: point,
                          //icon: image
                      });
                      marker.addListener('click', function() {
                          infoWindow.setContent(contentString);
                          infoWindow.open(map, marker);
                      });
                  });
              });
      
              // Una matriz con las coordenadas de los límites de Bucaramanga, extraídas manualmente de la base de datos GADM
      
             
      }
      
          function downloadUrl(url, callback) {
              var request = window.ActiveXObject ?
                  new ActiveXObject('Microsoft.XMLHTTP') :
                  new XMLHttpRequest;
              request.onreadystatechange = function() {
                  if (request.readyState == 4) {
                      request.onreadystatechange = doNothing;
                      callback(request, request.status);
                  }
              };
              request.open('GET', url, true);
              request.send(null);
          }
      
          function doNothing() {}
          </script>
          <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAet6BC3A-TE6toXKEFBxLcFYscszuNKFw&callback=initMap"
              defer>
          </script>    








    </body>	
</html>