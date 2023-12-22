<?php

class Conexion{
    static public function conectar(){
        $link = new PDO("mysql:host=localhost;dbname=sis_presupuesto",
                        "root",
                        "");
        $link->exec("set names utf8");
        if(!$link){
            return "No se realizo la conexion a la base de datos";
        }else{
            return $link;
        }
        
    }
}