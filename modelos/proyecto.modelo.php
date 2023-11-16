<?php

require_once "conexion.php";

class ModeloProyecto{

    /* ===========================================
    MOSTRAR PROYECTO
    =========================================== */

	static public function mdlMostrarProyectos($tablaP, $tablaM, $item, $valor){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tablaP INNER JOIN $tablaM ON $tablaP.id_proveedor = $tablaM.id_proveedor WHERE $item = :$item");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tablaP INNER JOIN $tablaM ON $tablaP.id_proveedor = $tablaM.id_proveedor");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}
		
		$stmt = null;

	}

    /* ===========================================
    REGISTRAR PROYECTO
    =========================================== */

	static public function mdlIngresarProyecto($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(
                                                                    id_cliente, 
                                                                    nombre_proyecto, 
                                                                    ubicacion_proyecto,	
                                                                    fecha_proyecto,	
                                                                    descri_proyecto) 
                                                                    VALUES (
                                                                        :id_cliente, 
                                                                        :nombre_proyecto, 
                                                                        :ubicacion_proyecto,	
                                                                        :fecha_proyecto, 
                                                                        :descri_proyecto
                                                                        )");

		$stmt->bindParam(":id_cliente", $datos["id_cliente"], PDO::PARAM_INT);
		$stmt->bindParam(":nombre_proyecto", $datos["nombre_proyecto"], PDO::PARAM_STR);
		$stmt->bindParam(":ubicacion_proyecto", $datos["ubicacion_proyecto"], PDO::PARAM_STR);
		$stmt->bindParam(":fecha_proyecto", $datos["fecha_proyecto"], PDO::PARAM_STR);
		$stmt->bindParam(":descri_proyecto", $datos["descri_proyecto"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";	

		}else{

			return "error";
		
		}

		
		$stmt = null;

	}

    /* ===========================================
    EDITAR PROYECTO
    =========================================== */

    static public function mdlEditarProyecto($tabla, $datos){

        $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET 
                                                            id_proveedor = :id_proveedor, 
                                                            nombre_material = :nombre_material, 
                                                            tipo_material = :tipo_material, 
                                                            marca_material = :marca_material, 
                                                            cantidad_material = :cantidad_material, 
                                                            precio_compra_material = :precio_compra_material, 
                                                            precio_venta_material = :precio_venta_material 
                                                            WHERE id_material = :id_material");

        $stmt->bindParam(":id_proveedor", $datos["id_proveedor"], PDO::PARAM_INT);
        $stmt->bindParam(":nombre_material", $datos["nombre_material"], PDO::PARAM_STR);
        $stmt->bindParam(":tipo_material", $datos["tipo_material"], PDO::PARAM_STR);
        $stmt->bindParam(":marca_material", $datos["marca_material"], PDO::PARAM_STR);
        $stmt->bindParam(":cantidad_material", $datos["cantidad_material"], PDO::PARAM_INT);
        $stmt->bindParam(":precio_compra_material", $datos["precio_compra_material"], PDO::PARAM_STR);
        $stmt->bindParam(":precio_venta_material", $datos["precio_venta_material"], PDO::PARAM_STR);
        $stmt->bindParam(":id_material", $datos["id_material"], PDO::PARAM_INT);

        if($stmt->execute()){
            return "ok";
        }else{
            return "error";
        }

        $stmt = null;

    }


    /* ===========================================
    BORRAR PROYECTO
    =========================================== */

    static public function mdlBorrarProyecto($tabla, $datos){

        $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_material = :id_material");
        $stmt->bindParam(":id_material",$datos, PDO::PARAM_INT);

        if($stmt->execute()){
            return "ok";
        }else{
            return "error";
        }

        $stmt=null;

    }


}