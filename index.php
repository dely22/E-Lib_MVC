<?php



use App\Controllers\Home;
use App\System\Router;

require_once __DIR__ . '/vendor/autoload.php';

$router = new Router();

$router->get('/', [Home::class, 'index']);
$router->get('/category', [Home::class, 'category']);
$router->get('/details', [Home::class, 'detailes']);
$router->get('/checkout', [Home::class, 'checkout']);


$router->notFoundHandler(function () {
    echo "Page Not Found";
});

$router->run();
