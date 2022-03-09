<?php

class Main extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load_model('canciones');
    }

    public function index()
    {
        $this->view->render('main/main');
    }

    public function get_all_artistas(){
        $artistas = $this->model->get_all_artistas();
        $this->response(['artistas'=>$artistas]);
    }

    public function get_all_albums_by_artista_id(){
       
        $albums = $this->model->get_all_albums_by_artista_id($this->get('artista_id'));
        $this->response(['albums'=>$albums]);
    }

    public function get_all_canciones_by_album_id(){
        $canciones = $this->model->get_all_canciones_by_album_id($this->get('albums_id'));
        $this->response(['canciones'=>$canciones]);
    }

    public function get_all_info()
    {
        $data = $this->model->get_all_artistas();
        foreach ($data as &$artista) { //& agrega los arreglos y/o datos hijos
            $artista['albums'] = $this->model->get_all_albums_by_artista_id($artista['id']);
            foreach($artista['albums'] as &$album){
                $album['canciones'] = $this->model->get_all_canciones_by_album_id($album['id']);
            }
        }
        $this->response(['artistas' => $data]);
         // $this->view_array($data);
        // echo($data[0]['albums'][1]['canciones'][1]['cancion']);
        // echo($data[0]['albums'][1]['album']);
    }

}
