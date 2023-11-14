<?php

/*===== CONSTROLADORES =====*/

require_once "controladores/plantilla.controlador.php";
require_once "controladores/usuarios.controlador.php";
require_once "controladores/proveedores.controlador.php";
require_once "controladores/materiales.controladore.php";


/*===== MODELOS =====*/
require_once "modelos/usuarios.modelo.php";
require_once "modelos/proveedores.modelo.php";
require_once "modelos/materiales.modelo.php";

/*===== INSTANCIA DE PLANTILLA =====*/

$plantilla = new ControladorPlantilla();
$plantilla->ctrPlantilla();