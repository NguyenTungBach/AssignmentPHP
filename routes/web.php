<?php

use App\Http\Controllers\LayoutController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [LayoutController::class, 'getLayout']);
Route::get('/form', [LayoutController::class, 'getForm']);
Route::get('/table', [LayoutController::class, 'getTable']);
Route::get('/detail', [LayoutController::class, 'getDetail']);
Route::get('/edit', [LayoutController::class, 'getEdit']);
Route::get('/delete', [LayoutController::class, 'getDelete']);

Route::post('/form', [LayoutController::class, 'processForm']);
Route::post('/edit', [LayoutController::class, 'processEdit']);
Route::post('/delete', [LayoutController::class, 'processDelete']);
