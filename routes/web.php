<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\CreateNewController;
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

//Route::get('/homenews',[NewsController::class,'index']);
//Route::get('/form',[CreateNewController::class,'index']);
Route::resource('/index',NewsController::class);
Route::resource('/news',CreateNewController::class);