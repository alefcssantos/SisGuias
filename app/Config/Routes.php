<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Products::list');

// Rotas do controller Login
$routes->get('/login','Login::index');
$routes->post('/login/autenticar','Login::authentication');
$routes->get('/login/logout','Login::logout');
// Rotas do controller Produto
$routes->get('/produtos','Products::list');
$routes->get('/produtos/(:any)', 'Products::list/$1');
$routes->post('/produtos/cadastrar', 'Products::create');
$routes->get('/produtos/excluir/(:num)', 'Products::delete/$1');
$routes->post('/produtos/editar', 'Products::edit');
