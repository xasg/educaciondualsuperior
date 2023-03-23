<?php 
 $id=$_POST["id"];
 ?>
<div class="modal fade" id="unidad" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
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
                                          <label>Nombre de la unidad económica<?php echo $id ?></label>
                                          <input type="text" class="form-control" id="nombre">
                                       </div>
                                    </div> 
                                    <div class="col-xl-3">
                                       <div class="form-group"> 
                                          <label>Cuenta con convenio</label>
                                          <input type="text" class="form-control" id="convenio">  
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
                                        <input type="text" class="form-control" id="estudiante_fem">  
                                       </div>
                                    </div>
                                    <div class="col-xl-3">
                                       <div class="form-group"> 
                                        <label for="nombre"># De estudiantes masculinos</label>
                                         <input type="text" class="form-control" id="estudiante_mas">
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
                                        <input type="text" class="form-control" id="docente_fem">
                                       </div>
                                    </div>
                                    <div class="col-xl-3">
                                       <div class="form-group"> 
                                        <label for="nombre"># Docentes masculinos</label>
                                         <input type="text" class="form-control" id="docente_mas">
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
                                        <input type="text" class="form-control" id="egresados_fem">
                                       </div>
                                    </div>
                                    <div class="col-xl-3">
                                       <div class="form-group"> 
                                        <label for="nombre"># Egresados masculinos</label>
                                         <input type="text" class="form-control" id="egresados_mas">
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

</div> 


         
       
      </div>
    </div>
  </div>
</div>