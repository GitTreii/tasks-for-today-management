<?php

use CodeIgniter\Router\RouteCollection;

$routes->get('/', 'Tasks::index');
$routes->get('/tasks', 'Tasks::list');
$routes->get('/profile', 'Users::index');
$routes->get('/about', 'Pages::about');