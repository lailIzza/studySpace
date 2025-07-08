<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//$routes->get('/', 'Home::index');

//router beranda,buat,detail,pengumuman
$routes->get('/', 'Postingan::beranda');
$routes->get('/buat', 'Postingan::buat');
$routes->get('/detail', 'Postingan::detail');
$routes->get('/pengumuman', 'Postingan::pengumuman');

//routes user profil
$routes->get('/profil', 'User::profil');

$routes->get('pertanyaan/(:num)', 'postingan::detail/$1');


//routes auth
$routes->get('/login', 'Auth::login');
$routes->get('/daftar', 'Auth::daftar');