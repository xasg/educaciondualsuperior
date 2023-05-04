<form action="../controller/update_unidad.php" method="POST">
<div class="modal fade" id="unidad" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
        <h4 class="modal-title" id="exampleModalLabel">Información de la unidad económica</h4>
      </div>
      <div class="modal-body">
          <div class="row">
        <div id="datos_ajax"></div> 
                                    <div class="col-xl-6">
                                       <div class="form-group"> 
                                          <label>Nombre de la unidad económica</label>
                                          <input type="text" class="form-control" name="nombre" id="nombre" onChange="conMayusculas(this)" required="">
                                       </div>
                                    </div> 
                                    <div class="col-xl-3">
                                       <div class="form-group"> 
                                          <label>Cuenta con convenio</label>
                                          <!-- <input type="text" class="form-control" name="convenio" id="convenio" required="">   -->
                                          <select class="form-control" name="convenio" id="convenio" required="">
                                          <option value="">Seleccione:</option>
                                            <option value="SI">SI</option>
                                            <option value="NO">NO</option>
                                          </select>   
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
                                        <input type="number" class="form-control" name="estudiante_fem" id="estudiante_fem" required="">  
                                       </div>
                                    </div>
                                    <div class="col-xl-3">
                                       <div class="form-group"> 
                                        <label for="nombre"># De estudiantes masculinos</label>
                                         <input type="number" class="form-control" name="estudiante_mas" id="estudiante_mas" required="">
                                       </div>
                                    </div>


                                     <div class="col-xl-12">
                                       <div class="form-group">
                                          <label for="nombre">¿Cuántos docentes se involucrarón en este programa educativo bajo la Modalidad Dual?</label>
                                       </div>
                                    </div>
                                    <div class="col-xl-3">
                                       <div class="form-group"> 
                                        <label for="number"># Docentes femeninos</label>      
                                        <input type="number" class="form-control" name="docente_fem" id="docente_fem" required="">
                                       </div>
                                    </div>
                                    <div class="col-xl-3">
                                       <div class="form-group"> 
                                        <label for="number"># Docentes masculinos</label>
                                         <input type="number" class="form-control" name="docente_mas" id="docente_mas" required="">
                                       </div>
                                    </div>


                                    <div class="col-xl-12">
                                       <div class="form-group">
                                          <label for="nombre">¿Cuenta con egresados?</label>
                                       </div>
                                    </div>

                                     <div class="col-xl-3">
                                       <div class="form-group"> 
                                        <label for="nombre"># Egresados femeninos</label>      
                                        <input type="number" class="form-control" name="egresados_fem" id="egresados_fem">
                                       </div>
                                    </div>
                                    <div class="col-xl-3">
                                       <div class="form-group"> 
                                        <label for="nombre"># Egresados masculinos</label>
                                         <input type="number" class="form-control" name="egresados_mas" id="egresados_mas">
                                       </div>
                                    </div>
                                    <div class="col-xl-12">
                                    <div class="col-xl-4">  <br>
                                          <input type="hidden" class="form-control" id="id" name="id">
                                          <input type="hidden" class="form-control" id="programa" name="programa">
                                          <button type="submit" class="btn btn-block btn-primary btn-lg">Editar</button><br><br>
                                    </div>
                                    </div>

</div> 
             
      </div>
    </div>
  </div>
</div>
</form>
