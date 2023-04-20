<?php 
session_start();
if($_SESSION['id_ies']== null){
    header("Location:formulario.php");

}
require_once('../model/databases.php');
mysqli_set_charset( $mysqli, 'utf8');
$id_ies=$_SESSION["id_ies"];
$name_user=$_SESSION["name_user"];
$nivel_estudios = acces_nivel_estudios($id_ies);
$programa_educativo = acces_programa_educativo($id_ies);
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
    <?php include("modal_detalle_unidad.php");?>
    <header class="stick style1 w-100" style="background-color: #98213A;">
                <div class="container">
                    <div class="logo-menu-wrap w-100 d-flex flex-wrap justify-content-between align-items-start">
                    <div class="logo"><h1 class="mb-0"><img class="img-fluid" src="../assets/images/img/logo_blanco2.png" alt="Logo" srcset="../assets/images/img/logo_blanco2.png"></h1></div> 

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
   <h5> Registro de programas educativos registrados en su institución educativa, en la Modalidad de Educación Dual al cierre del ciclo escolar 2021-2022</h5>
</div>

<div class="col-xl-4"><br>
   <div class="form-group">
    <label>Nivel Estudios</label>  
    <select class="form-control"  id="nivel" required>
                            <option value="">Seleccione Nivel de Estudios:</option>
                                    <?php
                                     while ($resul_nivel = $nivel_estudios->fetch_assoc()) { 
                                       echo '<option value="'.$resul_nivel['id_cat_nivel_estudios'].'">'.$resul_nivel['dt_nombre_nivel_estudios'].'</option>.';
                                     } ?>
    </select> 
  </div> 
</div>

<div class="col-md-8"><br>    
                     <div class="form-group">
                        <label for="exampleInputEmail1">Programa Educativo</label>
                        <select class="form-control" name="programa_edu" id="programa_edu" onChange="mostrar(this.value)" required>
                        </select>                        
                      </div>                      
</div>

 <div class="col-xl-12" id="OTRO" style="display:none;"><br>
                                       <div class="form-group"> 
                                          <label>Otro Programa Educativo:</label>
                                          <input type="text" class="form-control" name="otro_programa" onChange="conMayusculas(this)">
                                       </div>
                                    </div>


<div class="col-xl-4"><br>
<div class="form-group">
  <label>Año de inicio bajo la Modalidad de Educación Dual</label>
 <select class="form-control" name="inicio">
    <option value="">Seleccione:</option>
    <option value="2023">2023</option>
    <option value="2022">2022</option>
    <option value="2021">2021</option>
    <option value="2020">2020</option>
    <option value="2019">2019</option>
    <option value="2018">2018</option>
    <option value="2017">2017</option>
    <option value="2016">2016</option>
    <option value="2015">2015</option>
    <option value="2014">2014</option>
    <option value="2013">2013</option>
    <option value="2012">2012</option>
    <option value="2011">2011</option>
  </select>
</div>
</div>


<div class="col-xl-7"><br>
  <div class="form-group">
    <label>¿A partir de qué periodo académico el estudiante puede ingresar a esta Modalidad de Educación Dual?</label>
<div class="row">
<div class="col-xl-4">
    <select class="form-control" name="num_periodo" required="">
    <option value="">Seleccione grado:</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
    <option value="11">11</option>
    <option value="12">12</option>
  </select>
</div>
<div class="col-xl-4">
    <select class="form-control" name="periodo" required="">
    <option value="">Seleccione tipo:</option>
    <option value="TRIMESTRE">TRIMESTRE</option>
    <option value="CUATRIMESTRE">CUATRIMESTRE</option>
    <option value="SEMESTRE">SEMESTRE</option>
  </select>
</div>
</div>

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
                                                <th>Programa educativo</th>
                                                <th class="text-center">Inicio</th> 
                                                <th class="text-center">Periodo</th>
                                                <th class="text-center">Estudiantes 2021-2022</th>
                                                <th class="text-center">Egresados 2021-2022</th>
                                                <th class="text-center">Unidades económicas</th>
                                                <th class="text-center">Estudiantes 2022-2023</th>
                                                <th class="text-center">Agregar Unidad económica</th>
                                                <th class="text-center">Consultar Unidades económicas</th>
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
                                                <td class="text-center"><?php echo strtoupper($prog['dt_num_periodo']." ".$prog['dt_unidad']); ?></td>
                                                <td class="text-center"><?php echo strtoupper($prog['estudiantes']); ?></td>
                                                <td class="text-center"><?php echo strtoupper($prog['egresados']); ?></td>
                                                <td class="text-center">  
                                                <?php if($prog['num']==0) {?>
                                                <form action="../controller/delate_programa.php" method="POST">
                                                    <input type="hidden" class="form-control" name="id_programa" value="<?php echo $prog['id_programa'] ?>">
                                                    <button type="submit" class="btn"><img src="../img/icons/eliminar.png">
                                                </form>
                                                    <?php } else { ?>
                                                        <?php echo strtoupper($prog['num']);?>
                                                    <?php }?>
                                                </td>

                                                <td class="text-center"><?php echo strtoupper($prog['estudiantes2023']); ?></td>
                                                <td class="text-center"><a data-toggle="modal" data-target="#convenio" data-nombre="<?php echo $prog['dt_programa']; ?>" data-id="<?php echo $prog['id_programa']?>"><img src="../img/icons/mas.png" class=""></a> </td>
                                                 <td class="text-center">
                                                 <a href="unidad.php?id_programa=<?php echo base64_encode($prog['id_programa'])?>"><img src="../img/icons/lupa.png" class=""></a>
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
<!--
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
      </script> --> 

      <script language="javascript">
         $(document).ready(function(){
           $("#nivel").change(function () {          
             $("#nivel option:selected").each(function () {
               id_cat_nivel_estudios = $(this).val();
               $.post("../includes/getIes_nivel.php", {id_cat_nivel_estudios: id_cat_nivel_estudios }, function(data){
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

<script type="text/javascript">
         function mostrar(id) {
             if (id == "OTRO") {
                 $("#OTRO").show();
             } else {   
                 $("#OTRO").hide();
             }
         }
</script>
      <script src="../assets/js/app.js"></script>
      <script src="../assets/js/unidad.js"></script>
</html>