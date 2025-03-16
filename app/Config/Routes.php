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

// GuiaReferencia
$routes->get('/minhasguias', 'GuiaReferenciaController::minhasguias');
$routes->get('/cadastrar', 'GuiaReferenciaController::cadastro');

// Triagem
$routes->get('/triagem/lista', 'GuiaReferenciaController::triagemLista');
$routes->post('/triagem/pesquisar', 'GuiaReferenciaController::buscarTriagem');
$routes->get('/triagem/guia', 'GuiaReferenciaController::abrirGuia');
$routes->post('/triagem/guia','GuiaReferenciaController::abrirGuia');
$routes->post('/triagem/readequar', 'GuiaReferenciaController::readequarGuia');
$routes->post('/triagem/adicionar', 'GuiaReferenciaController::adicionarFila');

// Filas
$routes->get('/filap1', 'GuiaReferenciaController::filaP1Lista');
$routes->post('/filap1/pesquisar', 'GuiaReferenciaController::buscarFilaP1');

$routes->get('/filap2', 'GuiaReferenciaController::filaP2Lista');
$routes->post('/filap2/pesquisar', 'GuiaReferenciaController::buscarFilaP2');

$routes->get('/filap3', 'GuiaReferenciaController::filaP3Lista');
$routes->post('/filap3/pesquisar', 'GuiaReferenciaController::buscarFilaP3');

// Paciente
$routes->post('/paciente/salvar', 'GuiaReferenciaController::salvarPaciente');
$routes->post('/paciente/carregar', 'GuiaReferenciaController::carregarPacienteCDR');
$routes->post('/guia/salvar', 'GuiaReferenciaController::salvarGuia');