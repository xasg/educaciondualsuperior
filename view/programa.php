<?php 
session_start();
require_once('../model/databases_responsable.php');
mysqli_set_charset( $mysqli, 'utf8');
$id_ies=$_SESSION["id_ies"];
$ies = acces_ies($id_ies);
$subsistema= $ies['dt_subsistema_resp'];
$denominacion=view_deno($subsistema);
$programa = acces_programas($id_ies);

if ($result = $mysqli->query("SELECT * FROM programa_educativo 
          WHERE id_ies = '{$id_ies}'")) {
    /* determinar el número de filas del resultado */
    $row_cnt = $result->num_rows;
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
    <?php include("modal_unidad.php");?>
  <header class="stick style1 w-100" style=" background-color: #860f01;">
                <div class="container">
                    <div class="logo-menu-wrap w-100 d-flex flex-wrap justify-content-between align-items-start">
                    <div class="logo"><h1 class="mb-0"><a href="index.html" title="Home"><img class="img-fluid" src="../assets/images/img/logo_blanco2.png" alt="Logo" srcset="../assets/images/img/logo_blanco2.png"></a></h1></div> 
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
            </div>
         <section>
            <div class="w-100 text-center black-layer position-relative">                   
            </div><br><br><br>
         </section>
<div class="container">
    <br><br>
</div>
<div class="container">
<div class="tab-content">
<form action="../controller/new_programa.php" method="POST"> 
<div class="row p-3 my-3 border">
<div class="col-xl-12 font-weight-bold">
   <h5> Registro de programas educativos registrados en su institución educativa, en la modalidad Educación Dual al cierre del ciclo escolar 2021-2022<?php echo $subsistema; ?></h5>
</div>
<div class="col-xl-2"><br>
   <div class="form-group">
    <label>Grado/Denominación</label>  
    <select class="form-control"  name="denominacion" id="denominacion" required>
                            <option value="">Seleccione:</option>
                                    <?php
                                     while ($resul = $denominacion->fetch_assoc()) { 
                                       echo '<option value="'.$resul['grado_denominacion'].'">'.$resul['grado_denominacion'].'</option>';
                                     } ?>
    </select> 
  </div> 
</div>

<div class="col-xl-6"><br>
   <div class="form-group">
    <label>Programa Educativo</label>
        <select class="form-control" name="programa_edu" id="programa_edu" required></select>  
  </div> 
</div>

<div class="col-xl-4"><br>
<div class="form-group">
  <label>Año de inicio bajo la modalidad Educación Dual</label>
  <select class="form-control" name="inicio">
    <option>2023</option>
    <option>2022</option>
    <option>2021</option>
    <option>2020</option>
    <option>2019</option>
    <option>2018</option>
    <option>2017</option>
    <option>2016</option>
    <option>2015</option>
    <option>2014</option>
    <option>2013</option>
    <option>2012</option>
    <option>2011</option>
  </select>
</div>
</div>


<div class="col-xl-12"><br>
  <div class="form-group">
    <label>¿A partir de qué periodo académico el estudiante puede ingresar a esta Modalidad Dual?</label>
    <input type="text" class="form-control input-sm" name="periodo" placeholder="Ejemplo: (2 semestre, 4 cuatrimestre, 4 trimestre, etc)" required="">
  </div>
</div>
<div class="col-xl-2"><br>
  <button type="submit" class="btn btn-block btn-primary">Agregar</button>
</div>
</div>
</form>

<?php if($row_cnt>0){ ?>
<div class="row">
<div class="col-xl-12">
    <br>
                                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                                        <thead class="thead-dark">
                                          <tr>  
                                                <th>#</th>
                                                <th>Grado/Denominación</th>
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
                                                <td><?php echo strtoupper($prog['dt_denominacion']); ?></td>
                                                <td><?php echo strtoupper($prog['dt_programa']); ?></td>
                                                <td><?php echo strtoupper($prog['dt_inicio']); ?></td>
                                                <td class="text-center"><?php echo strtoupper($prog['dt_unidad']); ?></td>
                                                <td class="text-center"><?php echo strtoupper($prog['estudiantes']); ?></td>
                                                <td class="text-center"><?php echo strtoupper($prog['egresados']); ?></td>
                                                <td class="text-center"> <?php echo strtoupper($prog['num']); ?>
                                                 <a data-toggle="modal" data-target="#convenio" data-nombre="<?php echo $prog['dt_programa']; ?>" data-id="<?php echo $prog['id_programa']?>"><img src="../img/icons/mas.png" class=""></a> <img src="../img/icons/lupa.png" class="">
                                                 </td>                                               
                                              </tr> 
                                              <?php
                                                }
                                              ?>               
                                            </tbody>

                                      </table>

                                      <div class="col-md-2">
                                        <a href="registro.php"><button type="submit" class="btn btn-block btn-primary">Salir</button></a>
                                     <br><br>
                                     </div>
</div>
</div>

<?php } ?>
   
</div>
</div>
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
           $("#denominacion").change(function () {          
             $("#denominacion option:selected").each(function () {
               grado_denominacion = $(this).val();
               $.post("../includes/get_programa_edu.php", { grado_denominacion: grado_denominacion }, function(data){
                 $("#programa_edu").html(data);
               });            
             });
           })
         });      
      </script>  

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
      <script src="../assets/js/app.js"></script>
      <script src="../assets/js/unidad.js"></script>
</html>