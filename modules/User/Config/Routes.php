<?php

$routes->group('user', ['namespace' => 'Modules\User\Controllers'], function ($routes) {
    $routes->get('/', 'User::index');
    $routes->get('table', 'User::table');
});
