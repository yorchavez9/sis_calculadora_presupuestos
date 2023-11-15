<?php

/*===== CONSTROLADORES =====*/

require_once "controladores/plantilla.controlador.php";
require_once "controladores/usuarios.controlador.php";
require_once "controladores/proveedores.controlador.php";
require_once "controladores/materiales.controlador.php";
require_once "controladores/trabajadores.controlador.php";
require_once "controladores/equipos.maquinas.controlador.php";
require_once "controladores/clientes.controlador.php";

/*===== MODELOS =====*/
require_once "modelos/usuarios.modelo.php";
require_once "modelos/proveedores.modelo.php";
require_once "modelos/materiales.modelo.php";
require_once "modelos/trabajadores.modelo.php";
require_once "modelos/equipos.maquinas.modelo.php";
require_once "modelos/clientes.modelo.php";

/*===== INSTANCIA DE PLANTILLA =====*/

$plantilla = new ControladorPlantilla();
$plantilla->ctrPlantilla();