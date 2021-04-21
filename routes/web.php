<?php

use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BlogController;

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

Route::get('/ok', function () {
    return view('layouts.HTML5_Full_Version.ok');
});

Route::resource('/user', UserController::class);
Route::resource('/blogs', BlogController::class);
Route::get('/admin', function(){
    return view('admin.index');
})->middleware(['auth'])->name('dashboard');



Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
