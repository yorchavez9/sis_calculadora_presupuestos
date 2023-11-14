
/* =======================================
REVISAR SI EL USUARIO YA ESTÁ REGISTRADO
======================================= */

$("#nuevoUsuario").change(function(){

    $(".alert").remove();
    var usuario = $(this).val();

    var datos = new FormData();
    datos.append("validarUsuario", usuario);

    $.ajax({
        url: "ajax/usuarios.ajax.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",
        success: function(respuesta){
            if(respuesta){
                $("#nuevoUsuario").parent().after('<div class="alert alert-warning">Este usuario existe en la base de datos</div>');
                $("#nuevoUsuario").val("");
            }
        }
    })

})

/* =======================================
ACTIVAR USUARIO
======================================= */

$(".tablas").on("click", ".btnActivar", function(){
    var idUsuario = $(this).attr("idUsuario");
    var estadoUsuario = $(this).attr("estadoUsuario");

    var datos = new FormData();

    datos.append("activarId", idUsuario);
    datos.append("activarUsuario", estadoUsuario);

    $.ajax({
        url: "ajax/usuarios.ajax.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        success: function(respuesta){
            if(window.matchMedia("(max-width:767px)").matches){
                Swal.fire({
                    title: "El usuario ha sido actualizado",
                    type: "success",
                    confirmButtonText: "Cerrar"
                }).then(function(result){
                    if(result.value){
                        window.location = "usuarios";
                    }
                });
            }
        }
    })

    if(estadoUsuario == 0){
        $(this).removeClass('btn-success');
        $(this).addClass('btn-danger');
        $(this).html('Desactivado');
        $(this).attr('estadoUsuario',1);
    }else{
        $(this).addClass('btn-success');
        $(this).removeClass('btn-danger');
        $(this).html('Activado');
        $(this).attr('estadoUsuario',0);
    }
});

/* =======================================
ELIMINAR USUARIO
======================================= */

$(".tablas").on("click", ".btnEditarUsuario", function(){
    
    var idUsuario = $(this).attr("idUsuario");

    var datos = new FormData();
    datos.append("idUsuario", idUsuario);

    $.ajax({
        url: "ajax/usuarios.ajax.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",
        success: function(respuesta){
            $("#editarNombre").val(respuesta["nombre"]);
            $("#editarUsuario").val(respuesta["usuario"]);
            $("#editarPerfil").val(respuesta["perfil"]);
            $("#passwordActual").val(respuesta["password"]);
            
        }
    })

})


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