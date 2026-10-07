<?php

use CodeIgniter\Router\RouteCollection;

$routes->get('/', 'Tasks::index');
$routes->get('/tasks', 'Tasks::list');
$routes->get('/profile', 'Users::index');
$routes->get('/about', 'Pages::about');

$routes->get('/login', 'Auth::login');
$routes->post('/login', 'Auth::attempt');
$routes->get('/logout', 'Auth::logout');

$routes->get('/tasks/new', 'Tasks::new', ['filter' => 'auth']);
$routes->post('/tasks/create', 'Tasks::create', ['filter' => 'auth']);
$routes->get('/tasks/edit/(:num)', 'Tasks::edit/$1', ['filter' => 'auth']);
$routes->post('/tasks/update/(:num)', 'Tasks::update/$1', ['filter' => 'auth']);
$routes->post('/tasks/delete/(:num)', 'Tasks::delete/$1', ['filter' => 'auth']);