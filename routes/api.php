<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Usuarios;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('insertarusuario','controladores\Usuarios@insertarUser');
Route::middleware(['auth:sanctum','verificarestadodelproducto'])->post('insertarproducto','controladores\Productos@insertarproducto');
Route::middleware(['auth:sanctum','verificaredad'])->post('insertarpersona','controladores\Personas@insertarpersona');
Route::middleware('auth:sanctum')->post('insertarcomentario','controladores\Comentarios@insertarcomentario');
Route::post('iniciarsesion','controladores\Usuarios@LogIn');
Route::middleware('auth:sanctum')->post('insertarimagen','controladores\documentaciones@guardardocumentos');


//////////////////////////////////////////////////////////////////////////////////
Route::middleware(['auth:sanctum','verificaredad'])->put('actualizarpersona/{id}','controladores\Personas@actualizarpersona')->where (['id'=>'[0-9]+']);
Route::middleware(['auth:sanctum','verificarestadodelproducto'])->put('actualizarproducto/{id}','controladores\Productos@actualizarProducto')->where (['id'=>'[0-9]+']);
Route::middleware('auth:sanctum')->put('actualizarcomentario/{id}','controladores\Comentarios@actualizarComentario')->where (['id'=>'[0-9]+']);
Route::middleware('auth:sanctum')->put('asignarpermisos/{id}','controladores\personal_access_tokens@asignarpermisos')->where (['id'=>'[0-9]+']);
Route::middleware('auth:sanctum')->put('eliminarpermisos/{id}','controladores\personal_access_tokens@eliminarpermisos')->where (['id'=>'[0-9]+']);

/////////////////////////////////////////////////////////////////////////////////////////////////
Route::middleware('auth:sanctum')->get('verpersonas','controladores\Personas@verpersonas');
Route::middleware('auth:sanctum')->get('verproductos','controladores\Productos@verProductos');
Route::middleware('auth:sanctum')->get('vercomentarios','controladores\Comentarios@verComentarios');
Route::middleware('auth:sanctum')->get('vercomentariosporproducto/{id}','controladores\Comentarios@verComentariosporproducto')->where (['id'=>'[0-9]+']);
Route::middleware('auth:sanctum')->get('vercomentariosporpersona/{id}','controladores\Comentarios@verComentariosporpersona')->where (['id'=>'[0-9]+']);
Route::get('/{codigo}', 'controladores\Usuarios@crear');
/////////////////////////////////////////////////////////////////////////////////////////////////
Route::middleware('auth:sanctum')->delete('eliminarpersona/{id}','controladores\Personas@eliminarpersona')->where (['id'=>'[0-9]+']);
Route::middleware('auth:sanctum')->delete('eliminarusuario/{id}','controladores\Usuarios@eliminarUser')->where (['id'=>'[0-9]+']);
Route::middleware('auth:sanctum')->delete('eliminarcomentario/{id}','controladores\Comentarios@eliminarComentario')->where (['id'=>'[0-9]+']);
Route::middleware('auth:sanctum')->delete('eliminarproducto/{id}','controladores\Productos@eliminarProducto')->where (['id'=>'[0-9]+']);
Route::middleware('auth:sanctum')->delete('eliminarcuenta','controladores\Usuarios@LogOut')->where (['id'=>'[0-9]+']);
////////////////////////////////////////////////////////////////////////////////////////////////////
