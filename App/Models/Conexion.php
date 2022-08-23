<?php
namespace App\Models;
use PDO;
use PDOException;

class Conexion{
    protected $server = "127.0.0.1:33066";
    protected $user = "root";
    protected $password = "";
    protected $conexion;
    public function __construct()
    {
        try {
            $this->conexion = new PDO("mysql:host=$this->server;dbname=distribuidores_bd",$this->user,$this->password);
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $err) {
            echo "CONEXION AFECTADA".$err;
        }
    }
}
?>