<?php

namespace Config;

use App\Controllers\Dashboard;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
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

//website
$routes->get('/', 'Home::index');
$routes->get('headgesquare','Landing::Home');
$routes->post('insert_enq', 'Landing::enqInsert');
$routes->get('contact_us','Landing::contact');
$routes->post('contact_form','Landing::contactInsert');
$routes->get('main_blog','Landing::blogs_view');
$routes->get('blog_single/(:any)','Landing::blog_single/$1');
$routes->get('board_of_directors','Landing::board');
$routes->get('client_stories','Landing::clients');
$routes->get('team','Landing::teams');
$routes->get('vision','Landing::vision');
$routes->get('careers','Landing::career');
$routes->post('career_apply','Landing::career_apply');
$routes->get('ecommerce','Landing::ecommerce');
$routes->get('finance_and_accounting','Landing::finance_and_accounting'); 
$routes->get('taxation','Landing::taxation'); 
$routes->get('corporate_advisory','Landing::corporate_advisory');
$routes->get('valuations','Landing::valuations');
$routes->get('liquidation','Landing::liquidation'); 
$routes->get('foreign_exchange_controls','Landing::foreign_exchange_controls'); 
$routes->get('audit','Landing::audit'); 
$routes->get('ui_ux','Landing::ui_ux'); 
$routes->get('product_development','Landing::product_development'); 
$routes->get('app_development','Landing::app_development'); 
$routes->get('web_application','Landing::web_application'); 
$routes->get('technology_consulting','Landing::technology_consulting'); 

// Routes for admin panel
$routes->get('dashboard','Dashboard::main');
$routes->get('login','Dashboard::login');
$routes->get('contactform','Dashboard::contact_form_details');
$routes->get('blogs','Dashboard::blogs');
$routes->get('Blog','Dashboard::Blog');
$routes->post('add_blog_new','Dashboard::add_blog_new');
$routes->get('blog_delete/(:any)','Dashboard::del_blog/$1');
$routes->get('edit_blog/(:any)','Dashboard::edit_blog/$1');
$routes->get('careers_display','Dashboard::careers_display');
//$routes->post('update_blog','Dashboard::update_blog');
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
// https://hedge-square.com/hedgenew/hedge-square/public/headgesquare