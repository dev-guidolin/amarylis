<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';

$route['produto/(:any)'] = 'welcome/produtos/$1';

$route['short/(:any)'] = 'api_controller/short/$1';
$route['comprar'] = 'api_controller/venda';


$route['deus-e-fiel'] = 'admin_controller';
$route['editar/(:any)'] = 'admin_controller/editar/$1';

$route['views'] = 'api_controller/updateViews';
$route['editar-item'] = 'api_controller/editarItem';

$route['login'] = 'welcome/login';
$route['admin/logado'] = 'Login_controller/logado';

$route['deus-e-fiel/novo-item'] = 'admin_controller/novoItem';
$route['deus-e-fiel/inativos'] = 'admin_controller/itensInativos';

$route['deus-e-fiel/criar-item'] = 'api_controller/criarItem';




$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


