<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/',      'Home::index');
$routes->get('about',  'Home::about');
$routes->get('contact',      'Home::contact');
$routes->post('contact/send','Home::send');
$routes->get('resume', 'Home::resume');
$routes->get('portfolio', 'Home::portfolio');

