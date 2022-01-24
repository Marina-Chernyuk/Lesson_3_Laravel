<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryNewsController;
use App\Http\Controllers\OneCategoryNewsController;
use App\Http\Controllers\OneNewsController;


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

Route::get('/', [HomeController::class, 'index']);
Route::get('/category', [CategoryNewsController::class, 'category']);
Route::get('/{nameCategory}', [OneCategoryNewsController::class, 'oneCategory']);
Route::get('/{nameCategory}/{idNews}', [OneNewsController::class, 'oneNews']);

