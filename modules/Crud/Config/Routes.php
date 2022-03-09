<?php

$routes->group('crud', ['namespace' => 'Modules\Crud\Controllers'], function ($routes) {
    $routes->get('/', 'Pages::index');
    $routes->get('about', 'Pages::about');
    $routes->get('contact', 'Pages::contact');
    $routes->get('komik', 'Komik::index');
    $routes->get('komik/create', 'Komik::create');
    $routes->get('komik/(:segment)', 'Komik::edit/$1');
    $routes->get('komik/detail/(:any)', 'Komik::detail/$1');
    $routes->post('komik/update/(:num)', 'Komik::update/$1');
    $routes->post('komik/save', 'Komik::save');
    $routes->delete('komik/(:num)', 'Komik::delete/$1');
    $routes->get('orang', 'Orang::index');
});
