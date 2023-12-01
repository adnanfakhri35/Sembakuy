<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$routes->get('/', 'Dashboard::index');
$routes->get('/excels','Excels::basic');

$routes->get('/pdf', 'PdfController::index');
$routes->get('/pdf/generate', 'PdfController::generate');

$routes->group('', function($routes){
    $routes->get('/sembako', 'SembakoController::index');
    $routes->add('/sembako', 'SembakoController::create');
    $routes->add('sembako/edit/(:segment)', 'SembakoController::edit/$1');
    $routes->get('sembako/delete/(:segment)', 'SembakoController::delete/$1');
    $routes->post('/excels/export/sembako', 'SembakoController::export');
});

$routes->group('', function($routes){
    $routes->get('/konsumen', 'KonsumenController::index');
    $routes->add('/konsumen', 'KonsumenController::create');
    $routes->add('konsumen/edit/(:segment)', 'KonsumenController::edit/$1');
    $routes->get('konsumen/delete/(:segment)', 'KonsumenController::delete/$1');
    $routes->post('/excels/export/konsumen', 'KonsumenController::export');
});

$routes->group('', function($routes){
    $routes->get('/penjual', 'PenjualController::index');
    $routes->add('/penjual', 'PenjualController::create');
    $routes->add('penjual/edit/(:segment)', 'PenjualController::edit/$1');
    $routes->get('penjual/delete/(:segment)', 'PenjualController::delete/$1');
    $routes->post('/excels/export/penjual', 'PenjualController::export');
});

$routes->group('', function($routes){
    $routes->get('/domisili', 'DomisiliController::index');
    $routes->add('/domisili', 'DomisiliController::create');
    $routes->add('domisili/edit/(:segment)', 'DomisiliController::edit/$1');
    $routes->get('domisili/delete/(:segment)', 'DomisiliController::delete/$1');
    $routes->post('/excels/export/domisili', 'DomisiliController::export');
});