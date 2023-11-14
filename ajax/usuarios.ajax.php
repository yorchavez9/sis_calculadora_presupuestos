<?php

require_once "../controladores/usuarios.controlador.php";
require_once "../modelos/usuarios.modelo.php";


class AjaxUsuarios{

    /* =====================================
    EDITAR USUARIO
    ===================================== */

    public $idUsuario;

    public function ajaxEditarUsuario(){

        $item = "id";
        $valor = $this->idUsuario;
        $respuesta = ControladorUsuarios::ctrMostrarUsuarios($item, $valor);

        echo json_decode($respuesta);

    }


    /* ============================================
    ACTIVAR USUARIO
    ============================================ */

    public $activarUsuario;
    public $activarId;

    public function ajaxActivarUsuario(){

        $tabla = "usuario";

        $item1 = "estado";
        $valor1 = $this->activarUsuario;

        $item2 = "id";
        $valor2 = $this->activarId;

        $respuesta = ModeloUsuarios::mdlActualizarUsuario($tabla, $item1, $valor1, $item2, $valor2);

    }



    /* =======================================
    VALIDAR NO REPITIR USUARIO
    ======================================= */





}

/* ========================================
EDITAR USAURIO
======================================== */

if(isset($_POST["idusuario"])){

    $editar = new AjaxUsuarios();
    $editar->idUsuario = $_POST["idUsuario"];
    $editar->ajaxEditarUsuario();

}

/* ========================================
ACTIVAR USAURIO
======================================== */

if(isset($_POST["activarUsuario"])){
    $activarUsuario = new AjaxUsuarios();
    $activarUsuario->activarUsuario = $_POST["activarUsuario"];
    $activarUsuario->activarId = $_POST["activarId"];
    $activarUsuario->ajaxActivarUsuario();
}

?>