<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
| http://www.web-and-development.com/codeigniter-remove-index-php-minimize-url/
*/
$default_controller = "welcome";
$controller_exceptions = array('admin','welcome','auth','calc','email');

$route['default_controller'] = $default_controller;
$route["^((?!\b".implode('\b|\b', $controller_exceptions)."\b).*)$"] = $default_controller.'/$1';
$route['404_override'] = '';

$route['admin'] = 'crud/pages/dashboard';
$route['admin/dashboard'] = 'crud/pages/dashboard';

$route['admin/pages'] = 'crud/pages/all';
$route['admin/pages/edit/(:num)'] = 'crud/pages/edit/$1';
$route['admin/pages/edit/(:any)'] = 'crud/pages/edit/$1';
$route['admin/pages/savePage'] = 'crud/pages/savePage';
$route['admin/pages/add'] = 'crud/pages/add';
$route['admin/pages/addPage'] = 'crud/pages/addPage';
$route['admin/pages/delete/(:num)'] = 'crud/pages/delete/$1';

$route['admin/articles'] = 'crud/articles/all';
$route['admin/articles/edit/(:num)'] = 'crud/articles/edit/$1';
$route['admin/articles/edit/(:any)'] = 'crud/articles/edit/$1';
$route['admin/articles/saveArticle'] = 'crud/articles/saveArticle';
$route['admin/articles/add'] = 'crud/articles/add';
$route['admin/articles/addArticle'] = 'crud/articles/addArticle';
$route['admin/articles/delete/(:num)'] = 'crud/articles/delete/$1';

/* End of file routes.php */
/* Location: ./application/config/routes.php */