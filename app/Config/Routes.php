<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'GuiaReferenciaController::index');

// User controller
$routes->get('/usuarios', 'Users::index');
$routes->get('/usuarios/pesquisar', 'Users::index');
$routes->get('/usuarios/pesquisar/(:any)', 'Users::read/$1');
$routes->post('usuarios/cadastrar', 'Users::create');
$routes->get('/usuarios/excluir/(:num)', 'Users::delete/$1');
$routes->post('usuarios/editar', 'Users::edit');

// Login controller
$routes->get('/login', 'Login::index');
$routes->post('/login/autenticar', 'Login::authentication');
$routes->get('/logout', 'Login::logout');

//Ajax Sale controller
$routes->get('/frentecaixa/produtos', 'Sale::searchProducts');
$routes->get('/frentecaixa/produtos/(:any)', 'Sale::searchProducts/$1');

$routes->get('/frentecaixa/comandas/pesquisar', 'Sale::searchOrderTicket');
$routes->get('/frentecaixa/comandas/pesquisar/(:any)', 'Sale::searchOrderTicket/$1');

$routes->post('/frentecaixa/comandas/cadastrar', 'Sale::createOrderTicket');

$routes->get('/frentecaixa/produtovenda/listar', 'Sale::listProductOrder');
$routes->get('/frentecaixa/produtovenda/listar/(:any)', 'Sale::listProductOrder/$1');

$routes->get('/frentecaixa/produtovenda/inserir', 'Sale::createProductOrder');

// GuiaReferencia
$routes->get('/filas', 'GuiaReferenciaController::filas');
$routes->get('/minhasguias', 'GuiaReferenciaController::minhasguias');
$routes->get('/cadastrar', 'GuiaReferenciaController::cadastro');
$routes->get('/triagem/lista', 'GuiaReferenciaController::triagemLista');
$routes->post('/paciente/cadastrar', 'GuiaReferenciaController::cadastrarPaciente');