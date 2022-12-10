<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('services', ServiceController::class);
    $router->resource('products', ProductController::class);
    $router->resource('mission-and-visions', MissionAndVisionController::class);
    $router->resource('key-people', KeyPersonController::class);
    $router->resource('job-circulars', JobCircularController::class);
    $router->resource('c-vs', CvController::class);
    $router->resource('c-s-rs', CsrController::class);
    $router->resource('clients', ClientController::class);
    $router->resource('acheivements', AcheivementController::class);
    $router->resource('about-founders', AboutFounderController::class);
    $router->resource('carosels', CaroselController::class);
});
