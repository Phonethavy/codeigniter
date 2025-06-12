<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/nav/nav1', 'Home::nav');
$routes->get('/kpi/(:num)', 'Home::showKpi/$1');
$routes->get('/financial/page1', 'Home::financialPage1');
$routes->get('/service/page1', 'Home::servicePage1');