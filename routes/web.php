<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

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

Auth::routes();

Route::prefix('home')->middleware('auth')->controller(TaskController::class)->group(function(){

    Route::get('/', 'index')->name('tasks.index');
    Route::get('/tasks/create', 'create')->name('tasks.create');
    Route::post('/tasks', 'store')->name('tasks.store');
    Route::get('/tasks/{task}', 'show')->name('tasks.show');
    Route::delete('/tasks/{task}', 'destroy')->name('tasks.destroy');
});
