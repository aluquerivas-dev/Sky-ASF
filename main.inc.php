<?php

require_once('vendor/autoload.php');

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Capsule\Manager as DB;
use eftec\bladeone\BladeOne;
use Illuminate\Container\Container;
use Illuminate\Events\Dispatcher;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Routing\Router;
use Illuminate\Routing\UrlGenerator;

//INIT .ENV
$dotenv = Dotenv\Dotenv::createUnsafeImmutable(__DIR__, '.config');
$dotenv->load();
$dotenv->required(['DB_HOST', 'DB_NAME', 'DB_USER', 'DEBUG_MODE'])->notEmpty();

//INIT Error reporting
if (getenv('DEBUG_MODE') === "true") {
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
    $whoops = new \Whoops\Run;
    $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
    $whoops->register();
}

//INIT ELOQUENT
$capsule = new Capsule;
$capsule->addConnection([
    "driver" => getenv('DB_DRIVER'),
    "host" => getenv('DB_HOST'),
    "database" => getenv('DB_NAME'),
    "username" => getenv('DB_USER'),
    "password" => getenv('DB_PASS')
]);
$capsule->setAsGlobal();
$res = $capsule->bootEloquent();
try {
    DB::connection()->getPdo();
} catch (\Exception $e) {
    die("Could not connect to the database.  Please check your configuration. error:" . $e);
}
//Initialize Twig
/*
$loader = new \Twig\Loader\FilesystemLoader('resources/views');
$twig = new \Twig\Environment($loader, array('auto_reload' => true, 'cache' => 'resources/cache'));*/
//INIT BLADE
$blade = new BladeOne(__DIR__ . '/resources/views', __DIR__ . '/resources/cache', getenv('DEBUG_MODE') ? BladeOne::MODE_DEBUG : BladeOne::MODE_AUTO);

//INIT ROUTING
if (getenv('USE_ADVANCED_ROUTING') === "true") {
    // Create a service container
    $container = new Container;

    // Create a request from server variables, and bind it to the container; optional
    $request = Request::capture();
    $container->instance('Illuminate\Http\Request', $request);

    // Using Illuminate/Events/Dispatcher here (not required); any implementation of
    // Illuminate/Contracts/Event/Dispatcher is acceptable
    $events = new Dispatcher($container);

    // Create the router instance
    $router = new Router($events, $container);

    // Load the routes
    require_once('routes.php');

    // Create the redirect instance
    $redirect = new Redirector(new UrlGenerator($router->getRoutes(), $request));

    // use redirect
    // return $redirect->home();
    // return $redirect->back();
    // return $redirect->to('/');

    // Dispatch the request through the router
    $response = $router->dispatch($request);

    // Send the response back to the browser
    $response->send();
}
