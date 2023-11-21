<?php
define("BASE_PATH", dirname(__DIR__));

require_once BASE_PATH . '/vendor/autoload.php';


use Ryxo\Route;
use App\controllers\SiteController;
use App\controllers\AuthController;

$app = new Route();

$app->get('/', [SiteController::class, 'home']);

$app->get('/search(.*)', [AuthController::class, 'search']);

$app->run();
