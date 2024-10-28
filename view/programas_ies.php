<?php 
session_start();
if($_SESSION['id_ies']== null){
    header("Location:formulario.php");
}
require_once('../model/databases.php');
mysqli_set_charset( $mysqli, 'utf8');
$ciclo=$_GET["ciclo"];
$id_ies=$_GET["id_ies"];
$id_user = $_GET["id_user"];
$ies_nombre = $_GET["ies_nombre"];
$programa = acces_programas($id_ies, $id_user, $ciclo);
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
   <h5> Programas educativos registrados en <?php echo $ies_nombre ?>, en la Modalidad de Educación Dual al cierre del ciclo escolar <?php echo $ciclo?></h5><br>
</div>

</div>
</form>
<div class="row">
<div class="col-xl-12">
    <br>
                                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                                        <thead class="thead-dark">
                                          <tr>  
                                                <th>#</th>
                                                <th>Programa educativo</th>
                                                <th class="text-center">Inicio</th> 
                                                <th class="text-center">Periodo de inicio</th>
                                                <th class="text-center">Estudiantes <?php echo $ciclo ?></th>
                                                <th class="text-center">Egresados <?php echo $ciclo ?></th>
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
                                                <td class="text-center"><?php echo strtoupper($prog['dt_num_periodo']." ".$prog['dt_unidad']); ?></td>
                                                <td class="text-center"><?php echo strtoupper($prog['estudiantes']); ?></td>
                                                <td class="text-center"><?php echo strtoupper($prog['egresados']); ?></td>
                                               <td class="text-center">
                                                 <a href="unidad.php?id_programa=<?php echo base64_encode($prog['id_programa'])?>&ciclo=<?php echo $ciclo; ?>"><img src="../img/icons/lupa.png" class=""></a>
                                                 </td>                                      
                                              </tr> 
                                              <?php
                                                }
                                              ?>               
                                            </tbody>

                                      </table>

                                      <div class="col-md-2">

                                        <a href="report_21_22.php"><button type="submit" class="btn btn-block btn-primary">Salir</button></a>


                                     <br><br>
                                     </div>
</div>
</div>

   
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