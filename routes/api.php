<?php

use App\Http\Controllers\apicontroller;
use App\Http\Controllers\direccionController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::group(['prefix' => 'v1','namespace' =>'App\Http\Controllers'], function(){



    // routes/api.php

    Route::get('phone/{numero}', [direccionController::class, 'getDireccionesByPhone']);
    Route::post('direcciones', [direccionController::class, 'postDireccion']);
    Route::delete('direcciones/{id}', [direccionController::class, 'deleteDireccion']);
    Route::put('direcciones/{id}', [direccionController::class, 'putDireccion']);







    Route::post('petapa', [apicontroller::class, 'petapa']);
    Route::post('amatitlan', [apicontroller::class, 'amatitlan']);
    Route::post('antigua', [apicontroller::class, 'antigua']);
    Route::post('cascata', [apicontroller::class, 'cascata']);
    Route::post('centrohistorico', [apicontroller::class, 'centrohistorico']);
    Route::post('chimaltenango', [apicontroller::class, 'chimaltenango']);
    Route::post('encinal', [apicontroller::class, 'encinal']);
    Route::post('escalacarretera', [apicontroller::class, 'escalacarretera']);
    Route::post('mazatenango', [apicontroller::class, 'mazatenango']);
    Route::post('metrocentrovillanueva', [apicontroller::class, 'metrocentrovillanueva']);
    Route::post('minutoMuxbal', [apicontroller::class, 'minutoMuxbal']);
    Route::post('naranjomall', [apicontroller::class, 'naranjomall']);
    Route::post('plazamadero', [apicontroller::class, 'plazamadero']);
    Route::post('sancristobal', [apicontroller::class, 'sanCristobal']);
    Route::post('telares', [apicontroller::class, 'sanCristobal']);
    Route::post('zona4', [apicontroller::class, 'zona4']);
    Route::post('zona14', [apicontroller::class, 'zona14']);
    Route::post('zona10', [apicontroller::class, 'zona10']);
    Route::post('majadas', [apicontroller::class, 'majadas']);
    Route::post('plazacentral', [apicontroller::class, 'plazacentral']);
    Route::post('xelaminerva', [apicontroller::class, 'xelaminerva']);
    Route::post('praderaxela', [apicontroller::class, 'praderaxela']);
    Route::post('vistahermosa', [apicontroller::class, 'vistahermosa']);



    Route::get('products/{id_tienda}', [apicontroller::class, 'listPetapa']);

    Route::get('products/{id_tienda}', [apicontroller::class, 'listamatitlan']);
    Route::get('products/antigua', [apicontroller::class, 'listantigua']);
    Route::get('products/cascata', [apicontroller::class, 'listcascata']);
    Route::get('products/{id_tienda}', [apicontroller::class, 'listcentrohistorico']);
    Route::get('products/chimaltenango', [apicontroller::class, 'listchimaltenango']);
    Route::get('products/encinal', [apicontroller::class, 'listencinal']);
    Route::get('products/escalacarretera', [apicontroller::class, 'listescalacarretera']);
    Route::get('products/mazatenango', [apicontroller::class, 'listmazatenango']);
    Route::get('products/metrocentrovillanueva', [apicontroller::class, 'listmetrocentrovillanueva']);
    Route::get('products/minutoMuxbal', [apicontroller::class, 'listminutoMuxbal']);
    Route::get('products/naranjomall', [apicontroller::class, 'listnaranjomall']);
    Route::get('products/plazamadero', [apicontroller::class, 'listplazamadero']);
    Route::get('products/sancristobal', [apicontroller::class, 'listsancristobal']);
    Route::get('products/telares', [apicontroller::class, 'listtelares']);
    Route::get('products/zona4', [apicontroller::class, 'listzona4']);
    Route::get('products/zona14', [apicontroller::class, 'listzona14']);
    Route::get('products/{id_tienda}', [apicontroller::class, 'listzona10']);
    Route::get('products/majadas', [apicontroller::class, 'listzona10']);
    Route::get('products/plazacentral', [apicontroller::class, 'listplazacentral']);
    Route::get('products/xelaminerva', [apicontroller::class, 'listxelaminerva']);
    Route::get('products/xelaminerva', [apicontroller::class, 'listxelaminerva']);
    Route::get('products/praderaxela', [apicontroller::class, 'listpraderaxela']);
    Route::get('products/vistahermosa', [apicontroller::class, 'listvistahermosa']);
    Route::get('/', '\App\Http\Controllers\UserController@index');
    // Agregar la siguiente línea a tus rutas
 // api.php









    // Ejemplo de ruta


});



// Rutas protegidas que requieren autenticación


