<?php

class ControladorMateriales{


    /* ===========================================
    REGISTRO MATERIALES
    =========================================== */

    static public function ctrCrearMateriales()
    {

        if (isset($_POST["nuevoNombreM"])) {

            if (preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ. ]+$/', $_POST["nuevoNombreM"])) {

                $tabla = "material";

                $datos = array(
                    "id_proveedor" => $_POST["nuevoNombreProveedor"],
                    "nombre_material" => $_POST["nuevoNombreM"],
                    "tipo_material" => $_POST["nuevoTipoM"],
                    "marca_material" => $_POST["nuevoMarcaM"],
                    "cantidad_material" => $_POST["nuevoCantidadM"],
                    "precio_compra_material" => $_POST["nuevoPrecioCompraM"],
                    "precio_venta_material" => $_POST["nuevoPrecioVentaM"]);

                $respuesta = ModeloMateriales::mdlIngresarMaterial($tabla, $datos);

                if ($respuesta == "ok") {
                    echo '<script>
                                Swal.fire({
                                    icon: "success",
                                    title: "¡El material ha sido guardado correctamente!",
                                    showConfirmButton: true,
                                    confirmButtonText: "Cerrar"
                                }).then(function(result){
                                    if(result.value){
                                        window.location = "materiales";
                                    }
                                });    
                            </script>';
                }
            } else {
                echo '<script>
                        Swal.fire({
                            icon: "error",
                            type: "error",
                            title: "¡El nombre del material no puede ir vacio o llevar caracteres especiales!",
                            showConfirmButton: true,
                            confirmButtonText: "Cerrar"
                        }).then(function(result){
                            if(result.value){
                                window.location = "materiales";
                            }
                        });    
                    </script>';
            }
        }
    }

    /* ===========================================
    MOSTRAR MATERIALES
    =========================================== */

    static public function ctrMostrarMateriales($item, $valor)
    {

        $tablaP = "proveedor";
        $tablaM = "material";
        $respuesta = ModeloMateriales::mdlMostrarMateriales($tablaP, $tablaM, $item, $valor);

        return $respuesta;
    }

    /* ===========================================
    EDITAR MATERIALES
    =========================================== */

    static public function ctrEditarMateriales()
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
    BORRAR MATERIALES
    =========================================== */

    static public function ctrBorrarMateriales()
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
