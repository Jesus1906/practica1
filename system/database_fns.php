<?php

class Database_fns extends Database
{
    private $stmt;
    private $conn;

    public function __construct()
    {
        parent::__construct();
    }

    public function _query($sql)
    {
        $this->conn = $this->conexion();
        $this->stmt = $this->conn->prepare($sql);
    }

    public function execute()
    {
        return $this->stmt->execute();
    }

    public function get_item()
    {
        $this->execute();
        $item = $this->stmt->fetch(PDO::FETCH_ASSOC);
        $this->close();
        return $item;
    }

    public function get_items()
    {
        $this->execute();
        $items = $this->stmt->fetchAll(PDO::FETCH_ASSOC);
        $this->close();
        return $items;
    }

    public function last_id()
    {
        $last_id = $this->conn->lastInsertId();
        $this->close();
        return $last_id;
    }

    public function close()
    {
        $this->stmt = null;
        $this->conn = null;
    }

    public function bind($param, $valor, $tipo = null)
    {
        if (is_null($tipo)) {
            if (is_int($valor)) {
                $tipo = PDO::PARAM_INT;
            } elseif (is_bool($valor)) {
                $tipo = PDO::PARAM_BOOL;
            } elseif (is_null($valor)) {
                $tipo = PDO::PARAM_NULL;
            } else {
                $tipo = PDO::PARAM_STR;
            }
        }
        $this->stmt->bindValue($param, $valor, $tipo);
    }
}
