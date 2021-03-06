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
|	http://codeigniter.com/user_guide/general/routing.html
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
$route['default_controller'] = 'IndexController';



//后台登陆地址控制器
//登陆控制器
$route['login'] = 'LoginController';
$route['logout'] = 'LoginController/logout';



//公共导航
$route['top'] = 'IndexController/top';
$route['gongzuotai'] = 'IndexController/gongzuotai';




//后台基本控制器
// 均有权限访问认证.

//基本配置
$route['config/web'] = 'ConfigController/web';
//栏目管理
$route['lanmu/index'] = 'ColumnController/index';
$route['lanmu/add'] = 'ColumnController/add';
$route['lanmu/update'] = 'ColumnController/update';
$route['lanmu/delete/(:num)'] = 'ColumnController/delete/$1';
$route['lanmu/edit/(:num)'] = 'ColumnController/index/$1';



//文章管理
// $route['article/index'] = 'ArticleController/index';
$route['article/index/(:num)'] = 'ArticleController/index/$1';
$route['article/add'] = 'ArticleController/add';
$route['article/edit/(:num)'] = 'ArticleController/edit/$1';
$route['article/delete/(:num)'] = 'ArticleController/delete/$1';
$route['article/update'] = 'ArticleController/update';
//用户控制

$route['user/show'] = 'UserController/show';

//后台用户权限..
$route['routes/group'] = 'RouteController/group';
$route['routes/edit/(:num)'] = 'RouteController/edit/$1';
$route['routes/delete/(:num)'] = 'RouteController/delete/$1';
$route['routes/addgroup'] = 'RouteController/addgroup';

//后台路由管理


//后台用户
$route['routes/adminuser'] = 'AdminUserController/index';
$route['routes/editadminuser/(:num)'] = 'AdminUserController/edit/$1';
$route['routes/createadminuser'] = 'AdminUserController/create';
$route['routes/deleteadminuser/(:num)'] = 'AdminUserController/delete/$1';


$route['test'] = 'TestController';

$route['404_override'] = 'ErrorController/Error404';
$route['translate_uri_dashes'] = FALSE;
