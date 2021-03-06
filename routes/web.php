<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth/login');
});

//se crea una ruta de tipo resource para hacer un grupo de rutas de recursos con las peticiones index,create,show,edit,update,destroy
Route::resource('almacen/categoria','CategoriaController'); //cuando se ingrese a la ruta almacen/categoria se va a llamar al controlador CategoriaController
Route::resource('almacen/articulo','ArticuloController'); //cuando se ingrese a la ruta almacen/articulo se va a llamar al controlador ArticuloController
Route::resource('ventas/cliente','ClienteController'); //cuando se ingrese a la ruta ventas/cliente se va a llamar al controlador ClienteController
Route::resource('compras/proveedor','ProveedorController');
Route::resource('compras/ingreso','IngresoController');
Route::resource('ventas/venta','VentaController');
Route::resource('seguridad/usuario','UsuarioController');
Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout' );
Route::get('/{slug?}','HomeController@index');//sirve cuando meten una url que no esta especificada en las anteriores me lleva a home.blade.php