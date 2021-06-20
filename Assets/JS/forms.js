function valid_uniqueMail(mail, id = - 1) {
    if (mail.length > 0)
    {

        $.ajax({
            url: './SQL/valid_mail.php',
            type: 'POST',
            dataType: 'text',
            data: {	mail: mail, 
            		id: id 	}
        })
                .done(function (result) {
                    if (result == '1') {
                        $('#email').focus();
                        alerta = $('#alerta');
                        alerta.addClass('alert alert-danger');
                        alerta.html('El correo ' + mail + ' ya existe, por favor ingresa otro');
                        setTimeout(function () {
                            alerta.html('');
                            alerta.removeClass('alert alert-danger')
                        }, 5000);

                    }
                })
                .fail(function () {
                    console.log("error");
                });
    }

}



function validCampos (id) {
	var full = true;
	nombres = $('#nombre').val();
    apellidos = $('#apellidos').val();
    email = $('#email').val();
    password = $('#password').val();
    rol = $('#rol').val();
    file = $("#file").val();
    alerta = $('#alerta');
    if (nombres.length == 0 || apellidos.length == 0 || email.length == 0 || rol == '0') full = false;
    if(id == undefined && (password.length == 0 || file.length == 0) ) full = false;

    if(!full){
    	alerta.addClass('alert alert-danger');
        alerta.html('Faltan campos por llenar');
        setTimeout(function () {
            alerta.html('');
            alerta.removeClass('alert alert-danger')
        }, 5000)
    }
   	
   	return full;
    

    
}


$(document).ready(function () {

    var id = $("#id").val();
    var url = "./SQL/"
    url = (id == undefined) ? url+'insert_admin.php': url+'update_admin.php';


    $("#form").on('submit', function(event){
    	event.preventDefault();
    	var full = validCampos(id);
    	
    	if(full)
    	{
    		this.method = 'POST';
    		this.action = url;
    		this.submit();
    	}

    });






    $('#email').blur(function () {
        (valid_uniqueMail($(this).val(), id ));
    });
    ;
});

