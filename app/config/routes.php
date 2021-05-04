<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'home_controller';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['about'] = 'home_controller/about';
$route['help'] = 'home_controller/help';

$route['residentials'] = 'residents_controller/dashboard';

$route['residentials/residents'] = 'residents_controller/index';
$route['residents/(:num)/edit'] = 'residents_controller/edit';

$route['residents/(:num)/photos'] = 'photos_controller/index';
$route['residents/(:num)/photos/create'] = 'photos_controller/create';

$route['residents/(:num)/education'] = 'educations_controller/index';
$route['educations/(:num)/edit'] = 'educations_controller/edit';

$route['residents/(:num)/jobs'] = 'jobs_controller/index';
$route['jobs/(:num)/edit'] = 'jobs_controller/edit';

$route['residents/(:num)/family'] = 'families_controller/show';

$route['residents/(:num)/addresses'] = 'addresses_controller/index';
$route['addresses/(:num)/edit'] = 'addresses_controller/edit';

$route['residentials/families'] = 'families_controller/index';
$route['families/(:num)/edit'] = 'families_controller/edit';

$route['users'] = 'users_controller/index';
$route['users/(:num)/edit'] = 'users_controller/edit';

$route['settings']['get'] = 'settings_controller/index';
$route['settings']['post'] = 'settings_controller/store';

$route['officers']['post'] = 'officers_controller/store';
