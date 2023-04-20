<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Login');

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Login');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->match(['get', 'post'], '/', 'Login::index');
//$routes->match(['get', 'post'], '/registrar', 'Registrar::index', ['filter' => 'auth:admin']);
$routes->get('/menu', 'Menu::index', ['filter' => 'auth:admin,usuario']);
$routes->match(['get', 'post'],'/prontuario', 'Prontuario::index', ['filter' => 'auth:admin,usuario']);
//$routes->match(['get', 'post'],'/historico_prontuario', 'HistPront::index', ['filter' => 'auth:admin,usuario']);
$routes->match(['get', 'post'],'/anamnese', 'Anamnese::index', ['filter' => 'auth:admin,usuario']);
$routes->get('/logout', 'Logout::index', ['filter' => 'auth:admin,usuario']);

//Grupo de rotas para gerenciamento de usuarios
$adminFilter = 'auth:admin';
$routes->group('usuarios', ['filter' => $adminFilter], static function($routes){
    $routes->get( '', 'Usuarios::index');
    $routes->match(['get', 'post'],'(:any)', 'Usuarios::$1');
  });


//Grupo de rotas para gerenciamento do prontuario
$prontFilter = 'auth:admin, usuario';
$routes->group('historico_prontuario', ['filter' => $prontFilter], static function($routes){
    $routes->get( '', 'GerenciaPront::index');
    $routes->match(['get', 'post'],'(:any)', 'GerenciaPront::$1');
  });

//Grupo de rotas para gerenciamento do anamnese
$anamFilter = 'auth:admin, usuario';
$routes->group('historico_anamnese', ['filter' => $anamFilter], static function($routes){
    $routes->get( '', 'GerenciaAnam::index');
    $routes->match(['get', 'post'],'(:any)', 'GerenciaAnam::$1');
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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
