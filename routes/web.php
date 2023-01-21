<?php

use App\Http\Controllers\uploadcontroller;
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

Route::get('/',[uploadcontroller::class,'index']);
Route::post('/uploadfile',[uploadcontroller::class,'create'])->name('uploadimage');
Route::get('/ard',[uploadcontroller::class,'ard']);