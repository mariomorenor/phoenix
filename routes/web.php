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
    return redirect()->route('home');
});

Auth::routes(['verify'=>false,'reset'=>false,'confirm'=>false,'register'=>false]);

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth']], function () {
    
    Route::get('inventario','InventoryController@index')->name('inventario.index');
    Route::get('inventario/mantenimiento','InventoryController@mantenimiento_productos')->name('inventario.mantenimiento_productos');
    Route::get('inventario/entrada_inventario','InventoryController@entrada_inventario')->name('inventario.entrada_inventario');


    //RUTAS PRODUCTOS
    Route::get('list_products','ProductController@listProducts')->name('listar_productos');
    Route::get('get_product/{product}','ProductController@show_product');
    Route::resource('products','ProductController');




    // Pruebas Vistas
    Route::get('modificar',function(){return view('Inventario.entradaProducto');});



});
