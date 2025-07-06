<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\StudentsController;

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

// Route::get('/', [PagesController::class, "blogPage"])->name('blog');
// Route::get('/article/{id}', [PagesController::class, "articlePage"]);
Route::post('/article', [ArticlesController::class, "store"]);
Route::post('/article/delete', [ArticlesController::class, "destroy"]);
Route::get('/article/{id}/update', [PagesController::class, "articleUpdatePage"]);
Route::post('/article/update', [ArticlesController::class, "update"]);
Route::get('/students', [StudentsController::class, "students"]);

// Route::get('/test', [PagesController::class, "test"]);
Route::get('/', [App\Http\Controllers\HomeController::class, "index"])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('email.confirmed');
Route::get('/admin', [PagesController::class, 'admin'])->name('admin')->middleware(['auth', 'admin']);
Route::get('/email-confirm', [PagesController::class, 'emailConfirm'])->name('emailconfirm')->middleware(['email.noconfirmed','auth']);

