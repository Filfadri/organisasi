<?php

namespace Config;

use CodeIgniter\Config\BaseRoutes;

$routes = Services::routes();

// Default Home
$routes->get('/', 'Organisasi::index');

// Rute untuk halaman utama Organisasi
$routes->get('/organisasi', 'Organisasi::index');

// Rute untuk menampilkan form tambah data
$routes->get('/organisasi/add', 'Organisasi::add');

// Rute untuk menyimpan data baru
$routes->post('/organisasi/save', 'Organisasi::save');

// Rute untuk melihat detail anggota organisasi
$routes->get('/organisasi/detail/(:num)', 'Organisasi::detail/$1');

// Rute untuk menampilkan form edit
$routes->get('/organisasi/edit/(:num)', 'Organisasi::edit/$1');

// Rute untuk memperbarui data organisasi
$routes->post('/organisasi/update/(:num)', 'Organisasi::update/$1');

// Rute untuk menghapus data organisasi
$routes->get('/organisasi/delete/(:num)', 'Organisasi::delete/$1');

$routes->get('/home', function() {
    return view('home');  // Langsung mengarah ke view 'home.php' yang ada di dalam folder 'app/Views'
});