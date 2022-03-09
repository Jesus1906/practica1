<?php

class Model_fns
{

    public function __construct()
    {
        $this->db = new Database_fns();
    }

    public function get_item($sql, $data = null)
    {
        try {
            $this->db->_query($sql);
            $this->_bind($data);
            $this->db->execute();
            return $this->db->get_item();
        } catch (PDOException $e) {
            if (!constant ('PRODUCTION')) {
                print_r("¡Error al traer el dato!: " . $e->getMessage());
            }
            $this->db->close();
            return false;
        }
    }

    public function get_items($sql, $data = null)
    {
        try {
            $this->db->_query($sql);
            $this->_bind($data);
            $this->db->execute();
            return $this->db->get_items();
        } catch (PDOException $e) {
            if (!constant ('PRODUCTION')) {
                print_r("¡Error al traer los datos:! " . $e->getMessage());
            }
            $this->db->close();
            return false;
        }
    }

    public function insert_items($sql, $data = null)
    {
        try {
            $this->db->_query($sql);
            $this->_bind($data);
            $this->db->execute();
            return $this->db->last_id();
        } catch (PDOException $e) {
            if (!constant ('PRODUCTION')) {
                print_r("¡Error al insertar los datos:! " . $e->getMessage());
            }
            $this->db->close();
            return false;
        }
    }

    public function update_items($sql, $data = null)
    {
        try {
            $this->db->_query($sql);
            $this->_bind($data);
            $this->db->execute();
            return true;
        } catch (PDOException $e) {
            if (!constant ('PRODUCTION')) {
                print_r("¡Error al actualizar los datos:! " . $e->getMessage());
            }
            $this->db->close();
            return false;
        }
    }

    private function _bind($data)
    {
        if (!is_null($data)) {
            if (is_array($data)) {
                $i = 1;
                foreach ($data as $value) {
                    $this->db->bind($i, $value);
                    $i++;
                }
            } else {
                $this->db->bind(1, $data);
            }
        }
    }
}
