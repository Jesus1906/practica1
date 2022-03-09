<?php
class Session
{

    public function start_session()
    {
        session_name('honestidad_mini');
        session_start();
    }

    public function set_user($data, $key = null)
    {
        if (!empty($key)) {
            $_SESSION['user'][$key] = $data;
        } else {
            $_SESSION['user'] = [
                'id' => $data['usuario_id'],
                'user' => $data['usuario_login'],
                'version' => $data['usuario_examen'],
                'factor_index' => $data['usuario_pagina'],
                'ultima' => $data['usuario_subpagina'],
            ];
        }
    }

    public function get_user($key = null)
    {
        if (empty($key)) {
            return $_SESSION['user'];
        } else {
            return $_SESSION['user'][$key];
        }
    }

    public function set_test_by_user($data, $key = null)
    {
        if (!empty($key)) {
            $_SESSION['test'][$key] = $data;
        } else {
            $_SESSION['test'] = [
                'last_factor' => $data[0],
                'factor_index' => $data[1],
                'ultima_factor' => $data[2],
                'ultima_usuario' => $data[3]
            ];
        }
    }

    public function get_test_by_user($key = null)
    {
        if (empty($key)) {
            return $_SESSION['test'];
        } else {
            return $_SESSION['test'][$key];
        }
    }

    public function close_session()
    {
        session_unset();
        session_destroy();
        return header('Location: ' . constant('base_url'));
    }
}
