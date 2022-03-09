<?php

class Controller
{
    public function __construct()
    {
        $this->view = new View();
    }

    public function load_model($model)
    {
        $url_model = constant('dir_app') . 'models/' . $model . '_model.php';
        if (file_exists($url_model)) {
            require_once $url_model;
            $modelName = $model . '_model';
            $this->model = new $modelName();
        }
    }

    public function load_helper($helper)
    {
        $url_helper = constant('dir_app') . 'helpers/' . $helper . '_helper.php';
        if (file_exists($url_helper)) {
            require_once $url_helper;
            $class_name = ucfirst($helper) . "_helper";
            $this->$helper = new $class_name();
        }
    }
    public function redirect($url)
    {
        return header('Location: ' . $url);
    }

    public function response($data, $continue = false)
    {
        echo json_encode($data);
        if (!$continue) {
            exit;
        }
    }

    public function view_array($array)
    {
        echo "<pre>";
        print_r($array);
        echo "</pre>";
    }

    public function get($param)
    {
        return $_GET[$param];
    }

    public function post($param)
    {
        return $_POST[$param];
    }

    public function start_session()
    {
        $this->session = new Session();
        $this->session->start_session();
    }
}
