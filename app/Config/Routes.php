<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->group("api", function ($routes) {
    $routes->post("register", "Register::index");
    $routes->post("login", "Login::index");
  
    $routes->get('workouts', 'WorkoutsController::index_get');

    $routes->post('workouts', 'WorkoutsController::index_post');

    $routes->get("users", "User::index", ['filter' => 'authFilter']);
});


