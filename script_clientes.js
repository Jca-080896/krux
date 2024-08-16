$(obtener_registros2());

function obtener_registros2(clientes)

{

    $.ajax({
        url : 'buscar_clientes.php',
        type : 'POST',
        dataType : 'html',
        data : { clientes: clientes },
    })

    .done(function(resultado2){
        $("#tabla_resultado2").html(resultado2);
    })
}

$(document).on('keyup', '#busqueda2' , function()
{

    var valorBusqueda2=$(this).val();
    if(valorBusqueda2!=""){
        obtener_registros2(valorBusqueda2);
    }
    else
    {
        obtener_registros2();
    }
});