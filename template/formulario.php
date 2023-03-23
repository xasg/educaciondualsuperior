<?php 
require_once('../model/databases_responsable.php');
$entidad=view_entidad();
$ies=view_ies();
?>


 <!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="UTF-8">
      <link rel="icon" href="../assets/images/favicon.png" sizes="35x35" type="image/png">
      <title>Registro</title>
      <link rel="stylesheet" href="../assets/css/flaticon.css">
      <link rel="stylesheet" href="../assets/css/bootstrap.css">
      <link rel="stylesheet" href="../assets/css/responsive.css">
      <link rel="stylesheet" href="../assets/css/color.css">
      <link rel="stylesheet" href="../assets/css/style.css">
      <script language="JavaScript"> 
        function conMayusculas(field) 
        { 
            field.value = field.value.toUpperCase() 
        }   
        </script>
</script>
   </head>
   <body>
      <main>
         <header class="stick style1 w-100">
                <div class="container">
                    <div class="logo-menu-wrap w-100 d-flex flex-wrap justify-content-between align-items-start">
                        <div class="logo"><h1 class="mb-0" style="color:#fff;"><a href="../"><!--<img class="img-fluid" src="assets/images/img/logoforos.png" alt="Logo" srcset="assets/images/img/logoforos.png">-->LOGO</a></h1></div> 
                        <nav class="d-inline-flex align-items-center">
                            <div class="header-left">
                                <ul class="mb-0 list-unstyled d-inline-flex">
                                    <li class="menu-item-has-children"><a href="../" title="">INICIO</a></li>
                                    <li class="menu-item-has-children"><a href="historia.html" title="">HISTORIA</a></li>  
                                    <li><a href="formulario.html" title="formulario.html">FORMULARIO</a></li>
                                    <li><a href="oferta.html" title="">OFERTA</a></li>
                                    <li><a href="#" title="">BLOG</a></li>
                                </ul>
                            </div>                           
                        </nav>
                    </div><!-- Logo Menu Wrap -->
                </div>
            </header><!-- Header -->
            <div class="menu-wrap">
                <span class="menu-close"><i class="fas fa-times"></i></span>
                <ul class="mb-0 list-unstyled w-100">
                    <li class="menu-item-has-children"><a href="./" title="">INICIO</a></li>
                    <li class="menu-it@em-has-children"><a href="historia.html" title="">HISTORIA</a></li>  
                    <li><a href="formulario.html">FORMULARIO</a></li>
                    <li><a href="oferta.html" title="">OFERTA</a></li>
                    <li><a href="#" title="">BLOG</a></li>                         
                </ul>
            </div><!-- Menu Wrap -->
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
                        <label for="exampleInputEmail1">Entidad</label>
                         <select class="form-control" name="entidad" id="entidad">
                            <option value="0">Seleccione:</option>
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
                        <select class="form-control" name="nombre_ies" id="ies">
                        </select>
                        
                      </div>                      
                     </div>

                     <div class="col-md-2">    
                     <div class="form-group">
                        <label for="exampleInputEmail1">Subsistema educativo</label>
                       <select class="form-control" name="subsistema">
                          <option value="" selected>Seleccionar</option>
                          <option value="Universidades Públicas Federales">Universidades Públicas Federales</option>
                                                <option value="Universidades Públicas Estatales con Apoyo Solidario">Universidades Públicas Estatales con Apoyo Solidario</option>
                                                <option value="Institutos Tecnológicos">Institutos Tecnológicos</option>
                                                <option value="Universidades Tecnológicas">Universidades Tecnológicas</option>
                                                <option value="Universidades Politécnicas">Universidades Politécnicas</option>
                                                <option value="Universidad Pedagógica Nacional">Universidad Pedagógica Nacional</option>
                                                <option value="Universidad Abierta y a Distancia de México">Universidad Abierta y a Distancia de México</option>
                                                <option value="Universidades Interculturales">Universidades Interculturales</option>
                                                <option value="Centros Públicos de Investigación">Centros Públicos de Investigación</option>
                                                <option value="Escuelas Normales Públicas">Escuelas Normales Públicas</option>
                       </select>
                      </div>                      
                     </div>

                    <div class="col-md-8">    
                     <div class="form-group">
                        <label for="exampleInputEmail1">Nombre completo del responsable</label>
                        <input type="text" name="nombre_responsable" class="form-control" onChange="conMayusculas(this)" required>
                      </div>                      
                     </div>

                    <div class="col-md-4">    
                     <div class="form-group">
                        <label for="exampleInputEmail1">Cargo</label>
                        <input type="text" name="cargo" class="form-control"  onChange="conMayusculas(this)" required>
                      </div>                      
                     </div>

                    <div class="col-md-6">    
                     <div class="form-group">
                        <label for="exampleInputEmail1">Teléfono</label>
                        <input type="text" name="telefono" class="form-control">
                      </div>                      
                     </div>

                    <div class="col-md-6">    
                     <div class="form-group">
                        <label for="exampleInputEmail1">Teléfono celular</label>
                        <input type="text" name="celular" class="form-control" >
                      </div>                      
                     </div>

                     <div class="col-md-6">    
                     <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="text" name="email" class="form-control" onChange="conMayusculas(this)" required>
                      </div>                      
                     </div>

                     <div class="col-md-6">    
                     <div class="form-group">
                        <label for="exampleInputEmail1">Contraseña</label>
                        <input type="text" name="password" class="form-control" required>
                      </div>                      
                     </div>

                     <div class="col-md-3">  <br>
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


            <footer style="background-color: #860f01;" id="contacto">
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
                                <p class="mb-0" style="color: #fff">forosdevinculacion@fese.mx</p>
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
      <script src="../assets/js/bootstrap.min.js"></script>
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