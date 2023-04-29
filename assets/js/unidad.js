
		$('#unidad').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Botón que activó el modal
		  var id = button.data('id') // Extraer la información de atributos de datos
		  var programa = button.data('programa') // Extraer la información de atributos de datos
		  var nombre = button.data('nombre') // Extraer la información de atributos de datos
		  var convenio = button.data('convenio')
		  var estudiante_fem = button.data('estudiante_fem')
		  var estudiante_mas = button.data('estudiante_mas')
		  var docente_fem = button.data('docente_fem')
		  var docente_mas = button.data('docente_mas')
		  var egresados_fem = button.data('egresados_fem')
		  var egresados_mas = button.data('egresados_mas')
		  
		  
		  var modal = $(this)
		  modal.find('.modal-body #id').val(id)
		  modal.find('.modal-body #programa').val(programa)	
		  modal.find('.modal-body #nombre').val(nombre)	
		  modal.find('.modal-body #convenio').val(convenio)
		  modal.find('.modal-body #estudiante_fem').val(estudiante_fem)	
		  modal.find('.modal-body #estudiante_mas').val(estudiante_mas)
		  modal.find('.modal-body #docente_fem').val(docente_fem)	
		  modal.find('.modal-body #docente_mas').val(docente_mas)
		  modal.find('.modal-body #egresados_fem').val(egresados_fem)	
		  modal.find('.modal-body #egresados_mas').val(egresados_mas)	
		  $('.alert').hide();//Oculto alert
		})
		

