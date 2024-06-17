
		$('#convenio').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Botón que activó el modal
		  var id = button.data('id') // Extraer la información de atributos de datos
		  var nombre = button.data('nombre') // Extraer la información de atributos de datos
		  var ciclo = button.data('ciclo') // Extraer la información de atributos de datos
		  
		  
		  var modal = $(this)
		  modal.find('.modal-body #id').val(id)
		  modal.find('.modal-body #nombre').val(nombre)	
		  modal.find('.modal-body #ciclo').val(ciclo)		
		  $('.alert').hide();//Oculto alert
		})
		

