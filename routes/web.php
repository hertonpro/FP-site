<?php

use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\FilesController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProjetController;

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
Route::get('/',[NewsController::class,'index']);
Route::get('/home',[NewsController::class,'index']);
Route::get('/ok', function () {
    return view('layouts.HTML5_Full_Version.ok');
});

Route::resource('/user', UserController::class);
Route::resource('/blogs', BlogController::class)->middleware(['auth']);
Route::resource('news',NewsController::class);
Route::get('news/cat/{cat}',[NewsController::class,'media'] )->name('cat');
Route::get('/admin', function(){
    return view('admin.index');
})->middleware(['auth'])->name('dashboard');
Route::post('comment',[blogController::class,'comment'] )->middleware(['auth'])->name('comment');

Route::resource('activite', ProjetController::class);

Route::post('/files/fileupload/{article}', [FilesController::class, 'fileupload'])->name('files.fileupload');

require __DIR__.'/auth.php';
