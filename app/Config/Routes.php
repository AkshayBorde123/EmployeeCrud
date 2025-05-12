<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('employee','EmployeeController::index');
$routes->get('employee-add','EmployeeController::create');
$routes->post('employee-store','EmployeeController::store');
$routes->get('employee-delete/(:num)', 'EmployeeController::delete/$1');
$routes->post('employee-update/(:num)', 'EmployeeController::update/$1');
$routes->get('employee-edit/(:num)', 'EmployeeController::edit/$1');
