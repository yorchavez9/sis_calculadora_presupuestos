<?php

require_once "conexion.php";

class ModeloMateriales{

    /* ===========================================
    MOSTRAR MATERIALES
    =========================================== */

	static public function mdlMostrarMateriales($tablaP, $tablaM, $item, $valor){

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
    REGISTRAR MATERIALES
    =========================================== */

	static public function mdlIngresarMaterial($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(id_proveedor, nombre_material, tipo_material,	marca_material,	cantidad_material, precio_compra_material,	precio_venta_material) VALUES (:id_proveedor, :nombre_material, :tipo_material,	:marca_material, :cantidad_material, :precio_compra_material, :precio_venta_material)");

		$stmt->bindParam(":id_proveedor", $datos["id_proveedor"], PDO::PARAM_INT);
		$stmt->bindParam(":nombre_material", $datos["nombre_material"], PDO::PARAM_STR);
		$stmt->bindParam(":tipo_material", $datos["tipo_material"], PDO::PARAM_STR);
		$stmt->bindParam(":marca_material", $datos["marca_material"], PDO::PARAM_STR);
		$stmt->bindParam(":cantidad_material", $datos["cantidad_material"], PDO::PARAM_INT);
		$stmt->bindParam(":precio_compra_material", $datos["precio_compra_material"], PDO::PARAM_STR);
		$stmt->bindParam(":precio_venta_material", $datos["precio_venta_material"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";	

		}else{

			return "error";
		
		}

		
		$stmt = null;

	}

    /* ===========================================
    EDITAR MATERIALES
    =========================================== */

    static public function mdlEditarmaterial($tabla, $datos){

        $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre_proveedor = :nombre_proveedor, telefono_proveedor = :telefono_proveedor, correo_proveedor = :correo_proveedor, direccion_proveedor = :direccion_proveedor WHERE id_proveedor = :id_proveedor");
        $stmt->bindParam(":nombre_proveedor", $datos["nombre_proveedor"], PDO::PARAM_STR);
        $stmt->bindParam(":telefono_proveedor", $datos["telefono_proveedor"], PDO::PARAM_STR);
        $stmt->bindParam(":correo_proveedor", $datos["correo_proveedor"], PDO::PARAM_STR);
        $stmt->bindParam(":direccion_proveedor", $datos["direccion_proveedor"], PDO::PARAM_STR);
        $stmt->bindParam(":id_proveedor", $datos["id_proveedor"], PDO::PARAM_INT);

        if($stmt->execute()){
            return "ok";
        }else{
            return "error";
        }

        $stmt = null;

    }


    /* ===========================================
    BORRAR MATERIALES
    =========================================== */

    static public function mdlBorrarMaterial($tabla, $datos){

        $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_proveedor = :id_proveedor");
        $stmt->bindParam(":id_proveedor",$datos, PDO::PARAM_INT);

        if($stmt->execute()){
            return "ok";
        }else{
            return "error";
        }

        $stmt=null;

    }


}