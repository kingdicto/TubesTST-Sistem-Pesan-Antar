<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'RekomendasiAPI::index');
// $routes->add('/about', 'Home::about');
$routes->get('/pages', 'Pages::index');
$routes->get('/menu/index', 'Menu::index');
$routes->get('/order', 'OrderController::index');
$routes->get('/orderAPI', 'OrderAPI::index');
$routes->get('/dbrestoranAPI', 'DbrestoranAPI::index');
$routes->get('/insightAPI', 'InsightAPI::index');
// $routes->get('/rekomendasi', 'RekomendasiAPI::index');
$routes->get('/login', 'LoginController::index');
$routes->get('/logout', 'LoginController::logout');
$routes->post('/login_action', 'LoginController::login_action');

