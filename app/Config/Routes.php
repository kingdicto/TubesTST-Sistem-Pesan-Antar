<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Pages::index');
$routes->add('/about', 'Home::about');
$routes->get('/pages', 'Pages::index');
$routes->get('/pages/trackOrder', 'Pages::trackOrder');
$routes->get('/menu/index', 'Menu::index');