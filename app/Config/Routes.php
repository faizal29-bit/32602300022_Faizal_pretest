<?php

use CodeIgniter\Router\RouteCollection;

$routes->setAutoRoute('true'); 
/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('pretest', 'Praktikum::pretest');
$routes->get('profil', 'Profil::index');
$routes->setAutoRoute('legacy'); 

// Explicit routes for Mahasiswa controller methods
$routes->get('mahasiswa/show', 'Mahasiswa::show');
$routes->get('mahasiswa/insert', 'Mahasiswa::insert');
// Keep legacy auto routing if desired
$routes->setAutoRoute('legacy');

