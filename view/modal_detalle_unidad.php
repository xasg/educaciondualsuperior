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
                                          <input type="text" class="form-control" name="nombre" id="nombre">
                                       </div>
                                    </div> 
                                    <div class="col-xl-3">
                                       <div class="form-group"> 
                                          <label>Cuenta con convenio</label>
                                          <input type="text" class="form-control" name="convenio" id="convenio">  
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
                                        <input type="text" class="form-control" name="estudiante_fem" id="estudiante_fem">  
                                       </div>
                                    </div>
                                    <div class="col-xl-3">
                                       <div class="form-group"> 
                                        <label for="nombre"># De estudiantes masculinos</label>
                                         <input type="text" class="form-control" name="estudiante_mas" id="estudiante_mas">
                                       </div>
                                    </div>


                                     <div class="col-xl-12">
                                       <div class="form-group">
                                          <label for="nombre">¿Cuántos docentes se involucrarón en este programa educativo bajo la Modalidad Dual?</label>
                                       </div>
                                    </div>
                                    <div class="col-xl-3">
                                       <div class="form-group"> 
                                        <label for="nombre"># Docentes femeninos</label>      
                                        <input type="text" class="form-control" name="docente_fem" id="docente_fem">
                                       </div>
                                    </div>
                                    <div class="col-xl-3">
                                       <div class="form-group"> 
                                        <label for="nombre"># Docentes masculinos</label>
                                         <input type="text" class="form-control" name="docente_mas" id="docente_mas">
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
                                        <input type="text" class="form-control" name="egresados_fem" id="egresados_fem">
                                       </div>
                                    </div>
                                    <div class="col-xl-3">
                                       <div class="form-group"> 
                                        <label for="nombre"># Egresados masculinos</label>
                                         <input type="text" class="form-control" name="egresados_mas" id="egresados_mas">
                                       </div>
                                    </div>

                                   <div class="col-xl-12">
                                    <label for="nombre">Seleccione los beneficios derivados de esta colaboración</label>
                                    
                                    <div class="form-group">
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                          <input type="checkbox" class="form-check-input" value="">Capacitación
                                        </label>
                                      </div>
                                      <div class="form-check-inline">
                                        <label class="form-check-label">
                                          <input type="checkbox" class="form-check-input" value="">Inserción laboral
                                        </label>
                                      </div>
                                      <div class="form-check-inline">
                                        <label class="form-check-label">
                                          <input type="checkbox" class="form-check-input" value="" disabled>Vinculación
                                        </label>
                                      </div>
                                    </div>
                                    </div>
                                    <div class="col-xl-12">  <br>
                                          <input type="hidden" class="form-control" id="id" name="id">
                                          <input type="hidden" class="form-control" id="programa" name="programa">
                                          <button type="submit" class="btn btn-block btn-primary btn-lg">Editar</button><br><br>
                     </div>

</div> 
             
      </div>
    </div>
  </div>
</div>
</form>
