function valid_uniqueCode(code, id = - 1) {
    if (code.length > 0)
    {

        $.ajax({
            url: './SQL/valid_code.php',
            type: 'POST',
            dataType: 'text',
            data: {code: code,
                id: id}
        })
                .done(function (result) {
                    if (result == '1') {
                        $('#codigo').focus();
                        alerta = $('#alerta');
                        alerta.addClass('alert alert-danger');
                        alerta.html('El codigo ' + code + ' ya existe, por favor ingresa otro');
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



function validCampos(id) {
    var full = true;
    var mensaje = 'Faltan campos por llenar';
    nombre = $('#nombre').val();
    codigo = $('#codigo').val();
    descripcion = $('#descripcion').val();
    costo = $('#costo').val();
    stock = $('#stock').val();
    file = $("#file").val();


    alerta = $('#alerta');
    if (nombre.length == 0 || codigo.length == 0 || descripcion.length == 0 || costo == undefined || stock == undefined)
        full = false;
    else {
        if (costo <= 0 || stock <= 0) {
            full = false;
            mensaje = 'Costo y Stock solo admiten valores positivos mayores a 0';
        } else {
            if ((stock % 1) != 0) {
                full = false;
                mensaje = 'Stock solo admiten valores enteros positivos mayores a 0';
            }
        }
    }


    if (id == undefined && file.length == 0)
        full = false;

    if (!full) {
        alerta.addClass('alert alert-danger');
        alerta.html(mensaje);
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
    url = (id == undefined) ? url + 'insert_product.php' : url + 'update_product.php';


    $("#form").on('submit', function (event) {
        event.preventDefault();
        var full = validCampos(id);

        if (full)
        {
            this.method = 'POST';
            this.action = url;
            this.submit();
        }

    });






    $('#codigo').blur(function () {
        (valid_uniqueCode($(this).val(), id));
    });
    ;
});

