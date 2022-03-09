<?php

class Example_model extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    // public function get_all_users()
    // {
    //     $sql = 'SELECT name, ap_paterno';
    //     $sql .= ' FROM usaurios';
    //     $users = $this->db->get_items($sql);
    //     return $users;
    // }

    // public function get_user_by_id($data)
    // {
    //     $sql = 'SELECT name, ap_paterno';
    //     $sql .= ' FROM usaurios';
    //     $sql .= ' WHERE user_id = ?';
    //     $users = $this->db->get_items($sql, $data);
    //     return $users;
    // }

}
