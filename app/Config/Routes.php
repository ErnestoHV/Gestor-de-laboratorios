<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'SigninController::index');


/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}

//Rutas de las funciones CRUD de Usuario
$routes->post('guardar', 'Usuarios::alta_usuario');
$routes->get('registro', 'Usuarios::registro');
$routes->get('Usuarios/index/(:any)', 'Usuarios::index/$1');
$routes->get('UserModel/eliminar/(:num)', 'Usuarios::eliminar/$1');
$routes->post('modificar/(:any)', 'Usuarios::editar/$1');
$routes->get('registro_admin', 'Usuarios::registro_admin');


//Rutas de las funciones CRUD de Laboratorios
$routes->post('guardar_lab', 'Laboratorios::alta_laboratorio');
$routes->get('laboratorios', 'Laboratorios::index');
$routes->get('registro_lab', 'Laboratorios::registro');
$routes->get('LaboratorioModel/eliminar/(:num)', 'Laboratorios::eliminar/$1');
$routes->post('modificar_lab/(:any)', 'Laboratorios::modificar/$1');

//Rutas de las funciones CRUD de equipos
$routes->post('guardar_eq', 'Equipos::alta_equipos');
$routes->get('registro_equipos', 'Equipos::registro');
$routes->get('equipos', 'Equipos::index');
$routes->get('EquiposModel/eliminar/(:num)', 'Equipos::eliminar/$1');
$routes->post('actualizar_eq/(:any)', 'Equipos::editar_equipo/$1');

//Rutas de las funciones CRUD de Préstamos
$routes->post('guardar_prestamo', 'Prestamos::alta_prestamo');
$routes->get('prestamos', 'Prestamos::index');
$routes->get('registro_prestamo', 'Prestamos::registro');
$routes->get('PrestamoModel/eliminar/(:num)', 'Prestamos::eliminar/$1');
$routes->post('modificar_prestamo/(:any)', 'Prestamos::modificar/$1');

//Rutas de las funciones CRUD de Capacitacion
$routes->post('guardar_capacitacion', 'Capacitacion::alta_capacitacion');
$routes->get('capacitacion', 'Capacitacion::index');
$routes->get('registro_capacitacion', 'Capacitacion::registro');
$routes->get('CapacitacionModel/eliminar/(:num)', 'Capacitacion::eliminar/$1');
$routes->post('modificar_cap/(:any)', 'Capacitacion::modificar/$1');

//Rutas de las funciones CRUD en subtablas de Capacitación
//SUBTABLA CON USUARIOS
$routes->get('cap_usuarios', 'Capacitacion::index2');
$routes->post('guardar_cap_usuarios', 'Capacitacion::alta_capuser');
$routes->get('registro_cap_usuarios', 'Capacitacion::registro_capuser');
$routes->get('Cap_usuariosModel/eliminar/(:num)', 'Capacitacion::eliminar_capuser/$1');
$routes->post('modificar_cap_usuarios/(:any)', 'Capacitacion::modificar_capuser/$1');
//SUBTABLA CON EQUIPOS
$routes->get('cap_equipos', 'Capacitacion::index3');
$routes->post('guardar_cap_equipos', 'Capacitacion::alta_capequ');
$routes->get('registro_cap_equipos', 'Capacitacion::registro_capequ');
$routes->get('Cap_equiposModel/eliminar/(:num)', 'Capacitacion::eliminar_capequ/$1');
$routes->post('modificar_cap_equipos/(:any)', 'Capacitacion::modificar_capequ/$1');


//Ruta para observar la vista de ALUMNO - MAESTRO
$routes->get('alumno', 'Alumno::index');

//Ruta para acceder a la documentacion - Administrador ONLY
$routes->get('documentacion', 'Usuarios::docs');

//Rutas para tener acceso al sistema (Login)
$routes->match(['get', 'post'], 'SigninController/loginAuth', 'SigninController::loginAuth');
$routes->get('usuarios', 'Usuarios::index');
$routes->get('salir', 'SigninController::logout');
$routes->get('login', 'SigninController::index');