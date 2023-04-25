<?php
session_start();
if($_SESSION['id_ies']== null){
    header("Location:formulario.php");

}
require_once('../model/databases.php');
mysqli_set_charset( $mysqli, 'utf8');
$id_ies=$_SESSION["id_ies"];
$name_user=$_SESSION["name_user"];
$programa = acces_programas($id_ies);

if ($result = $mysqli->query("SELECT * FROM programa_educativo 
          WHERE id_ies = '{$id_ies}'")) {
    /* determinar el número de filas del resultado */
    $row_cnt = $result->num_rows;
}

if ($result2 = $mysqli->query("SELECT * FROM cat_programa_educativo 
          WHERE grado_denominacion = 'LIC' ORDER BY programa_educativo ASC")) {
    /* determinar el número de filas del resultado */
    $row_cnt2 = $result2->num_rows2;
}

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
                        <div class="logo"><h1 class="mb-0"><a href="index.html" title="Home"><!--<img class="img-fluid" src="assets/images/img/logoforos.png" alt="Logo" srcset="assets/images/img/logoforos.png">-->LOGO</a></h1></div> 
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
         <a class="nav-link active" id="home-tab" data-toggle="tab" href="#" role="tab" aria-controls="home" aria-selected="true">Resumen</a>
       </li>
        <li class="nav-item">
         <a class="nav-link"  href="info_ies.php" role="tab" aria-controls="profile" aria-selected="false">Datos Institucionales</a>
       </li>
     </ul>
     <br><br>
</div>


<div class="container">
<div class="tab-content">
<div class="tab-pane active" id="pane1" role="tabpanel" aria-labelledby="home-tab">
<div class="row">
                            <span class="border"><br><br>
                                    <div class="col-xl-12">
                                       <p>A continuación se muestran los programas educativos registrados en su institución educativa, en la modalidad Educación Dual al cierre del ciclo escolar 2021-2022</p>
                                       <p>Agradecemos el apoyo en el llenado, ya que el mismo servirá para mostrar la oferta educativa a nivel nacional, incluyendo a su IES con los programas aquí registrados.</p>
                                       <p><strong>Se cuenta con <strong><?php echo  $row_cnt;?></strong> programas educativos registrados.</strong></p><?php //echo $id_ies; ?>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="programa.php" class="btn btn-block btn-primary" aria-disabled="true">Agregar o Editar</a>
                                    </div>
                                    <div class="col-md-12"><br>
                                    <?php if($row_cnt>0){ ?>
                                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                                        <thead class="thead-dark">
                                          <tr>  
                                                <th>#</th>
                                                <th>Programa educativo</th>
                                                <th>Inicio</th> 
                                                <th>Periodo</th>
                                                <th class="text-center">Número de estudiantes</th>
                                                <th class="text-center">Número de egresados</th>
                                                 <th class="text-center">Unidades económicas</th>
                                          </tr>
                                        </thead>
                                            <tbody>
                                              <?php
                                              $counter = 1;
                                              while($prog = $programa->fetch_assoc())
                                              {
                                              ?>
                                              <tr>
                                                <td class="text-center"><?php echo $counter++ ?></td>
                                                 <?php if($prog['dt_programa']!='OTRO') { ?>
                                                <td><?php echo strtoupper($prog['dt_programa']); ?></td>
                                                <?php } else { ?>
                                                <td><?php echo strtoupper($prog['dt_otro_programa']); ?></td>
                                                <?php } ?>
                                                <td><?php echo strtoupper($prog['dt_inicio']); ?></td>
                                                <td class="text-center"><?php echo strtoupper($prog['dt_unidad']); ?></td>
                                                <td class="text-center"><?php echo strtoupper($prog['estudiantes']); ?></td>
                                                <td class="text-center"><?php echo strtoupper($prog['egresados']); ?></td>
                                                <td class="text-center"> <?php echo strtoupper($prog['num']); ?>
                                                </td>                                               
                                              </tr> 
                                              <?php
                                                }
                                              ?>               
                                            </tbody>

                                      </table>
                                    <br>
                                  <?php } ?>


                                     </div>                                     
                            </span><br><br>
</div>
</div>


<div class="tab-pane" id="pane2" role="tabpanel" aria-labelledby="profile-tab">
<form action="../controller/new_programa.php" method="POST"> 
 <p><strong>Registro de programas educativos registrados en su institución educativa, en la modalidad Educación Dual al cierre del ciclo escolar 2021-2022</strong></p> 
<div class="row border">
                                    <div class="col-xl-12">
                                    <br>
                                    </div>

                                    <div class="col-xl-2"><br>                                    
                                     <label>Grado/Denominación</label>
                                           <select class="form-control" name="denominacion" required="">
                                                <option value="">selecciona</option>
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
                                          <input type="text" class="form-control" name="programa_educativo" onChange="conMayusculas(this)" required="">
                                       </div>
                                    </div>
                                    <div class="col-xl-4"><br>
                                       <div class="form-group"> 
                                          <label>Año de inicio bajo la modalidad Educación Dual</label>
                                          <input type="text" class="form-control" name="inicio" onChange="conMayusculas(this)" required="">
                                       </div>
                                    </div>
                                    <div class="col-xl-6">
                                       <div class="form-group"> 
                                          <label>Nombre de la unidad económica</label>
                                          <input type="text" class="form-control" name="unidad" onChange="conMayusculas(this)" required="">   
                                       </div>
                                    </div> 
                                    <div class="col-xl-3">
                                       <div class="form-group"> 
                                          <label>Cuenta con convenio</label>
                                          <select class="form-control" name="convn"><option value="1">SI</option><option value="0">NO</option></select>  
                                       </div>
                                    </div>                                   

                                    <div class="col-xl-3"><br>
                                        <input type="button" class="btn btn-block btn-primary btn-lg" id="add_cancion()" onClick="addUnidad()" value="+ Otra unidad económica" />
                                    </div>



                                        <div class="col-md-12" id="unidad">
                                        </div>

  


                                    <div class="col-xl-12">
                                       <div class="form-group">
                                           <label for="nombre">¿A partir de qué periodo académico el estudiante puede ingresar a esta Modalidad Dual?</label>
                                         <input type="text" class="form-control input-sm" name="periodo" placeholder="Ejemplo: (2 semestre, 4 cuatrimestre, 4 trimestre, etc)" required>
                                       </div>
                                    </div>

                                     <div class="col-xl-12">
                                       <div class="form-group">
                                          <label for="nombre">¿Cuántos estudiantes cursaron el programa educativo bajo la Modalidad Dual al cierre del ciclo escolar 2021-2022?</label>
                                       </div>
                                    </div>
                                    <div class="col-xl-3">
                                       <div class="form-group"> 
                                        <label for="nombre"># De estudiantes femeninos</label>      
                                        <input type="text" class="form-control input-sm" name="sex_fem"  required>
                                       </div>
                                    </div>
                                    <div class="col-xl-3">
                                       <div class="form-group"> 
                                        <label for="nombre"># De estudiantes masculinos</label>
                                         <input type="text" class="form-control input-sm" name="sex_mas"  required>
                                       </div>
                                    </div>


                                     <div class="col-xl-12">
                                       <div class="form-group">
                                          <label for="nombre">¿Cuántos estudiantes cursan actualmente este programa educativo bajo la Modalidad Dual?</label>
                                       </div>
                                    </div>
                                    <div class="col-xl-3">
                                       <div class="form-group"> 
                                        <label for="nombre"># De estudiantes femeninos</label>      
                                        <input type="text" class="form-control input-sm" name="sex_fem"  required>
                                       </div>
                                    </div>
                                    <div class="col-xl-3">
                                       <div class="form-group"> 
                                        <label for="nombre"># De estudiantes masculinos</label>
                                         <input type="text" class="form-control input-sm" name="sex_mas"  required>
                                       </div>
                                    </div>


                                    <div class="col-xl-12">
                                       <div class="form-group">
                                          <label for="nombre">¿Cuenta con egresados?</label>
                                       </div>
                                    </div>

                                    <div class="col-md-12">
                                       <div class="form-group">
                                          <div class="form-check form-check-inline">
                                             <input class="form-check-input" type="radio" name="participacion" id="id1" value="Si">
                                             <label class="form-check-label">Si</label>
                                          </div>
                                          <div class="form-check form-check-inline">
                                             <input class="form-check-input" type="radio" name="participacion" id="id2" value="No">
                                             <label class="form-check-label">No</label>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-xl-12"> 
                                        <div id="divid1" style="display:none;">
                                           
                                        <div class="col-xl-3" id="divid1">
                                           <div class="form-group">
                                            <label for="nombre"># De estudiantes femeninos</label>       
                                            <input type="text" class="form-control input-sm" name="egresados_f"  >
                                           </div>
                                        </div>
                                        <div class="col-xl-3">
                                           <div class="form-group"> 
                                             <label for="nombre"># De estudiantes masculinos</label>
                                             <input type="text" class="form-control input-sm" name="egresados_m">
                                           </div>
                                        </div>
                                        </div>
                                   </div>

                                    <div class="col-xl-12"></div>

                                    <div class="col-xl-2">
                                        <input type="hidden" name="id_ies" value="<?php echo $id_ies; ?>" />
                                        <button type="submit" class="btn btn-block btn-primary btn-lg">Agregar</button><br><br>
                                    </div>
</div>                                
</form>
</div> 

<div class="tab-pane" id="pane3" role="tabpanel" aria-labelledby="home-tab">
<form action="../controller/update_ies.php" method="POST">  
<h3>Datos Institucionales de contacto</h3>
<p>La siguiente información se publicará en la oferta educativa en Educación Dual para fines de difusión</p>
<div class="row border">


                        <div class="col-md-12"><br>
                       <!-- <h3>Datos Institucionales de contacto</h3><?php //echo $id_ies; ?>
                        <p>La siguiente información se publicará en la oferta educativa en Educación Dual para fines de difusión<br><br></p>-->
                        </div>
                        
                      <div class="col-md-8">    
                        <div class="form-group"><label>Nombre de la Institución</label>
                        <input type="text"  class="form-control" onChange="conMayusculas(this)" value="<?php echo strtoupper($ies['dt_nombre_ies']); ?>" >
                      </div>                      
                        
                     </div>

                     <div class="col-md-4">
                        <div class="form-group"><label>Subsistema educativo</label>
                        <input type="text"  class="form-control" onChange="conMayusculas(this)" value="<?php echo strtoupper($ies['dt_subsistema_resp']); ?>" >
                        </div>                     
                     </div>                    


                     <div class="col-md-6">    
                        <div class="form-group">
                        <label>Correo</label>
                        <input type="text" name="email" class="form-control" onChange="conMayusculas(this)" value="<?php echo strtoupper($ies['dt_email']); ?>" required>
                      </div>                      
                     </div>

                     <div class="col-md-6">    
                        <div class="form-group">
                        <label>Teléfono</label>
                        <input type="text" name="telefono" class="form-control" onChange="conMayusculas(this)" value="<?php echo strtoupper($ies['dt_telefono']); ?>" required>
                      </div>                      
                     </div>


                     <div class="col-md-6">    
                        <div class="form-group">
                        <label>Dirección (Calle y Número):</label>
                        <input type="text" name="direccion" class="form-control" onChange="conMayusculas(this)" value="<?php echo strtoupper($ies['dt_direccion']); ?>"required>
                      </div>                      
                     </div>

                     <div class="col-md-6">    
                        <div class="form-group">
                        <label>Localidad, colonia o barrio:</label>
                        <input type="text" name="localidad" class="form-control" onChange="conMayusculas(this)" value="<?php echo strtoupper($ies['dt_localidad']); ?>"required>
                      </div>                      
                     </div>

                     <div class="col-md-6">    
                        <div class="form-group">
                        <label>Municipio:</label>
                        <input type="text" name="municipio" class="form-control" onChange="conMayusculas(this)" value="<?php echo strtoupper($ies['dt_municipio']); ?>"required>
                      </div>                      
                     </div>

                     <div class="col-md-3">    
                        <div class="form-group">
                        <label>Entidad:</label>
                        <input type="text" class="form-control" onChange="conMayusculas(this)" value="<?php echo strtoupper($ies['nombre_entidad']); ?>" required>
                      </div>                      
                     </div>


                     <div class="col-md-3">    
                      <div class="form-group">
                        <label>Codigo Postal:</label>
                        <input type="text" name="cp" class="form-control" onChange="conMayusculas(this)" value="<?php echo strtoupper($ies['dt_cp']); ?>" required>
                      </div>                      
                     </div>

                     <div class="col-md-12">    
                        <div class="form-group">
                        <label>Coordenadas geográficas de ubicación</label>
                      </div>                      
                     </div>

                     <div class="col-md-6">    
                        <div class="form-group">
                        <label>latitud</label>
                        <input type="text" name="lat" class="form-control" onChange="conMayusculas(this)" value="<?php echo strtoupper($ies['lat']); ?>"required>
                      </div>                      
                     </div>

                     <div class="col-md-6">    
                        <div class="form-group">
                        <label>longitud</label>
                        <input type="text" name="lng" class="form-control" onChange="conMayusculas(this)" value="<?php echo strtoupper($ies['lng']); ?>"required>
                      </div>                      
                     </div>


                     <div class="col-md-6">    
                        <div class="form-group">
                        <label>Año en que la Institución inicio bajo la modalidad de Educación Dual</label>
                        <input type="text" name="bajo_modalidad" class="form-control" onChange="conMayusculas(this)" value="<?php echo strtoupper($ies['dt_bajo_modalidad']); ?>" required>
                      </div>                      
                     </div>

                     <div class="col-md-6">    
                        <div class="form-group">
                        <label>Número total de egresados bajo la modalidad de Educación Dual </label>
                        <input type="text" name="total_egresados" class="form-control" onChange="conMayusculas(this)" value="<?php echo strtoupper($ies['dt_total_egresados']); ?>" required>
                       <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                      </div>                      
                     </div>
                    <div class="col-xl-12"></div>
                    <div class="col-xl-2">
                            <input type="hidden" name="id_ies" value="<?php echo $id_ies; ?>" />
                            <button type="submit" class="btn btn-block btn-primary btn-lg">Actualizar</button><br><br>
                    </div>

</div>
</form>                           
</div><br><br><br><br>
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
    
</html>