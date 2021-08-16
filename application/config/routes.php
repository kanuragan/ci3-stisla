<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['default_controller'] = 'dashboard/Dashboard'; //folder/Controller/method(function)
$route['login']              = 'auth/Login';
$route['forgot']             = 'auth/Forgot';
$route['profile']            = 'profile/Profile';
$route['change_password']    = 'profile/ChangePassword';
$route['about']              = 'about/About';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
