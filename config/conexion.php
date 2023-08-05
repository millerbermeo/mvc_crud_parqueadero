<?php

    class conexion {

        static public function conectar() {
            $db = new PDO("mysql:host=localhost; dbname=db_aguacates; charset=utf8", "root", "");
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $db;
        }
    }

?>