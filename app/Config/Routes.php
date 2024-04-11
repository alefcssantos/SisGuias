<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');
$routes->get('/produtos/lista', 'Products::list');
$routes->post('/produtos/cadastrar', 'Products::create');
