
//Eliminar lógica de un registro
function eliminarAdmin (id, nombre) {


	if (confirm('¿Seguro que desea eliminar a '+nombre+'?')) {
		$.ajax({
		url: './SQL/eliminacionLogica.php',
		type: 'POST',
		dataType: 'text',
		data: {id: id},
	})
	.done(function(result) {
		if (result == '1') {
			$('#admin'+id).hide('slow');
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