<?php

//require_once '../app/core/init.php';
require_once '../app/core/routes.php';
$env = parse_ini_file('../.env');
require '../app/core/config.php';
require '../app/controllers/MainController.php';
require '../app/core/Database.php';
require '../app/core/Model.php';
require '../app/models/Projects.php';
require '../app/controllers/ContactController.php';

use app\core\Router;
use app\controllers\MainController;

require_once __DIR__ . '/helpers.php';
$uri = strtok($_SERVER["REQUEST_URI"], '?');

if ($uri === '/' && $_SERVER['REQUEST_METHOD'] === 'GET') {
    $mainController = new MainController();
    $mainController->homepage();
}

if ($uri === '/projects' && $_SERVER['REQUEST_METHOD'] === 'GET') {
    $mainController = new MainController();
    $mainController->projects();
}

if ($uri === '/contacts' && $_SERVER['REQUEST_METHOD'] === 'GET') {
    $mainController = new MainController();
    $mainController->contact();
}

switch ($uri) {
    case '/contact':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            (new \app\controllers\ContactController())->submitContact();
        }
        break;
}

?>

