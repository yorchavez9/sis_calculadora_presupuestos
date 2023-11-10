<?php

/*===== CONSTROLADORES =====*/

require_once "controladores/plantilla.controlador.php";
require_once "controladores/usuarios.controlador.php";


/*===== MODELOS =====*/
require_once "modelos/usuarios.modelo.php";

/*===== INSTANCIA DE PLANTILLA =====*/

$plantilla = new ControladorPlantilla();
$plantilla->ctrPlantilla();