<?php

use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\FilesController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PillierController;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\StaticPagesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\OffreController;

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
Route::resource('pillier', PillierController::class);
Route::resource('projet', ProjetController::class);
Route::resource('panzi', AboutController::class);
Route::resource('offre', OffreController::class)->middleware(['auth']);

Route::post('/files/fileupload/{article}', [FilesController::class, 'fileupload'])->name('files.fileupload');
Route::post('/files/upload/{article}', [FilesController::class, 'upload'])->name('files.upload');

require __DIR__.'/auth.php';

Route::get('onesc', [StaticPagesController::class,'onesc']);
Route::get('cj', [StaticPagesController::class,'cj']);
Route::get('icart', [StaticPagesController::class,'icart']);
Route::get('md', [StaticPagesController::class,'md']);
Route::get('joie', [StaticPagesController::class,'joie']);
Route::get('fp', [StaticPagesController::class,'fp']);
Route::get('dr', [StaticPagesController::class,'dr']);
Route::get('eq', [StaticPagesController::class,'eq']);

Route::get('contact', [ContactController::class,'contact']);
