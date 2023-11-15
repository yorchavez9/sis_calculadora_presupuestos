<?php

class ControladorTrabajadores{


    /* ===========================================
    REGISTRO DE TRABAJADORES
    =========================================== */

    static public function ctrCrearTrabajador()
    {

        if (isset($_POST["nuevoNombre"])) {

            if (preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoNombre"])) {

                $tabla = "trabajador";

                $datos = array(
                    "nombre_trabajador" => $_POST["nuevoNombre"],
                    "especialidad_trabajador" => $_POST["nuevoEspacialidad"],
                    "dni_trabajador" => $_POST["nuevoDni"],
                    "telefono_trabajador" => $_POST["nuevoTelefono"],
                    "funcion_trabajador" => $_POST["nuevoFuncion"],
                    "tiempo_trab_trabajador" => $_POST["nuevoTiempoTrabajo"],
                    "sueldo_men_trabajador" => $_POST["nuevoSueldoM"],
                    "sueldo_sem_trabajador" => $_POST["nuevoSueldoS"],
                    "sueldo_dia_trabajador" => $_POST["nuevoSueldoD"],
                    "sueldo_proyecto" => $_POST["nuevoSueldoP"]
                );

                $respuesta = ModeloTrabajadores::mdlIngresarTrabajador($tabla, $datos);

                if ($respuesta == "ok") {
                    echo '<script>
                                Swal.fire({
                                    icon: "success",
                                    title: "¡El trabajador ha sido guardado correctamente!",
                                    showConfirmButton: true,
                                    confirmButtonText: "Cerrar"
                                }).then(function(result){
                                    if(result.value){
                                        window.location = "trabajadores";
                                    }
                                });    
                            </script>';
                }
            } else {
                echo '<script>
                        Swal.fire({
                            icon: "error",
                            type: "error",
                            title: "¡El nombre no puede ir vacio o llevar caracteres especiales!",
                            showConfirmButton: true,
                            confirmButtonText: "Cerrar"
                        }).then(function(result){
                            if(result.value){
                                window.location = "trabajadores";
                            }
                        });    
                    </script>';
            }
        }
    }

    /* ===========================================
    MOSTRAR TRABAJADORES
    =========================================== */

    static public function ctrMostrarTrabajadores($item, $valor)
    {

        $tabla = "trabajador";
        $respuesta = ModeloTrabajadores::mdlMostrarTrabajadores($tabla, $item, $valor);

        return $respuesta;
    }

    /* ===========================================
    EDITAR DE TRABAJADOR
    =========================================== */

    static public function ctrEditarTrabajador()
    {

        if (isset($_POST["editarNombre"])) {
            if (preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarNombre"])) {

                $tabla = "proveedor";

                $datos = array(
                    "id_proveedor" => $_POST["idProveedor"],
                    "nombre_proveedor" => $_POST["editarNombre"],
                    "telefono_proveedor" => $_POST["editarTelefono"],
                    "correo_proveedor" => $_POST["editarCorreo"],
                    "direccion_proveedor" => $_POST["editarDireccion"]
                );


                $respuesta = ModeloProveedores::mdlEditarProveedor($tabla, $datos);

                if ($respuesta == "ok") {

                    echo '<script>
                            Swal.fire({
                                icon: "success",
                                type: "success",
                                title: "¡El usuario ha sido editado correctamente!",
                                showConfirmButton: true,
                                confirmButtonText: "Cerrar"
                            }).then(function(result){
                                if(result.value){
                                    window.location = "proveedores";
                                }
                            });    
                        </script>';
                }
            } else {


                echo '<script>
                        Swal.fire({
                            icon: "error",
                            type: "error",
                            title: "¡El nombre del proveedor no puede ir vacio o llevar caracteres especiales!",
                            showConfirmButton: true,
                            confirmButtonText: "Cerrar"
                        }).then(function(result){
                            if(result.value){
                                window.location = "proveedores";
                            }
                        });    
                    </script>';
            }
        }
    }

    /* ===========================================
    BORRAR DE TRABAJADOR
    =========================================== */

    static public function ctrBorrarTrabajador()
    {

        if (isset($_GET["idProveedor"])) {
            $tabla = "proveedor";
            $datos = $_GET["idProveedor"];

            $respuesta = ModeloProveedores::mdlBorrarProveedor($tabla, $datos);
         
            if ($respuesta == "ok") {
                echo '<script>
                        Swal.fire({
                            icon: "success",
                            type: "success",
                            title: "El proveedor ha sido borrado correctamente",
                            showConfirmButton: true,
                            confirmButtonText: "Cerrar",
                            closeOnConfirm: false,
                        }).then(function(result){
                            if(result.value){
                                window.location = "proveedores"
                            }
                        })
                        </script>';
            }
        }
    }
}
