<?php

use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\FilesController;
use App\Http\Controllers\NwesController;

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
Route::resource('/blogs', BlogController::class)->middleware(['auth']);
Route::get('nwes',[NwesController::class,'index'] );
Route::get('/admin', function(){
    return view('admin.index');
})->middleware(['auth'])->name('dashboard');

Route::post('/files/fileupload/{article}', [FilesController::class, 'fileupload'])->name('files.fileupload');

require __DIR__.'/auth.php';
