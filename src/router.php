<?php
define('APP_ROOT_URL', str_replace('/index.php', '', $_SERVER['SCRIPT_NAME']));

// traiter les différentes routes
$url = parse_url($_SERVER['REQUEST_URI']);
$route = trim(str_replace(APP_ROOT_URL, '', $url['path']));

// correction pour ajouter le / terminal (s'il est manquant)
$route = $route === '' ? '/' : $route;
switch ($route) {
    default:
        require 'page/index.php';
        break;
    case '/index':
    case '/home':
    case '/':
        require 'page/index.php';
        break;
    case '/websites':
    case '/website':
        require 'page/websites.php';
        break;
    case '/illustrations':
    case '/illustration':
        require 'page/illustrations.php';
        break;
}
