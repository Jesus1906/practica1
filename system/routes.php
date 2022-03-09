<?php

class Routes
{
    function __construct()
    {
        $url = isset($_GET['url']) ? $_GET['url'] : 'main';
        $url = rtrim($url, '/');
        $url = explode('/', $url);
        $this->_routes($url);
    }

    private function _routes($url)
    {
        $archivoController = constant('dir_app') . 'controllers/' . $url[0] . '.php';
        if ($this->_exists_file($archivoController)) {
            require_once $archivoController;
            $controller = new $url[0];
            if ($this->_is_method($url)) {
                $this->_validar_method($url, $controller);
            } else {
                $controller->index();
            }
        } else {
            $this->_errors("El recurso no existe");
        }
    }

    private function _validar_method($url, $controller)
    {
        if ($this->_exists_method($url, $controller)) {
            if ($this->_is_param($url)) {
                $this->_load_method_with_params($url, $controller);
            } else {
                $controller->{$url[1]}();
            }
        } else {
            $this->_errors("El metodo no existe");
        }
    }

    function _load_method_with_params($url, $controller)
    {
        $nparam = sizeof($url);
        $param = [];
        for ($i = 2; $i < $nparam; $i++) {
            array_push($param, $url[$i]);
        }
        $controller->{$url[1]}($param);
    }

    private function _exists_file($archivoController)
    {
        if (file_exists($archivoController)) {
            return true;
        } else {
            return false;
        }
    }

    private function _is_method($url)
    {
        if (!empty($url[1])) {
            return true;
        } else {
            return false;
        }
    }

    private function _exists_method($url, $controller)
    {
        if (method_exists($controller, $url[1])) {
            return true;
        } else {
            return false;
        }
    }

    private function _is_param($url)
    {
        $nparam = sizeof($url);
        if ($nparam > 2) {
            return true;
        } else {
            return false;
        }
    }

    private function _errors($error)
    {
        require_once constant('dir_app') . 'controllers/errors.php';
        $controller = new Errors($error);
        $controller->render();
    }
}
