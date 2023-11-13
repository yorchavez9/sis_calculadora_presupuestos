
/* =======================================
ACTIVAR USUARIO
======================================= */



/* =======================================
ELIMINAR USUARIO
======================================= */

$(".tablas").on("click",".btnEliminarUsuario", function(){
    
    var idUsuario = $(this).attr("idUsuario");
    var usuario = $(this).attr("usuario");

    Swal.fire({
        title: '¿Está seguro de borrar el usaurio?',
        text: '¡Si no lo está puede cancelar la acción!',
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#232BEB',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: 'Si, borrar usuario'
    }).then(function(result){
        if(result.value){
            window.location = "index.php?ruta=usuarios&idUsuario="+idUsuario+"&usuario="+usuario;
        }
    })

})