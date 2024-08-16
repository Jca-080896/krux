$(obtener_registros());

function obtener_registros(eventos)

{

    $.ajax({
        url : 'buscar_evento.php',
        type : 'POST',
        dataType : 'html',
        data : { eventos: eventos },
    })

    .done(function(resultado){
        $("#tabla_resultado").html(resultado);
    })
}

$(document).on('keyup', '#busqueda' , function()
{

    var valorBusqueda=$(this).val();
    if(valorBusqueda!=""){
        obtener_registros(valorBusqueda);
    }
    else
    {
        obtener_registros();
    }
});

