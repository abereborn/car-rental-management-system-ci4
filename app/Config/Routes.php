<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Auth::login');

// ADMIN ONLY
$routes->group('', ['filter' => ['auth', 'role:admin']], function ($routes) {
    $routes->get('/mobil', 'Mobil::index');
    $routes->get('/mobil/create', 'Mobil::create');
    $routes->post('/mobil/store', 'Mobil::store');
});

$routes->group('', ['filter' => ['auth', 'role:admin']], function ($routes) {

    $routes->get('/admin/create', 'Auth::createAdmin');
    $routes->post('/admin/store', 'Auth::storeAdmin');

});

// ADMIN & CUSTOMER
$routes->group('', ['filter' => ['auth', 'role:admin,customer']], function ($routes) {
    $routes->get('/transaksi', 'Transaksi::index');
});

// PUBLIC
$routes->get('/mobil/delete/(:num)', 'Mobil::delete/$1');

$routes->get('/mobil/edit/(:num)', 'Mobil::edit/$1');
$routes->post('/mobil/update/(:num)', 'Mobil::update/$1');

$routes->get('/transaksi', 'Transaksi::index');
$routes->post('/transaksi/store', 'Transaksi::store');

// AUTHENTICATION
$routes->get('/register', 'Auth::register');
$routes->post('/register/process', 'Auth::processRegister');

$routes->get('/login', 'Auth::login');
$routes->post('/login/process', 'Auth::processLogin');

$routes->get('/logout', 'Auth::logout');

// PEMBAYARAN ADMIN
$routes->group('', ['filter' => ['auth', 'role:admin']], function ($routes) {
    $routes->get('/pembayaran-admin', 'PembayaranAdmin::index');
});

// PEMBAYARAN USER
$routes->get('pembayaran/(:num)', 'Pembayaran::index/$1');
$routes->post('pembayaran/store', 'Pembayaran::store');

//PEMINJAMAN
$routes->group('', ['filter' => ['auth', 'role:admin']], function ($routes) {
    $routes->get('/peminjaman', 'Peminjaman::index');
});
