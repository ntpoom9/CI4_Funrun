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
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

// Login
// $routes->get('login','Login::index');
// $routes->get('/','Login::logout');
// Register
// $routes->get('register','Register::index');

// page_search
//  $routes->get('search_page_index', 'Search::search');
//  $routes->get('search_page', 'Search::searchHome');

// page_profile
// $routes->get('profile', 'Profile::index');
// page_edit_profile
//  $routes->get('edit_profile/(:num)', 'Profile::show_edit/$1');
// udate profile
 $routes->put('update/(:num)', 'Profile::update/$1');
 
 

// Member
$routes->get('/index_user', 'Home::index_user');
// Login & logout
$routes->get('login','Login::index');
$routes->get('/','Login::logout');

// register member & category
$routes->get('/register', 'Register::index');

// member register category only

$routes->get('/register_category/(:num)', 'Register::showRegisCategory/$1');
$routes->post('/register_category/(:num)', 'Register::regisOnlyCategory');
//category
$routes->get('/category', 'Category::index');

// profile
$routes->get('/profile', 'Profile::index');
$routes->get('edit_profile/(:num)', 'Profile::show_edit/$1');
// udate profile
 $routes->put('update/(:num)', 'Profile::update/$1');
// -------------------------------------------------------------------

// Admin 
$routes->get('/index_admin', 'Home::index_admin');

// Login & logout
$routes->get('login','Login_admin::index');
$routes->get('/','Login_admin::logout');

//all data
$routes->get('all_member', 'Admin::index');
$routes->get('all_list', 'Admin::allList');

//delete data
$routes->get('delete_list/(:any)', 'Admin::deleteList/$1');

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