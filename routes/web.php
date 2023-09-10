<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\absenController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


route::get('/',[homeController::class,'index']);

route::get('/register',[registerController::class,'index'])->middleware('guest');
route::post('/register',[registerController::class,'store']);

route::get('/login',[LoginController::class,'login'])->middleware('guest');
route::post('/login',[LoginController::class,'authenticate']);

route::get('/dashboard',[absenController::class,'index'])->middleware('auth');
route::get('/dashboard/view',[absenController::class,'view'])->middleware('auth');
route::get('/dashboard/history',[absenController::class,'history'])->middleware('auth');
route::post('/dashboard/{user}',[absenController::class,'store']);

route::post('/login',[LoginController::class,'authenticate']);
route::post('/logout',[LoginController::class,'logout']);

Route::post('/dashboard/view/search',[absenController::class,'search']);