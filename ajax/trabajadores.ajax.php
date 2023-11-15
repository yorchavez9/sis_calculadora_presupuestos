<?php

require_once "../controladores/trabajadores.controlador.php";
require_once "../modelos/trabajadores.modelo.php";

class AjaxTrabajador{

	/*=============================================
	EDITAR TRABAJADOR
	=============================================*/	

	public $idTrabajador;

	public function ajaxEditarTrabajador(){

		$item = "id_trabajador";
		$valor = $this->idTrabajador;

		$respuesta = ControladorTrabajadores::ctrMostrarTrabajadores($item, $valor);

		echo json_encode($respuesta);

	}

}

/*=============================================
EDITATRABAJADOR
=============================================*/
if(isset($_POST["idTrabajador"])){

	$editar = new AjaxTrabajador();
	$editar -> idTrabajador = $_POST["idTrabajador"];
	$editar -> ajaxEditarTrabajador();

}
