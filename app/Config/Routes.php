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
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
//$routes->set404Override();

$routes->set404Override(function (){
    return view('404');
});
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

$routes->get('/', 'Home::index');

// $routes->get('about-us','MenuController::about_us');

// $routes->get('contact-us','MenuController::contact_us');

// $routes->get('online-registration','MenuController::register');

//$routes->add('online-registration','MenuController::register');

$menu_items = [];

$menu_items ['about-us'] = 'MenuController::about_us';
//$menu_items ['contact-us'] = 'MenuController::contact_us';
// $menu_items ['online-registration/(:num)'] = 'MenuController::register/$1';

$menu_items['test-db'] = 'DbTestController::index';

$menu_items['test-db2'] = 'DbTestController::getTrainingData';

$menu_items['test-model'] = 'TestModelController::index';
$menu_items['studentinfo'] = 'TestModelController::getStudentInfo';

$menu_items['libz'] = 'TestLibController::index';
$menu_items['testmail'] = 'TestMailController::index';
$menu_items['testhelp'] = 'TestHelpers::index';
$menu_items['contact-us'] = 'ContactFormController::index';

$menu_items['register'] = 'RegisterController::index';
$menu_items['create'] = 'RegisterController::create';

$menu_items['login'] = 'LoginController::index';
$menu_items['login/auth'] = 'LoginController::authenticate';
$menu_items['logout'] = 'LoginController::logout';









$routes->map($menu_items);




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
