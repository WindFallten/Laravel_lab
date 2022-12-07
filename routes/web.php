<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ArticleController;

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

Route::get('/',[AuthController::class, 'main']);
Route::post('/auth/register',[AuthController::class, 'user']);
// Route::get('/article',[ArticleController::class, 'index']);
// Route::get('/article/create',[ArticleController::class, 'create']);
Route::resource('article', ArticleController::class);