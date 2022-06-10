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

//Route::get('/news',[NewsController::class,'index']);

Route::get('/news',function(){
   return view('homenews');
})->name('news');

Route::get('/addnews',function(){
 return view('addnew');
})->name('addnews');
