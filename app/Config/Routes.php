<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
// $routes->get('/update/(:any)', 'Home::update/$1');
// $routes->get('/pelicula', 'Pelicula::index');

$routes->group('dashboard', function ($routes) {
    $routes->presenter('pelicula', ['controller' => 'Dashboard\Pelicula']);
    // $routes->presenter('categoria', ['only' =>['index','new','create']]);
    // $routes->presenter('categoria', ['except' =>['show','update']]);
    $routes->presenter('categoria', ['controller' => 'Dashboard\Categoria']);
});


// ruta de ejemplo
// $routes->get('/codeignater4', 'Home::reto');
