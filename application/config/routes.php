<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'jobs';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


// uses
$route['users'] = 'user/users';

// customer
$route['customer'] = 'customer/customer';

//diveloper
$route['developer'] = 'developer/developer';


// jobs 
//diveloper
$route['new_job'] = 'jobs/new_job';
$route['joblist'] = 'jobs/joblist';