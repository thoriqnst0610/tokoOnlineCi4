<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//  router halaman Depan
$routes->get('/', 'Home::index');
$routes->get('/daftarproduk', 'Home::daftarProduk');
$routes->get('/homeKategori', 'Home::homeKategori');
$routes->get('/login', 'Home::login',['filter' => 'LoginMiddleware']);
$routes->post('/login', 'Home::loginPost',['filter' => 'LoginMiddleware']);
$routes->get('/register', 'Home::register',['filter' => 'LoginMiddleware']);
$routes->post('/register', 'Home::registerPost',['filter' => 'LoginMiddleware']);
$routes->get('/logout', 'Home::logout',['filter' => 'LogoutMiddleware']);

// router kategori produk
$routes->get('/kategoriProduk', 'KategoriProduk::kategoriProduk',['filter' => 'LogoutMiddleware']);
$routes->post('/kategoriProduk', 'KategoriProduk::tambahKategori',['filter' => 'LogoutMiddleware']);
$routes->post('/editKategoriProduk', 'KategoriProduk::editKategoriProduk',['filter' => 'LogoutMiddleware']);
$routes->get('/ambilKategoriProdukId/(:segment)', 'KategoriProduk::ambilKategoriProdukId/$1',['filter' => 'LogoutMiddleware']);
$routes->post('/hapusKategoriProdukId', 'KategoriProduk::hapusKategoriProdukId',['filter' => 'LogoutMiddleware']);

// routers Produk
$routes->get('/produks', 'DataProduk::tampilProduk',['filter' => 'LogoutMiddleware']);
$routes->post('/produks', 'DataProduk::tambahProduk',['filter' => 'LogoutMiddleware']);
$routes->post('/updateProduks', 'DataProduk::updateProduk',['filter' => 'LogoutMiddleware']);
$routes->post('//hapusProduks', 'DataProduk::hapusProduk',['filter' => 'LogoutMiddleware']);
$routes->get('/ambilProdukId/(:segment)', 'DataProduk::ambilProdukId/$1',['filter' => 'LogoutMiddleware']);
$routes->get('/ambilProdukIdLagi/(:segment)', 'DataProduk::ambilProdukIdLagi/$1');