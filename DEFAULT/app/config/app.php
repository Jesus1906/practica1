<?php
require_once 'config.php';
require_once constant('dir_system') . 'database.php';
require_once constant('dir_system') . 'database_fns.php';
require_once 'session.php';
require_once constant('dir_system') . 'helpers.php';
require_once constant('dir_system') . 'controller.php';
require_once constant('dir_system') . 'model_fns.php';
require_once constant('dir_system') . 'model.php';
require_once constant('dir_system') . 'view.php';
require_once constant('dir_system') . 'routes.php';

$app = new Routes();
