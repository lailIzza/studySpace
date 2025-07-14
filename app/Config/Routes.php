<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//$routes->get('/', 'Home::index');

// Beranda + detail
$routes->get('/', 'Postingan::beranda');
$routes->get('detail/(:num)', 'Postingan::detail/$1');
$routes->get('kategori/(:num)', 'Postingan::filterKategori/$1');

// Hanya bisa diakses jika login
$routes->get('/buat', 'Postingan::buat', ['filter' => 'auth']);
$routes->post('postingan/simpan', 'Postingan::store');
$routes->post('komentar/simpan', 'Komentar::simpan');
$routes->post('like/toggle', 'Like::toggle');
$routes->get('search', 'Postingan::search');
$routes->get('/pengumuman', 'Pengumuman::pengumuman', ['filter' => 'auth']);
$routes->get('/profil', 'User::profil', ['filter' => 'auth']);
$routes->get('user/edit', 'User::edit');
$routes->post('user/update', 'User::update');
$routes->get('user/profil', 'User::profil');

// Auth routes
$routes->get('/login', 'Auth::login');
$routes->get('/daftar', 'Auth::daftar');

$routes->post('register/process', 'Auth::processRegister');
$routes->post('login/process', 'Auth::processLogin');
$routes->get('logout', 'Auth::logout');


//Admin 
$routes->get('dashboard', 'Admin::dashboard');