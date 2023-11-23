<?php
require 'config.php';
require 'scripts/utils.php';

// traiter les différentes routes
$url = parse_url($_SERVER['REQUEST_URI']);
$route = trim(str_replace(APP_ROOT_URL, '', $url['path']));

// correction pour ajouter le / terminal (s'il est manquant)
$route = $route === '' ? '/' : $route;
switch ($route) {
    default:
        if (str_starts_with($route, '/website/')) {
            require 'page/website_item.php';
        } else if (str_starts_with($route, '/illustration/')) {
            require 'page/illustration_item.php';
        } else {
            require 'page/index.php';
        };
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
    case '/cgu':
    case '/tos':
    case '/termofuse':
        require 'page/cgu.php';
        break;
    case '/legal_notice':
        require 'page/legal_notice.php';
        break;
}
