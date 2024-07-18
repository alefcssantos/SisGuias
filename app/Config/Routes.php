<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Sale::index');

// User controller
$routes->get('/usuarios','Users::index');
$routes->get('/usuarios/pesquisar','Users::index');
$routes->get('/usuarios/pesquisar/(:any)', 'Users::read/$1');
$routes->post('usuarios/cadastrar', 'Users::create');
$routes->get('/usuarios/excluir/(:num)', 'Users::delete/$1');
$routes->post('usuarios/editar', 'Users::edit');

// Login controller
$routes->get('/login','Login::index');
$routes->post('/login/autenticar','Login::authentication');
$routes->get('/logout','Login::logout');

// Products controller
$routes->get('/produtos','Products::list');
$routes->get('/produtos/(:any)', 'Products::list/$1');
$routes->post('/produtos/cadastrar', 'Products::create');
$routes->get('/produtos/excluir/(:num)', 'Products::delete/$1');
$routes->post('/produtos/editar', 'Products::edit');

// Calendary controller
$routes->get('/calendario','Calendary::index');
$routes->post('/calendario/cadastrar','Calendary::create');
$routes->get('/calendario/listar','Calendary::read');
$routes->post('/calendario/atualizar','Calendary::edit');
$routes->post('/calendario/excluir','Calendary::delete');

// Company controller
$routes->get('/empresas','Company::index');

//Software controller
$routes->get('/sistemas','Software::index');

//Sale controller
$routes->get('/frentecaixa', 'Sale::index');
//Ajax Sale controller
$routes->get('/frentecaixa/produtos', 'Sale::searchProducts');
$routes->get('/frentecaixa/produtos/(:any)', 'Sale::searchProducts/$1');
