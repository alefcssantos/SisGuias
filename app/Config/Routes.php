<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Login::index');

// Rotas do controller Login
$routes->get('/login','Login::index');
$routes->post('/login/autenticar','Login::login');
// Rotas do controller Produto
$routes->get('/produtos/lista','Products::list');
$routes->get('/produtos/lista/(:any)', 'Products::list/$1');
$routes->post('/produtos/cadastrar', 'Products::create');
$routes->get('/produtos/excluir/(:num)', 'Products::delete/$1');
$routes->post('/produtos/editar', 'Products::edit');
