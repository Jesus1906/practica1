<?php
class View
{
    function render($nombre, $data = null)
    {
        $url = rtrim($nombre, '/');
        $url = explode('/', $url);
        if (count($url) > 1) {
            if ($url[count($url) - 1] == 'index') {
                include_once constant('dir_app') . 'views/' . $nombre . '.php';
            } else {
                include_once constant('dir_app') . 'views/' . $nombre . '_view.php';
            }
        } else {
            include_once constant('dir_app') . 'views/' . $nombre . '_view.php';
        }
    }
}
