<?php

class Database extends PDO
{

    private $tipo_de_base;
    private $host;
    private $db;
    private $usuario;
    private $contrasena;
    private $charset;

    public function __construct()
    {
        $this->tipo_de_base = constant('TIPO');
        $this->host = constant('HOST');
        $this->db = constant('DB');
        $this->usuario = constant('USER');
        $this->contrasena = constant('PASSWORD');
        $this->charset = constant('CHARSET');
    }

    public function conexion()
    {
        try {
            $connection = $this->tipo_de_base . ":host=" . $this->host . ";dbname=" . $this->db . ";charset=" . $this->charset;
            $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES   => false
            ];
            $db = new PDO($connection, $this->usuario, $this->contrasena, $options);
            return $db;
        } catch (PDOException $e) {
            if (!constant('PRODUCTION') ) {
                print_r('Error en la conexion a la base de datos: ' . $e->getMessage());
            }
        }
    }
}
