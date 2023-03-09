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

//KategoriaController
Route::get('/kategorias', [KategoriaController::class, 'index']);
Route::get('/kategoria/{id}', [KategoriaController::class, 'show']);
Route::delete('/kategorias/{id}', [KategoriaController::class, 'destroy']);
Route::post('/kategorias', [KategoriaController::class, 'store']);
Route::put('/kategorias/{id}', [KategoriaController::class, 'update']);

//ReceptController
Route::get('/receps', [ReceptController::class, 'index']);
Route::get('/recept/{id}', [ReceptController::class, 'show']);
Route::delete('/receps/{id}', [ReceptController::class, 'destroy']);
Route::post('/receps', [ReceptController::class, 'store']);
Route::put('/receps/{id}', [ReceptController::class, 'update']);
