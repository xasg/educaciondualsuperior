<form action="../controller/new_unidad.php" method="POST">
<div class="modal fade" id="convenio" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
        <h4 class="modal-title" id="exampleModalLabel">Información de la unidad económica</h4>
      </div>
      <div class="modal-body">
			<div id="datos_ajax"></div>          
          <div class="form-group">           
            <input type="hidden" class="form-control" id="id" name="id">
          </div>


          <div class="row">
                                    <div class="col-xl-6">
                                       <div class="form-group"> 
                                          <label>Nombre de la unidad económica</label>
                                          <input type="text" class="form-control" name="unidad" onChange="conMayusculas(this)" required="">   
                                       </div>
                                    </div> 
                                    <div class="col-xl-3">
                                       <div class="form-group"> 
                                          <label>Cuenta con convenio</label>
                                          <select class="form-control" name="convn">
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
                                        <input type="text" class="form-control input-sm" name="estudiante_sex_fem"  required>
                                       </div>
                                    </div>
                                    <div class="col-xl-3">
                                       <div class="form-group"> 
                                        <label for="nombre"># De estudiantes masculinos</label>
                                         <input type="text" class="form-control input-sm" name="estudiante_sex_mas"  required>
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
                                        <input type="text" class="form-control input-sm" name="docente_sex_fem"  required>
                                       </div>
                                    </div>
                                    <div class="col-xl-3">
                                       <div class="form-group"> 
                                        <label for="nombre"># Docentes masculinos</label>
                                         <input type="text" class="form-control input-sm" name="docente_sex_mas"  required>
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
                                             <input class="form-check-input" type="radio" name="egresados" id="id1" value="Si">
                                             <label class="form-check-label">Si</label>
                                          </div>
                                          <div class="form-check form-check-inline">
                                             <input class="form-check-input" type="radio" name="egresados" id="id2" value="No">
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

                                    <div class="col-xl-4">
                                      <button type="submit" class="btn btn-block btn-primary">Agregar</button>
                                    </div>
</div> 


         
       
      </div>
    </div>
  </div>
</div>
</form>