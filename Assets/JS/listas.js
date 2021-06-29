
//Eliminar lógica de un registro
function eliminarLogica (id, nombre, tipo) {



	if (confirm('¿Seguro que desea eliminar a '+nombre+'?')) {
		$.ajax({
		url: './SQL/eliminacionLogica_'+tipo+'.php',
		type: 'POST',
		dataType: 'text',
		data: {id: id},
	})
	.done(function(result) {
		if (result == '1') {
			$('#'+tipo+id).hide('slow');
		}
		else {
			alert('Error al eliminar');
		}
	})
	.fail(function() {
		console.log("file error");
	});
	}
	
	
	
}