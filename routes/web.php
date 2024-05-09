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

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\PurchaseController;

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/', function () {
    return view('home');
})->name('home-page');

Route::get('/about', function () {
    return view('about');
})->name('about-page');

Route::get('/contact', function () {
    return view('contact');
})->name('contact-page');

Route::get('/reg', function () {
    return view('reg');
})->name('reg-page');

Route::post('/submit-trial-lesson', 'ContactController@submit')->name('submit-trial-lesson');
Route::post('/submit-review', 'FeedbackController@submit')->name('submit-review');
Route::post('/purchase-course', [PurchaseController::class, 'purchase'])->name('purchase-course');
Route::get('/purchase-courses/all', [PurchaseController::class, 'allData'])->name('purchase-data');
Route::get('/purchase-courses/all/{id}', [PurchaseController::class, 'detailMassage'])->name('purchase-detail');
Route::get('/purchase-courses/all/{id}/update', [PurchaseController::class, 'updateMassage'])->name('purchase-update');
Route::post('/purchase-courses/all/{id}/update', [PurchaseController::class, 'updateMassageSubmit'])->name('purchase-update-submit');
Route::get('/purchase-courses/all/{id}/delete', [PurchaseController::class, 'deleteMassage'])->name('purchase-delete');

