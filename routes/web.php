<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\FileController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\DemandController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\OfferAdminController;
use App\Http\Controllers\OfferRegionController;

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




//index
Route::get('/home', [MainController::class, 'home'])->name('home');

//profile 
Route::get('/home/test', [MainController::class, 'profile'])->name('navbar');

Route::get('/profile', [MainController::class, 'profile'])->name('profile.show');

Route::post('/home', [MainController::class, 'profilestore'])->name('profile.store');


//offer
Route::get('/test/{region}', [OfferRegionController::class, 'index'])->name('offre.region');

Route::delete('/admin/profile/offres/{offer:id}/delete', [MainController::class, 'delete'])->name('offer.delete');

Route::get('/admin/profile/offres/{offer:id}/edit', [MainController::class, 'edit'])->name('offer.edit');

Route::put('/admin/profile/offres/{offer:id}/update', [MainController::class, 'update'])->name('offer.update');

Route::get('/offer/{slug}', [MainController::class, 'show'])->name('offer');


//demande
Route::get('/demandes', [DemandController::class, 'demandes'])->name('demande');

//file
Route::get('/file-download', [FileController::class, 'index'])->name('file.download.index');


//AUTH-------------


//comment
Route::post('/offer/test/comment', [CommentController::class, 'store'])->middleware('auth')->name('comment.store');

Route::get('/testss', [CommentController::class, 'commentOffer'])->middleware('auth')->name('test');

//demande
Route::get('/demandes', [DemandController::class, 'create'])->middleware('auth')->name('demand.creates');

Route::post('/demande/store', [DemandController::class, 'store'])->middleware('auth')->name('demand.store');

//offer
Route::post('/offer/store', [MainController::class, 'store'])->middleware('auth')->name('offer.store');

Route::get('/create', [MainController::class, 'create'])->middleware('auth')->name('offer.creates');

Route::get('/admin/offres/{offer:id}/edit', [MainController::class, 'edit'])->middleware('auth')->name('offer.edit');

Route::put('/admin/offres/{offer:id}/update', [MainController::class, 'update'])->middleware('auth')->name('offer.update');

Route::delete('/admin/offres/{offer:id}/delete', [MainController::class, 'delete'])->middleware('auth')->name('offer.delete');

//messages
Route::group(['prefix' => 'messages'], function () {
    Route::get('/', ['as' => 'messages', 'uses' => 'MessagesController@index'])->middleware('auth');
    Route::get('creates/{offer:id}', ['as' => 'messages.create', 'uses' => 'MessagesController@create'])->middleware('auth');
    Route::post('/', ['as' => 'messages.store', 'uses' => 'MessagesController@store'])->middleware('auth');
    Route::get('{id}', ['as' => 'messages.show', 'uses' => 'MessagesController@show'])->middleware('auth');
    Route::put('{id}', ['as' => 'messages.update', 'uses' => 'MessagesController@update'])->middleware('auth');
});


//ADMIN--------------

Route::get("send-email", [EmailController::class, "sendEmail"])->middleware('admin');

Route::get('/home/Admin', [MainController::class, 'AdminHome'])->middleware('admin')->name('admin.home');

Route::get('admin/offres', [MainController::class, 'offers'])->middleware('admin')->name('offer.show');

Route::get('/admin/offre', [OfferAdminController::class, 'index'])->middleware('admin')->name('admin.test');







Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

