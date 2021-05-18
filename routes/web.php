<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;
use App\Http\Controllers\OfferController;
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
$region = array("Occitanie","Bretagne");

$test = 1;

Route::get('/home', [MainController::class, 'home'])->name('home');

Route::get('admin/offres', [MainController::class, 'offers'])->middleware('admin')->name('offer.show');

Route::get('/offer/create', [MainController::class, 'create'])->middleware('admin')->name('offer.create');

Route::post('/offer/store', [MainController::class, 'store'])->middleware('admin')->name('offer.store');

Route::get('/admin/offre', [OfferAdminController::class, 'index'])->middleware('admin')->name('admin.test');

Route::get('/test/{region}', [OfferRegionController::class, 'index'])->name('offre.region')->where('region', $region[$test]);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

