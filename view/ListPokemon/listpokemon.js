//documment ready cuando el documente este listo
$(document).ready(function(){

    filtrartodo();

    $.ajax({
        url:"../../controller/pokemon.php?op=tipo",
        dataType:"html",
        success:function(data){
            $("#listtipo").html(data);

            //verificar que la clase filtrodetalle exista
            // if ($(".filtrodetalle").hasClass("filtrodetalle")) {
            //     console.log("La clase filtrodetalle existe");
            // } else {
            //     console.log("La clase filtrodetalle no existe");
            // }
            
            $(".filtrodetalle").click(function(){
                filtrartodo();
            })
        }
    })

    $("#txtnombre").on("input", function(){
        filtrartodo();
    })
});

function filtrartodo(){

    var tipo = getCheckedValue("tipos"); //estos var tipo debemos enviarselo al hacía el modelo. (Pasar controler y modelo)

    var nombre = $("#txtnombre").val(); //obtener el valor del input

    $.ajax({
        url:"../../controller/pokemon.php?op=listar",
        method:"POST",
        dataType:"html",
        data:{
            tipo:tipo,
            nombre:nombre
        }, //enviar el tipo y nombre como parámetros al ajax
        success:function(data){
            $("#listpokemon").html(data)
        }
    })
}

function getCheckedValue(name){
    //almacenar la información 
    var array = [];

    $("input[name='"+ name +"']").each(function(){ //recorrer cada uno de los checkbox con el nombre que se le dio
        if($(this).is(":checked")){ //si el checkbox esta seleccionado se agrega a la array
            array.push($(this).val()); //agregar el valor del checkbox a la array
        }
    });
    return array;
}

function getInputValue(name){
    var inputValue;
    $("#txtnombre").on("input", function(){
        inputValue = $(this).val(); //obtener el valor del input
    }); 
    return inputValue;
}