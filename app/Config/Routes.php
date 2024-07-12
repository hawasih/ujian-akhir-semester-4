<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Dosen::index');
$routes->get('/notifikasi/dosen-tidak-masuk/(:num)', 'Notifikasi::dosenTidakMasuk/$1');
$routes->get('/notifikasi/dosen-masuk/(:num)', 'Notifikasi::dosenMasuk/$1');
