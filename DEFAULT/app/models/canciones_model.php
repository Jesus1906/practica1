<?php

class Canciones_model extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function get_all_artistas()
    {
        $sql = 'SELECT id,artista';
        $sql .= ' FROM artistas';
        $users = $this->db->get_items($sql);
        return $users;
    }

    public function get_all_albums_by_artista_id($data)
    {
        $sql = 'SELECT id,album, anio';
        $sql .= ' FROM albums';
        $sql .= ' WHERE artista_id = ?';
        $users = $this->db->get_items($sql,$data);
        return $users;
    }

    public function get_all_canciones_by_album_id($data)
    {
        $sql = 'SELECT cancion, duracion';
        $sql .= ' FROM canciones';
        $sql .= ' WHERE albums_id = ?';
        $users = $this->db->get_items($sql,$data);
        return $users;
    }

    // public function get_user_by_id($data)
    // {
    //     $sql = 'SELECT name, ap_paterno';
    //     $sql .= ' FROM usaurios';
    //     $sql .= ' WHERE user_id = ?';
    //     $users = $this->db->get_items($sql, $data);
    //     return $users;
    // }

}
