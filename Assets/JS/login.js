function validCamposLogin () {
	email = $('#email').val();
	pass = $('#password').val();
	return (email.length > 0 && pass.length>0)		
}


jQuery(document).ready(function($) {
	$('#form').on('submit', function(event) {
		event.preventDefault();
		alerta = $('#alerta');
		if(validCamposLogin()){
			email = $('#email').val();
			pass = $('#password').val();
			$.ajax({
				url: './SQL/login.php',
				type: 'POST',
				dataType: 'text',
				data: {email: email,
					   password: pass},
			})
			.done(function(result) {
				if(result == 1){
					location.href = 'lista_administradores.php';


				}else {
					alerta.addClass('alert alert-danger');
        			alerta.html('Usuario o password incorrectos');
        			setTimeout(function () {
            		alerta.html('');
            		alerta.removeClass('alert alert-danger')
            		}, 5000);
				}
			})
		}else {
			alerta.addClass('alert alert-danger');
        	alerta.html('Faltan campos por llenar');
        	setTimeout(function () {
            alerta.html('');
            alerta.removeClass('alert alert-danger')
        	}, 5000);
		}
	});
});

