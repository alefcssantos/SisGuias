<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Calendary::index');

// Rotas do controller User
$routes->get('/usuarios','Users::index');
$routes->get('/usuarios/pesquisar','Users::index');
$routes->get('/usuarios/pesquisar/(:any)', 'Users::read/$1');
$routes->post('usuarios/cadastrar', 'Users::create');
$routes->get('/usuarios/excluir/(:num)', 'Users::delete/$1');
$routes->post('usuarios/editar', 'Users::edit');

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

//Rotas do controller calendary
$routes->get('/calendario','Calendary::index');
$routes->post('/calendario/cadastrar','Calendary::create');
$routes->get('/calendario/listar','Calendary::read');
$routes->post('/calendario/atualizar','Calendary::edit');
