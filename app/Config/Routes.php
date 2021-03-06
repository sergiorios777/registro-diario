<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(false);   //$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index', ['as' => 'web.inicio']);

$routes->get('login', '\App\Controllers\Web\Usuario::login', ['as' => 'usuario.login']);
$routes->post('login', '\App\Controllers\Web\Usuario::login_post', ['as' => 'usuario.login.post']);
$routes->get('registrar', '\App\Controllers\Web\Usuario::registrar', ['as' => 'usuario.registrar']);
$routes->post('registrar', '\App\Controllers\Web\Usuario::registrar_post', ['as' => 'usuario.registrar.post']);
$routes->get('logout', '\App\Controllers\Web\Usuario::logout', ['as' => 'usuario.logout']);

$routes->group('aplicacion', function ($routes) {
    $routes->add('/', 'Application::index', ['as' => 'app.inicio']);
    $routes->presenter('ingresos');
    $routes->presenter('gastos');
    $routes->presenter('tipocomprobante', ['controller' => '\App\Controllers\App\TipoComprobante']);
    $routes->presenter('tipogasto', ['controller' => '\App\Controllers\App\TipoGasto']);
});

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
