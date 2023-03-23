<?php 
session_start();
require_once('../controller/conec.php');
require_once('../model/databases_programa.php');
mysqli_set_charset( $mysqli, 'utf8');
$id=$_SESSION["id"];
$programa = acces_programas($id);
$responsable = acces_responsable($id);

$mysqli = new mysqli($servername, $username, $password, $dbname);
$result ='';
if( $mysqli->connect_errno )
{
  echo '';
  exit;
}

if ($result = $mysqli->query("SELECT * FROM programa_educativo 
          WHERE id_usuario = '{$id}'")) {
    /* determinar el número de filas del resultado */
    $row_cnt = $result->num_rows;
}
error_reporting (E_ALL); 
?> 
<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="" />
      <meta name="keywords" content="" />
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


<script>
a = 0;
function addUnidad(){
        a++;

        var div = document.createElement('div');
            div.innerHTML = '<input type="text" class="form-control" name="unidad_'+a+'" onChange="conMayusculas(this)" ><br>';
            document.getElementById('unidad').appendChild(div);document.getElementById('unidad').appendChild(div);
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
         <a class="nav-link active" id="home-tab" data-toggle="tab" href="#pane1" role="tab" aria-controls="home" aria-selected="true">Resumen</a>
       </li>
       <li class="nav-item">
         <a class="nav-link" id="profile-tab" data-toggle="tab" href="#pane2" role="tab" aria-controls="profile" aria-selected="false">Registro de programas educativos</a>
       </li>
        <li class="nav-item">
         <a class="nav-link" id="profile-tab" data-toggle="tab" href="#pane3" role="tab" aria-controls="profile" aria-selected="false">Datos Institucionales</a>
       </li>
     </ul>
     <br><br>

     <div class="tab-content">
        <div class="tab-pane active" id="pane1" role="tabpanel" aria-labelledby="home-tab">

            <!--Datos personales-->
                                 <div class="row">
                                    <span class="border "><br><br>
                                    <div class="col-xl-12">
                                       <p>A continuación se muestran los programas educativos registrados en su institución educativa, en la modalidad Educación Dual al cierre del ciclo escolar 2021-2022</p>
                                       <p>Agradecemos el apoyo en el llenado, ya que el mismo servirá para mostrar la oferta educativa a nivel nacional, incluyendo a su IES con los programas aquí registrados.</p>
                                       <p><strong>Se cuenta con <?php echo  $row_cnt;?> programas educativos registrados.</strong></p><?php echo $id; ?>
                                    </div>
                                    <div class="col-md-12"><br>
                                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                          <tr>  
                                            <thead class="thead-dark">
                                                <th>#</th>
                                                <th>Grado/Denominación</th>
                                                <th>Programa educativo</th>
                                                <th>Unidad económica</th> 
                                                <th>Estudiantes</th>
                                                <th>Egresados</th>
                                                <!--<th>Detalle</th>-->
                                                <th>Editar</th>
                                          </tr>
                                            </thead>
                                        </thead>
                                            <tbody>
                                              <?php
                                              $counter = 1;
                                              while($prog = $programa->fetch_assoc())
                                              {
                                              ?>
                                              <tr>
                                                <td class="text-center"><?php echo $counter++ ?></td>
                                                <td><?php echo strtoupper($prog['dt_denominacion']); ?></td>
                                                <td><?php echo strtoupper($prog['dt_programa']); ?></td>
                                                <td><?php echo strtoupper($prog['dt_unidad']."<br>".$prog['dt_unidad_1']); ?></td>
                                                <td class="text-center"><?php echo ($prog['dt_num_m']+$prog['dt_num_f']); ?></td>
                                                <td class="text-center"><?php echo ($prog['dt_egresados_m']+$prog['dt_egresados_f']); ?></td>
                                                <!--<td>Ver</td>-->
                                              <td><a href="editar_programa.php?var=<?php echo base64_encode($prog['id_programa']) ?>">Editar</a></td>
                                              </tr> 
                                              <?php
                                                }
                                              ?>               
                                            </tbody>         
                                      </table><br><br>
                              </div>
                          </span><br><br>
                          </div>
        </div>




    <div class="tab-pane" id="pane2" role="tabpanel" aria-labelledby="profile-tab">
    <form action="../controller/new_programa.php" method="POST">  
                                    <div class="row border">
                                    <div class="col-xl-2"><br>
                                     <label><strong>Grado/Denominación</strong></label>
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
                                    <div class="col-xl-9">
                                       <div class="form-group"> 
                                          <label>Nombre de la unidad económica</label>
                                          <input type="text" class="form-control" name="unidad" onChange="conMayusculas(this)" required="">
                                       </div>
                                    </div>                                    

                                    <div class="col-md-3"><br>
                                        <input type="button" class="btn btn-block btn-primary btn-lg" id="add_cancion()" onClick="addUnidad()" value="+ Otra unidad económica" />
                                    </div>

                                        <div class="col-md-9" id="unidad">
                                        </div>


                                    <div class="col-xl-12">
                                       <div class="form-group">
                                           <label for="nombre">¿A partir de qué periodo académico el estudiante puede ingresar a esta Modalidad Dual?</label>
                                         <input type="text" class="form-control input-sm" name="periodo" placeholder="Ejemplo: (2 semestre, 4 cuatrimestre, 4 trimestre, etc)" required>
                                       </div>
                                    </div>
                                     <div class="col-xl-12">
                                       <div class="form-group">
                                          <label for="nombre">¿Cuántos estudiantes cursan actualmente este programa educativo?</label>
                                       </div>
                                    </div>
                                    <div class="col-xl-3">
                                       <div class="form-group"> 
                                        <label for="nombre"># de estudiantes Femeninos</label>      
                                        <input type="text" class="form-control input-sm" name="sex_fem"  required>
                                       </div>
                                    </div>
                                    <div class="col-xl-3">
                                       <div class="form-group"> 
                                        <label for="nombre"># de estudiantes Masculinos</label>
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
                                          <!--<div class="form-check form-check-inline">
                                             <input class="form-check-input" type="radio" name="participacion" value="no" required="">
                                             <label class="form-check-label">No participaré</label>
                                          </div>-->
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
                                            <label for="nombre"># de estudiantes Femeninos</label>       
                                            <input type="text" class="form-control input-sm" name="egresados_f"  required>
                                           </div>
                                        </div>
                                        <div class="col-xl-3">
                                           <div class="form-group"> 
                                             <label for="nombre"># de estudiantes Masculinos</label>
                                             <input type="text" class="form-control input-sm" name="egresados_m"  required>
                                           </div>
                                        </div>
                                        </div>
                                   </div>

                                    <div class="col-xl-12"></div>

                                    <div class="col-xl-2">
                                        <input type="hidden" name="id" value="<?php echo $id; ?>" />
                                        <button type="submit" class="btn btn-block btn-primary btn-lg">Agregar</button><br><br>
                                    </div>
                                                                      
                                 </div>                                 
                             </form>
</div> 

<div class="tab-pane" id="pane3" role="tabpanel" aria-labelledby="home-tab">
    <form action="" method="POST">  
                        <div class="row border">
                        <div class="col-md-12">
                        <h3>Datos Institucionales de contacto</h3>
                        <p>La siguiente información se publicará en la oferta educativa para fines de difusión<br><br></p>
                        </div>
                        
                      <div class="col-md-8">    
                        <div class="form-group">
                        <label for="exampleInputEmail1">Nombre de la Institución</label>
                        <input type="text" name="nombre_ies" class="form-control" onChange="conMayusculas(this)" value="<?php echo strtoupper($responsable['dt_ies']); ?>" >
                      </div>                      
                     </div>

                     <div class="col-md-4">    
                     <div class="form-group">
                        <label for="exampleInputEmail1">Subsistema educativo</label>
                       <select class="form-control" name="subsistema">
                           <option value="<?php echo strtoupper($responsable['dt_subsistema']); ?>" selected><?php echo strtoupper($responsable['dt_subsistema']); ?></option>
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

                     <div class="col-md-6">    
                        <div class="form-group">
                        <label for="exampleInputEmail1">Correo</label>
                        <input type="text" name="nombre_ies" class="form-control" onChange="conMayusculas(this)"required>
                       <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                      </div>                      
                     </div>

                     <div class="col-md-6">    
                        <div class="form-group">
                        <label for="exampleInputEmail1">Teléfono</label>
                        <input type="text" name="nombre_ies" class="form-control" onChange="conMayusculas(this)"required>
                       <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                      </div>                      
                     </div>


                     <div class="col-md-6">    
                        <div class="form-group">
                        <label for="exampleInputEmail1">Dirección (Calle y Número):</label>
                        <input type="text" name="nombre_ies" class="form-control" onChange="conMayusculas(this)"required>
                      </div>                      
                     </div>

                     <div class="col-md-6">    
                        <div class="form-group">
                        <label for="exampleInputEmail1">Localidad, colonia o barrio:</label>
                        <input type="text" name="nombre_ies" class="form-control" onChange="conMayusculas(this)"required>
                      </div>                      
                     </div>

                     <div class="col-md-6">    
                        <div class="form-group">
                        <label for="exampleInputEmail1">Municipio:</label>
                        <input type="text" name="nombre_ies" class="form-control" onChange="conMayusculas(this)"required>
                      </div>                      
                     </div>


                      <div class="col-md-3">    
                      <div class="form-group">
                          <label for="exampleInputEmail1">Entidad</label>
                       <select class="form-control" name="entidad">
                          <option value="<?php echo strtoupper($responsable['dt_entidad']); ?>" selected><?php echo strtoupper($responsable['dt_entidad']); ?></option>
                           <option value="AGUASCALIENTES">AGUASCALIENTES</option>
                                                <option value="BAJA CALIFORNIA">BAJA CALIFORNIA</option>
                                                <option value="BAJA CALIFORNIA SUR">BAJA CALIFORNIA SUR</option>
                                                <option value="CAMPECHE">CAMPECHE</option>
                                                <option value="CHIAPAS">CHIAPAS</option>
                                                <option value="CHIHUAHUA">CHIHUAHUA</option>
                                                <option value="COAHUILA">COAHUILA</option>
                                                <option value="COLIMA">COLIMA</option>
                                                <option value="09">CIUDAD DE MÉXICO</option>
                                                <option value="CIUDAD DE MÉXICO">DURANGO</option>
                                                <option value="GUANAJUATO">GUANAJUATO</option>
                                                <option value="GUERRERO">GUERRERO</option>
                                                <option value="HIDALGO">HIDALGO</option>
                                                <option value="JALISCO">JALISCO</option>
                                                <option value="MÉXICO">MÉXICO</option>
                                                <option value="MICHOACÁN">MICHOACÁN</option>
                                                <option value="MORELOS">MORELOS</option>
                                                <option value="NAYARIT">NAYARIT</option>
                                                <option value="NUEVO LEÓN">NUEVO LEÓN</option>
                                                <option value="OAXACA">OAXACA</option>
                                                <option value="PUEBLA">PUEBLA</option>
                                                <option value="QUERÉTARO">QUERÉTARO</option>
                                                <option value="QUINTANA ROO">QUINTANA ROO</option>
                                                <option value="SAN LUIS POTOSÍ">SAN LUIS POTOSÍ</option>
                                                <option value="SINALOA">SINALOA</option>
                                                <option value="SONORA">SONORA</option>
                                                <option value="TABASCO">TABASCO</option>
                                                <option value="TAMAULIPAS">TAMAULIPAS</option>
                                                <option value="TLAXCALA">TLAXCALA</option>
                                                <option value="VERACRUZ">VERACRUZ</option>
                                                <option value="YUCATÁN">YUCATÁN</option>
                                                <option value="ZACATECAS">ZACATECAS</option>
                       </select>                        
                      </div>                      
                     </div>

                     <div class="col-md-3">    
                        <div class="form-group">
                        <label for="exampleInputEmail1">Codigo Postal:</label>
                        <input type="text" name="nombre_ies" class="form-control" onChange="conMayusculas(this)"required>
                      </div>                      
                     </div>

                     <div class="col-md-12">    
                        <div class="form-group">
                        <label for="exampleInputEmail1">Coordenadas geográficas de ubicación</label>                       
                      </div>                      
                     </div>

                     <div class="col-md-6">    
                        <div class="form-group">
                        <label for="exampleInputEmail1">latitud</label>
                        <input type="text" name="nombre_ies" class="form-control" onChange="conMayusculas(this)"required>
                       <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                      </div>                      
                     </div>

                     <div class="col-md-6">    
                        <div class="form-group">
                        <label for="exampleInputEmail1">longitud</label>
                        <input type="text" name="nombre_ies" class="form-control" onChange="conMayusculas(this)"required>
                       <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                      </div>                      
                     </div>





                     <div class="col-md-6">    
                        <div class="form-group">
                        <label for="exampleInputEmail1">Año en que la Institución inicio bajo la modalidad Educación Dual</label>
                        <input type="text" name="nombre_ies" class="form-control" onChange="conMayusculas(this)"required>
                       <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                      </div>                      
                     </div>

                     <div class="col-md-6">    
                        <div class="form-group">
                        <label for="exampleInputEmail1">Número total de egresados bajo la modalidad Educación Dual </label>
                        <input type="text" name="nombre_ies" class="form-control" onChange="conMayusculas(this)"required>
                       <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                      </div>                      
                     </div>
                    <div class="col-xl-12"></div>
                    <div class="col-xl-2">
                            <input type="hidden" name="id" value="<?php echo $id; ?>" />
                            <button type="submit" class="btn btn-block btn-primary btn-lg">Actualizar</button><br><br>
                    </div>

</div>
</form>                           
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

      <script language="javascript">
         $(document).ready(function() {
         $("input[type=radio]").click(function(event){
             var valor = $(event.target).val();
             if(valor =="Si"){
                 $("#divid1").show();
             } else if (valor == "No") {   
                 $("#divid1").hide();
             }
         });
         })
      </script>

   </body>
</html>