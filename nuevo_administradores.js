function valid_uniqueMail (mail) {

	if (mail.length > 0) {
	$.ajax({
		url: './SQL/valid_mail.php',
		type: 'POST',
		dataType: 'text',
		data: {mail: mail},
	})
	.done(function(result) {
		if (result == '1') {
        $('#email').focus();
		alerta = $('#alerta');
		alerta.addClass('alert alert-danger');
		alerta.html('El correo ' + mail+' ya existe, por favor ingresa otro');
		setTimeout(function () {
			alerta.html('');
			alerta.removeClass('alert alert-danger')
		}, 5000);

	}
	})
	.fail(function() {
		console.log("error");
	});
 	}
}

function valid_campos () {
	nombres  = $('#nombre').val();
	apellidos  = $('#apellidos').val();
	email  = $('#email').val();
	password  = $('#password').val();
	rol  = $('#rol').val();
	alerta = $('#alerta');

	if(nombres.length == 0 || apellidos.length == 0 ||  email.length == 0 || password.length==0 || rol == '0'){
		alerta = $('#alerta');
		alerta.addClass('alert alert-danger');
		alerta.html('Faltan campos por llenar');
		setTimeout(function () {
			alerta.html('');
			alerta.removeClass('alert alert-danger')
		}, 5000)
	}else {
		$.ajax({
			url: './SQL/insert_admin.php',
			type: 'POST',
			dataType: 'text',
			data: { nombres: nombres,
				    apellidos: apellidos,
				    email : email,
				    password : password,
				    rol : rol
			      },
		})
		.done(function(result) {
			if (result=='1') {
				window.location.href = "lista_administradores.php";
			}
			
		})
		.fail(function() {
			console.log("error al insertar");
		});
		
	}

}

$(document).ready(function() {
	$('#email').blur(function() {
		(valid_uniqueMail($(this).val()));
	});;
});

function regresar () {
		window.location.href = "lista_administradores.php";
}