<?php

use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\FilesController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PilierController;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\StaticPagesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\OffreController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\BailleurController;
use App\Http\Controllers\AwardController;
use App\Http\Controllers\FundraisingController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\MailController;
use App\Models\fundraising;

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
Route::get('/', [homeController::class,'index']);
Route::get('/home', [homeController::class,'index']);
Route::get('/ok', function () {
    return view('layouts.HTML5_Full_Version.ok');
});

Route::resource('/user', UserController::class);
Route::resource('/blogs', BlogController::class)->middleware(['auth']);
Route::resource('news',NewsController::class);
Route::get('cat/{cat}',[NewsController::class,'media'] )->name('cat');
Route::get('/admin', function(){
    return view('admin.index');
})->middleware(['auth'])->name('dashboard');
Route::post('comment',[blogController::class,'comment'] )->middleware(['auth'])->name('comment');

Route::resource('activite', ProjetController::class);
Route::resource('pilier', PilierController::class);
Route::resource('projet', ProjetController::class);
Route::resource('panzi', AboutController::class);
Route::resource('Bailleur', BailleurController::class);
Route::resource('offre', OffreController::class)->middleware(['auth']);
Route::get('offrev/{id}', [OffreController::class, 'show']);
Route::get('offrev', [OffreController::class, 'list']);

Route::post('/files/fileupload/{article}', [FilesController::class, 'fileupload'])->name('files.fileupload');
Route::post('/files/upload/{article}', [FilesController::class, 'upload'])->name('files.upload');

require __DIR__.'/auth.php';

Route::get('cj', [StaticPagesController::class,'cj']);
Route::get('onesc', [StaticPagesController::class,'onesc']);
Route::get('icart', [StaticPagesController::class,'icart']);
Route::get('md', [StaticPagesController::class,'md']);
Route::get('joie', [StaticPagesController::class,'joie']);
Route::get('fp', [StaticPagesController::class,'fp']);
Route::get('dr', [StaticPagesController::class,'dr']);
Route::get('eq', [StaticPagesController::class,'eq']);

Route::get('contact', [ContactController::class,'contact']);
Route::resource('award', AwardController::class);
Route::resource('quote', QuoteController::class);
Route::resource('publication', PublicationController::class);



// Paypal Donation Form
Route::resource('donation',DonationController::class,);
Route::get( 'donation/success/{transaction}',  [ DonationController::class, 'donationSuccess' ] )->name('donation.success');
Route::get( 'donation/cancelled/{transaction}',  [ DonationController::class, 'donationCancelled' ] )->name('donation.cancelled');
Route::get( 'donation/notify/{transaction}',  [ DonationController::class, 'donationNotify' ] )->name('donation.notify');

Route::resource('fundraising', FundraisingController::class);

Route::get('sendbasicemail',[MailController::class,'basic_email']);
Route::get('sendhtmlemail',[MailController::class,'html_email']);
Route::get('sendattachmentemail',[MailController::class,'attachment_email']);

