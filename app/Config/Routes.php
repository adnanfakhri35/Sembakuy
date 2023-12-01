<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$routes->get('/','Page::home');
$routes->get('/tentangKami','Page::tentangKami');
$routes->get('/bantuan','Page::bantuan');
$routes->get('/home','Page::home');
$routes->get('/register','Register::index');
$routes->post('/register/process','Register::process');
$routes->get('/registerSukses','Register::sukses');
$routes->post('/login/process','Login::process');
$routes->get('/homeAfterLogin','Page::login');
$routes->get('/login','Login::index');
$routes->get('/peta','Page::peta');
$routes->get('/cari','Page::cari');
$routes->get('/detailPasar','Page::detailPasar');