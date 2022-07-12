<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
    require SYSTEMPATH . 'Config/Routes.php';
}

/**
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

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
//$routes->get('/', 'Home::index');

/*Site-----------------------------------------------*/
$routes->get('/', 'Home::index');
$routes->get('shop', 'Shop::index');
$routes->get('shop/(:any)/(:any)', 'Shop::index/$1/$2');
$routes->get('product/(:any)', 'Shop::detail/$1');
$routes->get('cart', 'Shop::cart');

/*admin-----------------------------------------------*/

$routes->group('admin', ['namespace' => 'App\Controllers\Admin'], static function ($routes) 
{
    $routes->get('/', 'Admin::login');
    $routes->get('forgot', 'Admin::Forgot');
    $routes->get('do_forgot', 'Admin::do_forgot');

    /*Auth=====================*/
        $routes->get('profile', 'Profile::adminProfile');
        $routes->get('dashboard', 'Dashboard::index');
        $routes->get('logout', 'Dashboard::Logout');

        $routes->get('users', 'Users::index');
        $routes->get('view-user/(:any)', 'Users::user_view/$1');
        $routes->get('edit-user/(:any)', 'Users::user_edit/$1');

        $routes->get('colors', 'Colors::index');
        
        $routes->get('content', 'Content::index');
        $routes->get('category', 'Category::index');
        
        $routes->get('styles', 'Styles::index');

        $routes->get('products', 'Products::index');
        $routes->get('add-product', 'Products::add_product');
        $routes->get('edit-product/(:num)', 'Products::edit_product/$1');

        $routes->get('state', 'City_Management::index');        
        $routes->get('city', 'City_Management::city_list');        



    
});


/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need to it be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}