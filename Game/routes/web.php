<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\ShipsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\UserShipsController;
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

Route::resource('/ships', ShipsController::class)->middleware(['auth'])->name('', 'ships');
Route::resource('/user', UsersController::class)->middleware(['auth'])->name('', 'user');
Route::resource('/userships', UserShipsController::class)->middleware(['auth'])->name('', 'userships');


Route::get('/', function () {
    return view('index');
})->middleware(['auth'])->name('index');

Route::get('/starters', [Controller::class, 'starters'])->middleware(['auth'])->name('starters');

Route::post('/level', [Controller::class, 'level'])->middleware(['auth'])->name('level');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/overview', function(){
    return view('overview');
})->middleware(['auth'])->name('overview');;
require __DIR__.'/auth.php';
