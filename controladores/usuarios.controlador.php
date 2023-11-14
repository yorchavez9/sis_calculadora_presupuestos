<?php

class ControladorUsuarios{


    /* ===========================================
    INGRESO DE USUARIO
    =========================================== */

    static public function ctrIngresoUsuario(){

		if(isset($_POST["ingUsuario"])){

			if($_POST["ingUsuario"]){
				
			   	$encriptar = crypt($_POST["ingPassword"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

				$tabla = "usuario";

				$item = "usuario";
				$valor = $_POST["ingUsuario"];

				$respuesta = ModeloUsuarios::mdlMostrarUsuarios($tabla, $item, $valor);

				if($respuesta["usuario"] == $_POST["ingUsuario"] && $respuesta["password"] == $encriptar){
						
					if($respuesta["estado"] == 1){

						$_SESSION["iniciarSesion"] = "ok";
						$_SESSION["id"] = $respuesta["id"];
						$_SESSION["nombre"] = $respuesta["nombre"];
						$_SESSION["usuario"] = $respuesta["usuario"];
						$_SESSION["perfil"] = $respuesta["perfil"];

						/*=============================================
						REGISTRAR FECHA PARA SABER EL ÚLTIMO LOGIN
						=============================================*/

						date_default_timezone_set('America/Lima');

						$fecha = date('Y-m-d');
						$hora = date('H:i:s');

						$fechaActual = $fecha.' '.$hora;

						$item1 = "ultimo_login";
						$valor1 = $fechaActual;

						$item2 = "id";
						$valor2 = $respuesta["id"];

						$ultimoLogin = ModeloUsuarios::mdlActualizarUsuario($tabla, $item1, $valor1, $item2, $valor2);

						if($ultimoLogin == "ok"){

							echo '<script>

								window.location = "inicio";

							</script>';

						}				
						
					}else{

						echo '<br>
							<div class="alert alert-danger">El usuario aún no está activado</div>';

					}		

				}else{

					echo '<br><div class="alert alert-danger">Error al ingresar, vuelve a intentarlo</div>';

				}

			}	

		}

	}

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

                $item = null;
                    $valor = null;

                    $contarUsuarios = ControladorUsuarios::ctrMostrarUsuarios($item, $valor);
                    if(count($contarUsuarios) > 0){
                        if($respuesta == "ok"){
                            echo '<script>
                                Swal.fire({
                                    title: "¡El usuario ha sido guardado correctamente!",
                                    showConfirmButton: true,
                                    confirmButtonText: "Cerrar"
                                }).then(function(result){
                                    if(result.value){
                                        window.location = "usuarios";
                                    }
                                });    
                            </script>';
                        }else{
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
                
            }

        }else{
           /* echo "No existe la variable"; */
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
    EDITAR DE USUARIOS
    =========================================== */

    static public function ctrEditarUsuario(){

        if(isset($_POST["editarUsuario"])){
            if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ]+$/', $_POST["editarNombre"])){

                $tabla = "usuario";

                if($_POST["editarPassword"] != ""){
                    if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["editarPassword"])){
                        $encriptar = crypt($_POST["editarPassword"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');
                    }else{

                        echo '<script>
                                Swal.fire({
                                    type: "error",
                                    title: "¡La contraseña no puede ir vacio o llevar caracteres especiales!",
                                    showConfirmButton: true,
                                    confirmButtonText: "Cerrar",
                                }).then(function(result){
                                    if(result.value){
                                        window.location = "usuarios"
                                    }
                                })
                                </script>';

                        return;

                    }
                }else{

                    $encriptar = $_POST["passwordActual"];

                }

                $datos = array("nombre"=> $_POST["editarNombre"],
                               "usuario"=> $_POST["editarUsuario"],
                               "password"=> $encriptar,
                               "perfil"=> $_POST["editarPerfil"]);
                

                $respuesta = ModeloUsuarios::mdlEditarUsuario($tabla, $datos);

                if($respuesta == "ok"){

                    echo '<script>
                            Swal.fire({
                                type: "success",
                                title: "¡El usuario ha sido editado correctamente!",
                                showConfirmButton: true,
                                confirmButtonText: "Cerrar"
                            }).then(function(result){
                                if(result.value){
                                    window.location = "usuarios";
                                }
                            });    
                        </script>';

                }

            }else{


                echo '<script>
                        Swal.fire({
                            type: "error",
                            title: "¡El usuario no puede ir vacio o llevar caracteres especiales!",
                            showConfirmButton: true,
                            confirmButtonText: "Cerrar"
                        }).then(function(result){
                            if(result.value){
                                window.location = "usuarios";
                            }
                        });    
                    </script>';

            }
        }

    }

    /* ===========================================
    BORRAR DE USUARIOS
    =========================================== */

    static public function ctrBorrarUsuario(){

        if(isset($_GET["idUsuario"])){
            $tabla = "usuario";
            $datos = $_GET["idUsuario"];

            $respuesta = ModeloUsuarios::mdlBorrarUsuario($tabla, $datos);
            echo $respuesta;
            if($respuesta == "ok"){
                echo '<script>
                        Swal.fire({
                            type: "success",
                            title: "El usuario ha sido borrado correctamente",
                            showConfirmButton: true,
                            confirmButtonText: "Cerrar",
                            closeOnConfirm: false,
                        }).then(function(result){
                            if(result.value){
                                window.location = "usuarios"
                            }
                        })
                        </script>';
            }
        }

    }

}