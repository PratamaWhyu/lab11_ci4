<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/about', 'Page::about');
$routes->get('/contact', 'Page::contact');
$routes->get('/faqs', 'Page::faqs');
$routes->get('/artikel', 'Artikel::index');
$routes->get('/artikel/(:any)', 'Artikel::view/$1');

$routes->group('admin', ['filter' => 'auth'], function($routes) {
    $routes->get('artikel', 'Artikel::admin_index');
    $routes->add('artikel/add', 'Artikel::add');
    $routes->add('artikel/edit/(:num)', 'Artikel::edit/$1');
    // ubah dari GET menjadi POST, dan dukung spoof method
    $routes->delete('artikel/delete/(:num)', 'Artikel::delete/$1');
});


$routes->get('user/login', 'User::login');
$routes->post('user/login', 'User::login');
$routes->get('user/logout', 'User::logout');

$routes->resource('post');
