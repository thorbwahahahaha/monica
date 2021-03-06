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
*/

$route['404_override'] = '';
$route['mobile/login'] = 'mobile/login';
$route['mobile/casemap'] = 'mobile/casemap';
$route['mobile/riskmap'] = 'mobile/riskmap';
$route['mobile/checklocation'] = 'mobile/checklocation';
$route['upload'] = 'user/upload';
$route['case_report'] = 'user/crform';
$route['upload/(:any)'] = 'user/upload/$1';
$route['mapping'] = 'user/mapform';
$route['mapping/(:any)'] = 'user/mapform/$1';
$route['addmap'] = 'user/addmap';
$route['addmap/(:any)'] = 'user/addmap/$1';
$route['login'] = 'user/login';
$route['login/(:any)'] = 'user/login/$1';
$route['larval_survey'] = 'user/lsform';
$route['larval_survey/(:any)'] = 'user/lsform/$1';
$route['case_report/(:any)'] = 'user/crform/$1';
$route['default_controller'] = 'user/pages/view';
$route['(:any)'] = 'user/pages/view/$1';

/* End of file routes.php */
/* Location: ./application/config/routes.php */