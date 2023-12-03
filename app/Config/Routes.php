<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/dashboard', 'Home::index');

$routes->get('/', 'Auth::index'); #form Login
$routes->get('/regist', 'Auth::regist'); # form Registrasi
