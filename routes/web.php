<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\productsController;

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

Route::get('/products/create',[productsController::class,'create']);
Route::get('/products/read',[productsController::class,'read']);
Route::get('/products/all',[productsController::class,'all']);
Route::get('/products/update',[productsController::class,'update']);
Route::get('/products/delete',[productsController::class,'delete']);
