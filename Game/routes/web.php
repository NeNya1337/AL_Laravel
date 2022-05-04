<?php

use App\Http\Controllers\ShipsController;
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

Route::get('/', function () {
    return view('index');
})->middleware(['auth'])->name('index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/overview', function(){
    return view('overview');
})->middleware(['auth'])->name('overview');;
require __DIR__.'/auth.php';
