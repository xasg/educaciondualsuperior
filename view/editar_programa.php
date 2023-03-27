<?php 
session_start();
require_once('../model/databases_programa.php');
mysqli_set_charset( $mysqli, 'utf8');
$id=$_SESSION["id_ies"];
$programa=base64_decode($_GET['var']);
$program = acces_programa($programa);
?> 
<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="UTF-8">
      <link rel="icon" href="assets/images/favicon.png" sizes="35x35" type="image/png">
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
   </head>
   <body>
      <main>
         <header class="stick style1 w-100">
                <div class="container">
                    <div class="logo-menu-wrap w-100 d-flex flex-wrap justify-content-between align-items-start">
                        <div class="logo"><h1 class="mb-0"><a href="index.html" title="Home"><!--<img class="img-fluid" src="assets/images/img/logoforos.png" alt="Logo" srcset="assets/images/img/logoforos.png">-->LOGO</a></h1></div> 
                        <nav class="d-inline-flex align-items-center">
                            <div class="header-left">
                                <ul class="mb-0 list-unstyled d-inline-flex">                                    
                                    <li><a href="formulario.html" title="">SALIR</a></li>
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
                    <li><a href="#" title="">SALIR</a></li>                         
                </ul>
            </div><!-- Menu Wrap -->
         <section>
            <div class="w-100 text-center black-layer position-relative">                   
            </div><br><br><br>
         </section>



<div class="container"><br><br>
 <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
         <a class="nav-link active"  href="registro.php">Resumen</a>
       </li>
     </ul>
     <br><br>

     <div class="tab-content">     
    <form action="../controller/update.php" method="POST">  <p><?php echo $programa ?></p>
                                    <div class="row border">
                                    <div class="col-xl-4"><br>
                                     <label><strong>Grado/Denominación</strong></label>
                                           <select class="form-control" name="denominacion" required="">
                                                <option value="<?php echo $program['dt_denominacion'];?>"><?php echo $program['dt_denominacion'];?></option>
                                                <option value="TSU">TSU</option>
                                                <option value="INGENIERÍA">INGENIERÍA</option>
                                                <option value="LICENCIATURA">LICENCIATURA</option>
                                                <option value="ESPECIALIDAD">ESPECIALIDAD</option>
                                                <option value="MAESTRÍA">MAESTRÍA</option>
                                                <option value="DOCTORADO">DOCTORADO</option>
                                                <option value="PROFESIONAL ASOCIADO">PROFESIONAL ASOCIADO</option>
                                             </select>
                                    </div>
                                    <div class="col-xl-6"><br>
                                       <div class="form-group"> 
                                          <label>Nombre del programa educativo</label>
                                          <input type="text" class="form-control" name="programa_educativo" onChange="conMayusculas(this)" value="<?php echo strtoupper($program['dt_programa']); ?>" required="">
                                       </div>
                                    </div>
                                    <div class="col-xl-2"><br>
                                       <div class="form-group"> 
                                          <label>Año de inicio</label>
                                          <input type="text" class="form-control" name="inicio" onChange="conMayusculas(this)" value="<?php echo $program['dt_inicio'];?>" required>
                                       </div>
                                    </div>
                                    <div class="col-xl-12">
                                       <div class="form-group"> 
                                          <label>Nombre del la unidad económica</label>
                                          <input type="text" class="form-control" name="unidad" onChange="conMayusculas(this)" value="<?php echo strtoupper($program['dt_unidad']); ?>" >

                                          <?php if($program['dt_unidad_1']!=NULL){?>
                                          <input type="text" class="form-control" name="unidad_1" onChange="conMayusculas(this)" value="<?php echo strtoupper($program['dt_unidad_1']); ?>">
                                          <?php } ?>

                                          <?php if($program['dt_unidad_2']!=NULL){?>
                                          <input type="text" class="form-control" name="unidad_2" onChange="conMayusculas(this)" value="<?php echo strtoupper($program['dt_unidad_2']); ?>">
                                          <?php } ?>

                                          <?php if($program['dt_unidad_3']!=NULL){?>
                                          <input type="text" class="form-control" name="unidad_3" onChange="conMayusculas(this)" value="<?php echo strtoupper($program['dt_unidad_3']); ?>">

                                          <?php } ?>
                                          <?php if($program['dt_unidad_4']!=NULL){?>
                                          <input type="text" class="form-control" name="unidad_4" onChange="conMayusculas(this)" value="<?php echo strtoupper($program['dt_unidad_4']); ?>">
                                          <?php } ?>
                                       </div>
                                    </div>

                                

                                    <div class="col-xl-12">
                                       <div class="form-group">
                                           <label for="nombre">¿A partir de qué periodo académico el estudiante puede ingresar a esta Modalidad Dual?</label>
                                         <input type="text" class="form-control input-sm" name="periodo" placeholder="Ejemplo: (2 semestre, 4 cuatrimestre, 4 trimestre, etc)" value="<?php echo strtoupper($program['dt_periodo']); ?>" required>
                                       </div>
                                    </div>
                                     <div class="col-xl-12">
                                       <div class="form-group">
                                          <label for="nombre">¿Cuántos estudiantes cursan actualmente este programa educativo?</label>
                                       </div>
                                    </div>
                                    <div class="col-xl-3">
                                       <div class="form-group">        
                                        <input type="text" class="form-control input-sm" name="sex_fem" placeholder="# estudiantes Femeninos" value="<?php echo $program['dt_num_m'];?>" required>
                                       </div>
                                    </div>
                                    <div class="col-xl-3">
                                       <div class="form-group"> 
                                         <input type="text" class="form-control input-sm" name="sex_mas" placeholder="# estudiantes Masculinos" value="<?php echo $program['dt_num_f'];?>" required>
                                       </div>
                                    </div>
                                    <div class="col-xl-12">
                                       <div class="form-group">
                                          <label for="nombre">¿Cuenta con egresados?</label>
                                       </div>
                                    </div>

                                    <div class="col-xl-12"> 
                                        <div id="divid1"> 
                                        <div class="col-xl-3" id="divid1">
                                           <div class="form-group">
                                            <label for="nombre">Mujeres egresadas</label>        
                                            <input type="text" class="form-control input-sm" name="egresados_f" placeholder="# estudiantes Femeninos" value="<?php echo $program['dt_egresados_f'];?>" required>
                                           </div>
                                        </div>
                                        <div class="col-xl-3">
                                           <div class="form-group"> 
                                             <label for="nombre">Hombres egresados</label> 
                                             <input type="text" class="form-control input-sm" name="egresados_m" placeholder="# estudiantes Masculinos" value="<?php echo $program['dt_egresados_m'];?>" required>
                                           </div>
                                        </div>
                                        </div>
                                   </div>
                        <div class="col-xl-12"></div>
                        <div class="col-xl-2">
                        <input type="hidden" name="id_ies" value="<?php echo $programa; ?>" />
                        <button type="submit" class="btn btn-block btn-primary btn-lg">Editar</button><br><br>                      
                        </div>
                        </form>
<div class="col-xl-2">
<a href="../controller/eliminar.php?var=<?php echo $programa?>" onclick="return confirm('Estás seguro que deseas eliminar el registro?');"><button type="button" class="btn btn-block btn-primary btn-lg">Eliminar</button></a>
</div>

                        <script type="text/javascript">
       (function() {
         var form = document.getElementById('miFormulario');
         form.addEventListener('submit', function(event) {
           // si es false entonces que no haga el submit
           if (!confirm('Realmente desea eliminar?')) {
             event.preventDefault();
           }
         }, false);
       })();
     </script>
                             
                        </div><br><br><br><br>

     </div>

     


            <footer style="background-color: #860f01;" id="contacto">
                <div class="w-100 pt-121  opc1 position-relative">
                    <div class="container position-relative">
                        <div class="footer-wrap w-100 text-center">
                            <div class="footer-inner d-inline-block">
                                <div class="logo d-inline-block">
                                    <h1 class="mb-0">
                                        <a href="index.html" title=""><br>
                                            <img class="img-fluid" src="assets/images/img/logoforos.png" alt="Logo">
                                        </a>
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
      <script src="assets/js/confirmar.js"></script>

   </body>
</html>