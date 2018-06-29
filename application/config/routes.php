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
$route['default_controller'] = 'home';
$route['404_override'] = 'error';
$route['translate_uri_dashes'] = FALSE;
//$route['categories'] = 'home/cat_page';

$route['send_sms'] = "category/sendSMS";
$route['user_signup'] = "login/signup_submission";
$route['user_login'] = "login/login_submission";
$route['user_update'] = "login/user_update";
$route['user_change_password'] = "login/change_password";

$route['submit_yoga_trainer'] = "category/submit_yoga_trainer";
$route['submit_dietician'] = "category/submit_dietician";
$route['submit_physiotherapy_at_home'] = "category/submit_physiotherapy_at_home";


$route['user_forgot_password'] = "login/forgot_password";
$route['my_bookings'] = "login/my_bookings";

$route['my_ongoingbookingsAjax'] = "login/my_ongoingbookingsAjax";
$route['my_bookingsAjax'] = "login/my_bookingsAjax";

$route['my_account'] = "login/my_account";
$route['logout'] = "login/logout";


$route['(:any)'] = "category/index/$1";

