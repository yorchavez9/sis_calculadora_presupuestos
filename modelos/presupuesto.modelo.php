<?php

require_once "conexion.php";

class ModeloPresupuesto{

    /* ===========================================
    MOSTRAR PRESUPUESTO
    =========================================== */

	static public function mdlMostrarPresupuestoSumaParcial($tablaPresM, $tablaPresT, $tablaTerreno, $tablaPres, $item, $valor){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tablaPres
                                                    INNER JOIN $tablaPresM ON $tablaPres.id_pres_mat = $tablaPresM.id_pres_mat
                                                    INNER JOIN $tablaPresT ON $tablaPres.id_pres_trab = $tablaPresT.id_pres_trab
                                                    INNER JOIN $tablaTerreno ON $tablaPres.id_terreno = $tablaTerreno.id_terreno
                                                    WHERE $item = :$item");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tablaPres
                                                    INNER JOIN $tablaPresM ON $tablaPres.id_pres_mat = $tablaPresM.id_pres_mat
                                                    INNER JOIN $tablaPresT ON $tablaPres.id_pres_trab = $tablaPresT.id_pres_trab
                                                    INNER JOIN $tablaTerreno ON $tablaPres.id_terreno = $tablaTerreno.id_terreno");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}
		
		$stmt = null;

	}


    /* ===========================================
    REGISTRAR PRESUPUESTO
    =========================================== */

	static public function mdlIngresarPresupuesto($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(
                                                                id_proyecto, 
                                                                porcentaje_ganancia, 
                                                                costo_parcial, 
                                                                costo_final) 
                                                                VALUES (
                                                                    :id_proyecto, 
                                                                    :porcentaje_ganancia, 
                                                                    :costo_parcial, 
                                                                    :costo_final)");

		$stmt->bindParam(":id_proyecto", $datos["id_proyecto"], PDO::PARAM_INT);
		$stmt->bindParam(":porcentaje_ganancia", $datos["porcentaje_ganancia"], PDO::PARAM_STR);
		$stmt->bindParam(":costo_parcial", $datos["costo_parcial"], PDO::PARAM_STR);
		$stmt->bindParam(":costo_final", $datos["costo_final"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";	

		}else{

			return "error";
		
		}

		
		$stmt = null;

	}


    /* ===========================================
    BORRAR PRESUPUESTO
    =========================================== */

    static public function mdlBorrarPesupuesto($tabla, $datos){

        $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_pres_trab = :id_pres_trab");
        $stmt->bindParam(":id_pres_trab",$datos, PDO::PARAM_INT);

        if($stmt->execute()){
            return "ok";
        }else{
            return "error";
        }

        $stmt=null;

    }


}