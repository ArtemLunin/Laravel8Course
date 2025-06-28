<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ArticlesController;

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

Route::get('/', [PagesController::class, "blogPage"])->name('blog');
Route::get('/article/{id}', [PagesController::class, "articlePage"]);
Route::post('/article', [ArticlesController::class, "store"]);
Route::post('/article/delete', [ArticlesController::class, "destroy"]);
Route::get('/article/{id}/update', [PagesController::class, "articleUpdatePage"]);
Route::post('/article/update', [ArticlesController::class, "update"]);
