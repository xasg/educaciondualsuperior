<?php
include("db.php");
$sql = "SELECT *  FROM mapa";
$query = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($query);
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
         <script src="http://maps.google.com/maps/api/js" type="text/javascript"></script>          
    </head>

    <body>
        <!--
        <div class="whatsapp-button" onclick="toggleWhatsAppPopup()">
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
          </div>-->

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
                                    <li class="active"><a href="mapa.php" title="">OFERTA</a></li>
                                </ul>
                            </div>
                            <div class="header-right-btns">
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
                    <li class="active"><a href="mapa.php" title="">OFERTA</a></li>
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
                      


<div class="container-fluid" style="padding-top: 6%; ">
<div class="row">
    <div class="col-md-12 text-center"><br>
        <h3>IES bajo la modalidad de educación dual por entidad federativa en
educación superior</h3><br>
    </div>


<div class="col-md-2" ><br>
<div id="listaEntidades" style="height:45%; width:100%; overflow-y:scroll;">                    
                    <ul start="0" style="font-size: small; list-style-image: url('img/center.png');">
                        <h5>Entidad</h5>
                                <li><a href="javascript:centrarMapa('0');" title="latitud = 22.143, longitud = -102.358">Estados Unidos Mexicanos</a></li>
                                <li><a href="javascript:centrarMapa('1');" title="latitud = 22.143, longitud = -102.358" >Aguascalientes</a></li>
                                <li><a href="javascript:centrarMapa('2');" title="latitud = 30.401, longitud = -115.268">Baja California</a></li>
                                <li><a href="javascript:centrarMapa('3');" title="latitud = 25.751, longitud = -111.687">Baja California Sur</a></li>
                                <li><a href="javascript:centrarMapa('4');" title="latitud = 18.651, longitud = -90.236">Campeche</a></li>
                                <li><a href="javascript:centrarMapa('5');" title="latitud = 27.479, longitud = -101.82">Coahuila de Zaragoza</a></li>
                                <li><a href="javascript:centrarMapa('6');" title="latitud = 19.146, longitud = -103.828">Colima</a></li>
                                <li><a href="javascript:centrarMapa('7');" title="latitud = 16.705, longitud = -92.637">Chiapas</a></li>
                                <li><a href="javascript:centrarMapa('8');" title="latitud = 28.633, longitud = -106.05">Chihuahua</a></li>
                                <li><a href="javascript:centrarMapa('9');" title="latitud = 19.305, longitud = -99.146">Distrito Federal</a></li>
                                <li><a href="javascript:centrarMapa('10');" title="latitud = 24.677, longitud = -104.81" >Durango</a></li>
                                <li><a href="javascript:centrarMapa('11');" title="latitud = 21.202, longitud = -101.008">Guanajuato</a></li>
                                <li><a href="javascript:centrarMapa('12');" title="latitud = 17.545, longitud = -99.470" >Guerrero</a></li>
                                <li><a href="javascript:centrarMapa('13');" title="latitud = 20.399, longitud = -98.924" >Hidalgo</a></li>
                                <li><a href="javascript:centrarMapa('14');" title="latitud = 20.66,  longitud = -103.31">Jalisco</a></li>
                                <li><a href="javascript:centrarMapa('15');" title="latitud = 19.330, longitud = -99.666">M&eacute;xico</a></li>
                                <li><a href="javascript:centrarMapa('16');" title="latitud = 19.36,  longitud = -101.71">Michoac&aacute;n de Ocampo</a></li>
                                <li><a href="javascript:centrarMapa('17');" title="latitud = 18.756, longitud = -99.067">Morelos</a></li>
                                <li><a href="javascript:centrarMapa('18');" title="latitud = 21.613, longitud = -104.690">Nayarit</a></li>
                                <li><a href="javascript:centrarMapa('19');" title="latitud = 25.327, longitud = -99.700">Nuevo Le&oacute;n</a></li>
                                <li><a href="javascript:centrarMapa('20');" title="latitud = 16.81,  longitud = -96.20">Oaxaca</a></li>
                                <li><a href="javascript:centrarMapa('21');" title="latitud = 18.95,  longitud = -97.60">Puebla</a></li>
                                <li><a href="javascript:centrarMapa('22');" title="latitud = 20.885, longitud = -99.787">Quer&eacute;taro </a></li>
                                <li><a href="javascript:centrarMapa('23');" title="latitud = 19.572, longitud = -88.023">Quintana Roo</a></li>
                                <li><a href="javascript:centrarMapa('24');" title="latitud = 22.65,  longitud = -100.57">San Luis Potos&iacute;</a></li>
                                <li><a href="javascript:centrarMapa('25');" title="latitud = 24.700, longitud = -107.31">Sinaloa</a></li>
                                <li><a href="javascript:centrarMapa('26');" title="latitud = 29.347, longitud = -110.29">Sonora</a></li>
                                <li><a href="javascript:centrarMapa('27');" title="latitud = 18.080, longitud = -92.709">Tabasco</a></li>
                                <li><a href="javascript:centrarMapa('28');" title="latitud = 24.810, longitud = -98.18">Tamaulipas</a></li>
                                <li><a href="javascript:centrarMapa('29');" title="latitud = 19.400, longitud = -98.147">Tlaxcala</a></li>
                                <li><a href="javascript:centrarMapa('30');" title="latitud = 19.17, longitud = -96.08">Veracruz de Ignacio de la Llave</a></li>
                                <li><a href="javascript:centrarMapa('31');" title="latitud = 20.727, longitud = -88.935">Yucat&aacute;n</a></li>
                                <li><a href="javascript:centrarMapa('32');" title="latitud = 23.23, longitud = -102.79">Zacatecas</a></li> 
                    </ul>

</div>
</div>

<div class="col-md-10">
          <div id="map-container-google-2" class="z-depth-1-half map-container" style="height: 50%; width:100%;">
         </div>
<div class="col-md-12" style="padding-top: 6%;">
     <table id="tableID" class="table table-striped table-bordered"> 
        <thead class="thead-dark">
            <tr>
                <th>IES</th>
                <th>Estudiantes</th>
                <th>Programas Educativos</th>
                <th>Unidades económicas</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($row = mysqli_fetch_array($query)) {
            ?>
                <tr>
                    <th><?php echo $row['dt_nombre_ies'] ?></th>
                    <th class="text-center"><?php echo $row['estudiantes'] ?></th>
                    <th class="text-center"><?php echo $row['programas_educativos'] ?></th>
                    <th class="text-center"><?php echo $row['unidad_economica'] ?></th>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>
<div class="col-md-12" style="padding-top: 40%;">
</div>

</div> 
</div>
</div>



<!--
<footer class="justify-content-center" style=" background-color: #98213A;" id="contacto">
                
                <div class="footer-widget-area justify-content-center">
                    <br>
                    <div class="container align-items-center">
                        <div class="container row container-fluid   ">
                            <div class="col-md ">
                                <img src="img/logo/LogoESR.webp" class="equalheight" title="Ve nuestro apartado esr" alt="Empresa socialmente responsable"/></a> 
                            </div>
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
                            
                        </div>
                    </div>  
                    <small class="text-light text-center">Todos los derechos reservados © FESE 2023  </small>
                    <br><br>
                    </div>
                    
                </div>   
            </footer>
        -->


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
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>

        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css"> 
        <!-- DataTables JS -->
        <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"> </script> 
        <script> 

                     $(document).ready(function() {
        $('#tableID').dataTable( {
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
            },
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        } );
    } );
      </script>



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
    latitud = 24.740368799806674;
    longitud = -98.84946664758593;
    myLatlng = new google.maps.LatLng(latitud, longitud);

    var myOptions = {
        center: myLatlng,
        zoom: 5,
        center: myLatlng,
        zoomControl: false,
      scaleControl: true,
        mapTypeId: google.maps.MapTypeId.ROADMAP
        
    }
    map = new google.maps.Map(document.getElementById("map-container-google-2"), myOptions);  
      
              var infoWindow = new google.maps.InfoWindow;
              downloadUrl('xml.php', function(data) {
                  var xml = data.responseXML;
                  var markers = xml.documentElement.getElementsByTagName('marker');
                  Array.prototype.forEach.call(markers, function(markerElem) {
                      var idmapa = markerElem.getAttribute('idmapa');
                      var id_usuario = markerElem.getAttribute('id_usuario');
                      var dt_ies = markerElem.getAttribute('dt_ies');
                      var dt_responsable = markerElem.getAttribute('dt_responsable');
                      var dt_email = markerElem.getAttribute('dt_email');
                      var dt_programas = markerElem.getAttribute('dt_programas');
                      var dt_unidades = markerElem.getAttribute('dt_unidades');
                      var dt_estudiantes = markerElem.getAttribute('dt_estudiantes');
                      var dt_egresados = markerElem.getAttribute('dt_egresados');
                     
                      var point = new google.maps.LatLng(
                          parseFloat(markerElem.getAttribute('latitud')),
                          parseFloat(markerElem.getAttribute('longitud')));
                      const contentString =
                          '<div id="content">' +
                          '<div id="siteNotice">' +
                          "</div>" +                          
                          '<h5>'+ dt_ies +  '</h5>' +
                          '<h6>DATOS EDUCACIÓN DUAL:</h6>' +
                          '<p style="line-height:30%;">Programas Educativos: <a href="oferta.html">'+ dt_programas +'</a></p>' +
                          '<p style="line-height:30%;">Unidades Económicas: '+ dt_unidades +'</h5>' +
                          '<p style="line-height:30%;">Estudiantes: '+ dt_unidades +'</h5>' +
                          '<p style="line-height:30%;">Egresados: '+ dt_egresados +'</h5>' +
                          '<br>'+
                          '<br>'+
                          '<br>'+
                          '<a href="view/detalle_dual.php?usuario='+ id_usuario +'" target="_blank" class="btn btn-block btn-primary" aria-disabled="true">Detalle</a>'+
                          '<br>'+ 
                          '<h6>DATOS DEL RESPONSABLE EN EDUCACIÓN DUAL EN LA IES:</h6>' +
                          '<br>'+
                          '<p style="line-height:30%;">' + dt_responsable + '</p' +
                           '<br>'+
                          '<p style="line-height:30%;">' + dt_email + '</p>' +
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





function centrarMapa(estado) {
            var latitud;
            var longitud;
            var zoomMapa;

            switch (estado) {
                case '0'://Estados Unidos Mexicanos
                    latitud = 22.143;
                    longitud = -102.358;
                    zoomMapa = 5;
                    break;
                case '1'://Aguascalientes
                    latitud = 22.143;
                    longitud = -102.358;
                    zoomMapa = 9;
                    break;
                case '2'://Baja California
                    latitud = 30.401;
                    longitud = -115.268;
                    zoomMapa = 7;
                    break;
                case '3'://Baja California Sur
                    latitud = 25.751;
                    longitud = -111.687;
                    zoomMapa = 9;
                    break;
                case '4'://Campeche
                    latitud = 18.651;
                    longitud = -90.236;
                    zoomMapa = 7;
                    break;
                case '5'://Coahuila de Zaragoza
                    latitud = 27.479;
                    longitud = -101.82;
                    zoomMapa = 8;
                    break;
                case '6'://Colima
                    latitud = 19.146
                    longitud = -103.828;
                    zoomMapa = 10;
                    break;
                case '7'://Chiapas
                    latitud = 16.705;
                    longitud = -92.637;
                    zoomMapa = 9;
                    break;
                case '8': //chihuahua
                    latitud = 28.633;
                    longitud = -106.05;
                    zoomMapa = 8;
                    break;
                case '9': //Distrito Federal
                    latitud = 19.305;
                    longitud = -99.146;
                    zoomMapa = 10;
                    break;
                case '10': //Durango
                    latitud = 24.677;
                    longitud = -104.81;
                    zoomMapa = 8;
                    break;
                case '11': //Guanajuato
                    latitud = 21.202;
                    longitud = -101.008;
                    zoomMapa = 8;
                    break;
                case '12': // Guerrero
                    latitud = 17.545;
                    longitud = -99.470;
                    zoomMapa = 8;
                    break;
                case '13'://Hidalgo
                    latitud = 20.399;
                    longitud = -98.924;
                    zoomMapa = 8;
                    break;
                case '14'://Jalisco
                    latitud = 20.66;
                    longitud = -103.31;
                    zoomMapa = 7;
                    break;
                case '15'://México
                    latitud = 19.330;
                    longitud = -99.666;
                    zoomMapa = 8;
                    break;
                case '16'://Michoacán de Ocampo
                    latitud = 19.36;
                    longitud = -101.71;
                    zoomMapa = 7;
                    break;
                case '17'://Morelos
                    latitud = 18.756
                    longitud = -99.067;
                    zoomMapa = 9;
                    break;
                case '18'://Nayarit
                    latitud = 21.613
                    longitud = -104.690;
                    zoomMapa = 8;
                    break;
                case '19'://Nuevo León
                    latitud = 25.327
                    longitud = -99.700;
                    zoomMapa = 7;
                    break;
                case '20'://Oaxaca
                    latitud = 16.81;
                    longitud = -96.20;
                    zoomMapa = 7;
                    break;
                case '21'://Puebla
                    latitud = 18.95;
                    longitud = -97.60;
                    zoomMapa = 7;
                    break;
                case '22'://Querétaro
                    latitud = 20.885;
                    longitud = -99.787;
                    zoomMapa = 8;
                    break;
                case '23'://Quintana Roo
                    latitud = 19.572;
                    longitud = -88.023;
                    zoomMapa = 7;
                    break;
                case '24'://San Luis Potosí
                    latitud = 22.65;
                    longitud = -100.57;
                    zoomMapa = 9;
                    break;
                case '25'://Sinaloa
                    latitud = 24.700;
                    longitud = -107.31;
                    zoomMapa = 9;
                    break;
                case '26'://Sonora
                    latitud = 29.347;
                    longitud = -110.29;
                    zoomMapa = 8;
                    break;
                case '27'://Tabasco
                    latitud = 18.080;
                    longitud = -92.709;
                    zoomMapa = 8;
                    break;
                case '28'://Tamaulipas
                    latitud = 24.810;
                    longitud = -98.18;
                    zoomMapa = 7;
                    break;
                case '29'://Tlaxcala
                    latitud = 19.400;
                    longitud = -98.147;
                    zoomMapa = 10;
                    break;
                case '30'://Veracruz de Ignacio de la Llave
                    latitud = 19.17;
                    longitud = -96.08;
                    zoomMapa = 9;
                    break;
                case '31'://Yucatán
                    latitud = 20.727;
                    longitud = -88.935;
                    zoomMapa = 9;
                    break;
                case '32'://Zacatecas
                    latitud = 22.77;
                    longitud = -102.57;
                    zoomMapa = 9;
                    break;
            }
                var myLatlng;
               
              
            myLatlng = new google.maps.LatLng(latitud, longitud);
             map.panTo(myLatlng);
            map.setZoom(zoomMapa);
            

        }



          </script>
          <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAet6BC3A-TE6toXKEFBxLcFYscszuNKFw&callback=initMap"
              defer>
          </script>    

<script>
  $(function () {
    $('#myTab li:last-child a').tab('show')
  })
</script>

</body>	
</html>