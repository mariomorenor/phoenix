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
    return view('welcome');
});

Auth::routes(['verify'=>false,'reset'=>false,'confirm'=>false,'register'=>false]);

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth']], function () {
    
    Route::get('inventario','InventoryController@index')->name('inventario.index');


    //RUTAS PRODUCTOS
    Route::get('list_products','ProductController@listProducts')->name('listar_productos');
    Route::resource('producto','ProductController');


});
