<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\LaravelController;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/hello', [PagesController::class, "helloPage"]);
// Route::get('/test', [PagesController::class, "testPage"]);

// Route::get('/laravel', [LaravelController::class, "laravelPage"]);

// Route::get('/todos', [PagesController::class, "todos"]);
// Route::get('/todos/done', [PagesController::class, "todosDone"]);
// Route::get('/todos/not-done', [PagesController::class, "todosNotDone"]);
Route::get('/students', [StudentsController::class, "students"]);



Route::get('/first-page', function() {
    return "<h1 style=\"font-family: Arial;\">This is my first page in Laravel</h1>";
});
