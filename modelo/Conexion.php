<?php

namespace modelo;

class Conexion
{
    public static $user = "ulm4l5swki0hwcha";
    public static $pass = "009fuXN7wWhk06knzs9E";
    public static $URL = "mysql:host=lbnzijwm0kgzvfe4lamqr-mysql.services.clever-cloud.com;dbname=bnzijwm0kgzvfe4lamqr";

    public static function conector()
    {
        try {
            return new \PDO(Conexion::$URL, Conexion::$user, Conexion::$pass);
        } catch (\PDOException $e) {
            return null;
        }
    }
}
