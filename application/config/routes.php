<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['eliminar_categoria/(:num)']    =   'Productos/eliminarCategoria';
$route['actualizar_categoria/(:num)']    =   'Productos/actualizarCategoria';