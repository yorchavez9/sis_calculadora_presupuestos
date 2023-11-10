<?php

class ControladorUsuarios{


    /* ===========================================
    REGISTRO DE USUARIOS
    =========================================== */

    static public function ctrCrearUsuario(){

        if(isset($_POST["nuevoUsuario"])){
           
            if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoNombre"]) && preg_match('/^[a-zA-Z0-9]+$/', $_POST["nuevoPassword"])){

                $tabla = "usuario";
                $encriptar = crypt($_POST["nuevoPassword"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');
                $datos = array("nombre"=> $_POST["nuevoNombre"],
                               "usuario"=> $_POST["nuevoUsuario"],
                               "password"=> $encriptar,
                               "perfil"=> $_POST["nuevoPerfil"]);
                
                $respuesta = ModeloUsuarios::mdlIngresarUsuario($tabla, $datos);

                if($respuesta == "ok"){
                    echo '<script>
                        Swal.fire({
                            title: "¡El usuario ha sido gardado correctamente!",
                            showConfirmButton: true,
                            confirmButtonText: "Cerrar"
                        }).then(function(result){
                            if(result.value){
                                window.location = "login";
                            }
                        });    
                    </script>';
                }
            }

        }else{
           echo "No existe la variable";
        }

    }

    /* ===========================================
    MOSTRAR USUARIOS
    =========================================== */

    static public function ctrMostrarUsuarios($item, $valor){
        
        $tabla = "usuario";
        $respuesta = ModeloUsuarios::mdlMostrarUsuarios($tabla, $item, $valor);

        return $respuesta;

    }

    /* ===========================================
    REGISTRO DE USUARIOS
    =========================================== */

    /* ===========================================
    REGISTRO DE USUARIOS
    =========================================== */

    /* ===========================================
    REGISTRO DE USUARIOS
    =========================================== */

    /* ===========================================
    REGISTRO DE USUARIOS
    =========================================== */
}