<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/task', function () {
    return view('tasks.create');
});

Route::get('/dashboard', function () { 
    return view('dashboard');
});

Route::get('/delete', function () {
    return view('delete');
});

Route::get('/edit', function () {
    return view('edit');
});

Route::get('/table', '\App\Http\Controllers\TaskController@viewTable');

Route::post('/task/create', '\App\Http\Controllers\TaskController@createContent')->name('create');
