<?php 
require_once('../model/databases_responsable.php');
$entidad=view_entidad();
$subsistema=view_subsistema();
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
<script async src="https://www.googletagmanager.com/gtag/js?id=G-7K2QJNTN5J"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-7K2QJNTN5J');
</script>
</head>
   <body>
  <header class="stick style1 w-100" style=" background-color: #860f01;">
                <div class="container">
                    <div class="logo-menu-wrap w-100 d-flex flex-wrap justify-content-between align-items-start">
                        <div class="logo"><h1 class="mb-0"><a href="index.html" title="Home"><!--<img class="img-fluid" src="assets/images/img/logoforos.png" alt="Logo" srcset="assets/images/img/logoforos.png">-->LOGO</a></h1></div> 
                        <nav class="d-inline-flex align-items-center">
                            <div class="header-left">
                                <ul class="mb-0 list-unstyled d-inline-flex">
                                    <li class="menu-item-has-children"><a href="../" title="">INICIO</a></li>
                                    <li class="menu-item-has-children"><a href="../historia.html" title="">HISTORIA</a></li>  
                                    <li><a href="#" title="">FORMULARIO</a></li>
                                    <li><a href="../oferta.html" title="">OFERTA</a></li>
                                    <li><a href="#" title="">BLOG</a></li>
                                </ul>
                            </div>
                            <div class="header-right-btns">
                                <!--<a class="search-btn" href="javascript:void(0);" title="">
                                    <i class="flaticon-magnifying-glass"></i></a>-->
                               <a class="user-btn" href="javascript:void(0);" title=""><i class="flaticon-user"></i></a>
                               <!-- <a class="menu-btn" href="javascript:void(0);" title=""><i class="flaticon-menu"></i></a>-->
                            </div>
                        </nav>
                    </div><!-- Logo Menu Wrap -->
                </div>
            </header><!-- Header -->
            <div class="menu-wrap">
                <span class="menu-close"><i class="fas fa-times"></i></span>
                <ul class="mb-0 list-unstyled w-100">
                    <li class="menu-item-has-children"><a href="./" title="">INICIO</a></li>
                    <li class="menu-it@em-has-children"><a href="#" title="">HISTORIA</a></li>  
                    <li><a href="#">FORMULARIO</a></li>
                    <li><a href="oferta.html" title="">OFERTA</a></li>
                    <li><a href="#" title="">BLOG</a></li>                         
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
         <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home2" role="tab" aria-controls="home" aria-selected="true">Regístrar</a>
       </li>
       <li class="nav-item">
         <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile2" role="tab" aria-controls="profile" aria-selected="false">Inicia sesión</a>
       </li>
     </ul>
     <br><br>

     <div class="tab-content">
      <!-- Registro beneficiario -->
      <div class="tab-pane active" id="home2" role="tabpanel" aria-labelledby="home-tab"> 
           <form action="../controller/new_usuario.php" method="POST"> 

<div class="row border">
                    <div class="col-md-12"> <br>
                    <h3>Datos del responsable de la IES encargado de reportar los avances de Educación Dual</h3><br>
                    </div>
                    <div class="col-md-2">
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

                     <div class="col-md-8">    
                     <div class="form-group">
                        <label for="exampleInputEmail1">Nombre de la IES</label>
                        <select class="form-control" name="ies" id="ies" required>
                        </select>                        
                      </div>                      
                     </div>

                     <div class="col-md-2">    
                     <div class="form-group">
                        <label for="exampleInputEmail1">Subsistema educativo</label>
                       <select class="form-control" name="subsistema" required>
                          <option value="" selected>Seleccionar</option>
                          <option value="Universidades Públicas Federales">UNIVERSIDADES PÚBLICAS FEDERALES</option>
                                                <option value="Universidades Públicas Estatales con Apoyo Solidario">UNIVERSIDADES PÚBLICAS ESTATALES CON APOYO SOLIDARIO</option>
                                                <option value="Institutos Tecnológicos">INSTITUTOS TECNOLÓGICOS</option>
                                                <option value="Universidades Tecnológicas">UNIVERSIDADES TECNOLÓGICAS</option>
                                                <option value="Universidades Politécnicas">UNIVERSIDADES POLITÉCNICAS</option>
                                                <option value="Universidad Pedagógica Nacional">UNIVERSIDAD PEDAGÓGICA NACIONAL</option>
                                                <option value="Universidad Abierta y a Distancia de México">UNIVERSIDAD ABIERTA Y A DISTANCIA DE MÉXICO</option>
                                                <option value="Universidades Interculturales">UNIVERSIDADES INTERCULTURALES</option>
                                                <option value="Centros Públicos de Investigación">CENTROS PÚBLICOS DE INVESTIGACIÓN</option>
                                                <option value="Escuelas Normales Públicas">ESCUELAS NORMALES PÚBLICAS</option>
                       </select>
                      </div>                      
                     </div>


                    <div class="col-md-8">    
                     <div class="form-group">
                        <label for="exampleInputEmail1">Nombre completo del responsable</label>
                        <input type="text" name="nombre_responsable" pattern="[A-Za-z0-9\u00C0-\u017F ]+" class="form-control" onChange="conMayusculas(this)" required>
                      </div>                      
                     </div>

                    <div class="col-md-4">    
                     <div class="form-group">
                        <label for="exampleInputEmail1">Cargo</label>
                        <input type="text" name="cargo" class="form-control"  onChange="conMayusculas(this)" pattern="[A-Za-z0-9\u00C0-\u017F ]+" required>
                      </div>                      
                     </div>

                    <div class="col-md-6">    
                     <div class="form-group">
                        <label for="exampleInputEmail1">Teléfono</label>
                        <input type="text" name="telefono" maxlength="10" placeholder="Número de teléfono a 10 caracteres" class="form-control" required>
                      </div>                      
                     </div>

                    <div class="col-md-6">    
                     <div class="form-group">
                        <label for="exampleInputEmail1">Teléfono celular</label>
                        <input type="text" name="celular" maxlength="10"  placeholder="Número de teléfono celular a 10 caracteres" class="form-control" >
                      </div>                      
                     </div>

                     <div class="col-md-6">    
                     <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" onChange="conMayusculas(this)" required>
                      </div>                      
                     </div>

                     <div class="col-md-6">    
                     <div class="form-group">
                        <label>Contraseña</label>
                        <input type="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" class="form-control" placeholder="la contraseña debe contener 8 o más caracteres, por lo menos un número, y una mayúscula y minúscula"required><p>La contraseña debe contener 8 o más caracteres y por lo menos un número, una mayúscula y minúscula</p>
                      </div>                      
                     </div>

                     <div class="col-md-3"><br>
                     <button type="submit" class="btn btn-block btn-primary btn-lg">Registrar</button><br><br>
                     </div>    

</div> 




</form> <br><br>
</div>
<!-- /Registro beneficiario -->


<!--login beneficiario  -->
<div class="tab-pane" id="profile2" role="tabpanel" aria-labelledby="profile-tab">
 <p>
   </p><form action="../controller/login.php" method="POST">
                <div class="row">
                <div class="col-md-3">
                </div>
                <div class="col-md-6 border"><br> 
                    <div class="col-md-12">    
                     <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="text" class="form-control" name="correo"  placeholder="Ingresa tu email" onChange="conMayusculas(this)" required>
                      </div>                      
                     </div>

                     <div class="col-md-12">    
                     <div class="form-group">
                        <label for="exampleInputEmail1">Contraseña</label>
                        <input type="text" class="form-control" name="password"  placeholder="Ingresa tu contraseña" required>
                      </div>                      
                     </div>

                     <div class="col-md-12">  <br>
                      <button type="submit" class="btn btn-block btn-primary btn-lg">Ingresar</button><br><br>
                     </div>
                 </div>

                     </div>
                </div>  
 </form>
</div>

<br><br>

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