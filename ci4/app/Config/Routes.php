<?php

use CodeIgniter\Router\RouteCollection;
use CodeIgniter\Router\Route;

/**
 * @var RouteCollection $routes
 */

// Mengaktifkan fitur Auto Routing
$routes->setAutoRoute(false);

// Routing untuk halaman utama
$routes->get('/', 'Home::index');

// Routing untuk halaman Page
$routes->get('/contact', 'Page::contact');
$routes->get('/faqs', 'Page::faqs');
$routes->get('/tos', 'Page::tos');
$routes->get('/about', 'Artikel::about');
$routes->get('/artikel', 'Artikel::index');
$routes->get('/artikel/(:any)', 'Artikel::view/$1');

// Routing untuk admin
$routes->group('admin', function($routes) {
    // Menampilkan daftar artikel
    $routes->get('artikel', 'Artikel::admin_index'); 

    // Menambahkan artikel
    $routes->add('artikel/add', 'Artikel::add');  

    // Mengedit artikel berdasarkan ID numerik
    $routes->get('artikel/edit/(:num)', 'Artikel::edit/$1'); 

    // Menghapus artikel berdasarkan ID atau slug
    $routes->get('artikel/delete/(:any)', 'Artikel::delete/$1'); 
});
