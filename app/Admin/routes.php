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
    $router->resource('teams', TeamController::class);
    $router->resource('job-circulars', JobCircularController::class);
    $router->resource('cv', CvController::class);
    $router->resource('faq', FaqController::class);
    $router->resource('csr', CsrController::class);
    $router->resource('clients', ClientController::class);
    $router->resource('acheivements', AcheivementController::class);
    $router->resource('about-founders', AboutFounderController::class);
    $router->resource('carosels', CaroselController::class);
    $router->resource('about_us', AboutUsController::class);
    $router->resource('product_category', ProductCategoryController::class);
    $router->resource('capacity_type', CapacityTypeController::class);
    $router->resource('portfolio', PortfolioController::class);
});
