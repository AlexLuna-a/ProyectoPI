function valid_uniqueTag(tag, id = - 1) {
    if (tag.length > 0)
    {

        $.ajax({
            url: './SQL/valid_tag.php',
            type: 'POST',
            dataType: 'text',
            data: {tag: tag,
                id: id}
        })
                .done(function (result) {
                    if (result == '1') {
                        $('#nombre').focus();
                        alerta = $('#alerta');
                        alerta.addClass('alert alert-danger');
                        alerta.html('La etiqueta ' + tag + ' ya existe, por favor ingresa otro');
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
    file = $("#file").val();


    alerta = $('#alerta');
    if (nombre.length == 0)full = false;
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
    url = (id == undefined) ? url + 'insert_banner.php' : url + 'update_banner.php';


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



    $('#nombre').blur(function () {
        (valid_uniqueTag($(this).val(), id));
    });
    ;
});

